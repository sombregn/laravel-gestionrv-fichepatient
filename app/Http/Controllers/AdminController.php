<?php

namespace App\Http\Controllers;

use App\Models\Docteur;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\RendezVous;
use App\Models\Departement;
use App\Models\ReceivedMail;
use App\Models\User;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Traits\ElementTrait;

class AdminController extends Controller
{
    use ElementTrait;

    public function dashboard()
    {
        $totalRendezVous = RendezVous::count();
        $totalPatients = Patient::count();
        $totalMedecins = Docteur::count();
        $totalRendezVousAujourdhui = RendezVous::whereDate('date_et_heure', today())->count();
        $departements = Departement::paginate(4);
        if (Auth::user()->docteur) {
            $docteurId = Auth::user()->docteur->id;
            $rendezVousDocteur = RendezVous::where('docteur_id', $docteurId)->whereNull('date_et_heure')->orderBy('date_et_heure', 'asc')->paginate(3);
        } else {
            $rendezVousDocteur = collect(); // Rendez-vous vide pour les autres utilisateurs
        }


        //$elementts = $this->getMails();
        //dd($elementts);
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];

        return view('dashboard', compact('totalRendezVous', 'totalPatients', 'totalMedecins', 'totalRendezVousAujourdhui','departements','rendezVousDocteur','mailrecuNonlus','totalMailsRecu'));
    }

    public function emailview($id)
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];
        $data = User::find($id);
        return view('adminforms.emailview',compact('data','mailrecuNonlus','totalMailsRecu'));
    }

    public function sendemail(Request $request, $id)
    {
        $data = User::find($id);

        $details=[
            'message' => $request->message,
            'cliquesurlurl' => $request->cliquesurlurl,
        ];

        $recipient = User::find($id);
        $sender = Auth::user();

        $mail = ReceivedMail::create([
            'subject' => 'Retour sur votre demande de rendez-vous',
            'message' => $details['message'],
            'cliquesurlurl' => $details['cliquesurlurl'],
            'sender_id' => $sender->id,
            'recipient_id' => $recipient->id,
        ]);

        Notification::send($data,new SendEmailNotification($details));

        return redirect()->back();
    }
}
