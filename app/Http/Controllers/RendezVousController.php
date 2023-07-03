<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\RendezVous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Role;
use App\Notifications\SendEmailPlanification;
use Illuminate\Support\Facades\Notification;
use App\Models\ReceivedMail;
use App\Traits\ElementTrait;

class RendezVousController extends Controller
{
    use ElementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $rendezVousAdmin = RendezVous::whereNotNull('date_et_heure')->paginate(3);
        $rendezVousAttente = RendezVous::whereNull('date_et_heure')->whereNull('statut')->paginate(3);
        $RendezVousAujourdhui = RendezVous::whereDate('date_et_heure', today())->paginate(3);
        $RendezVousconfirme = RendezVous::where('statut', 'confirmé')->paginate(3);

        return view('adminforms.indexrendezvous', compact('rendezVousAdmin', 'rendezVousAttente','RendezVousAujourdhui','RendezVousconfirme'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id_rdv, $id_user)
    {
        $datardv = RendezVous::find($id_rdv);
        $datauser = User::find($id_user);
        return view('docteur.planifrdv',compact('datardv','datauser'));
    }

    public function planifier(Request $request, $id_rdv, $id_user)
    {
        $datardv = RendezVous::find($id_rdv);
        $datauser = User::find($id_user);

        $validator = Validator::make($request->all(),[
            'date_et_heure' => ['required','date']
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $dateToAdd = date('Y-m-d H:i:s', strtotime($request->input('date_et_heure')));

        $details=[
            'message' => $request->message,
            'cliquesurlurl' => $request->cliquesurlurl,
            'date_et_heure' =>$dateToAdd,
        ];

        $recipient = User::find($id_user);
        $sender = Auth::user();

        $mail = ReceivedMail::create([
            'subject' => 'Retour sur votre demande de rendez-vous',
            'message' => $details['message'].$dateToAdd,
            'cliquesurlurl' => $details['cliquesurlurl'],
            'sender_id' => $sender->id,
            'recipient_id' => $recipient->id,
        ]);

        $input = [
                'date_et_heure' => $dateToAdd,
                'statut' => $request->input('statut'),
            ];

        $datardv->update($input);

        Notification::send($datauser,new SendEmailPlanification($details));

        return redirect()->route('accueil');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'motif' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        RendezVous::create($request->all());

        return redirect()->back();

    }

    public function rdvpatient(){
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];
        $patient = Auth::user()->patient;
        $id = $patient->id;

        $patientrdv = RendezVous::where('patient_id', $id)
        ->orderBy('created_at', 'asc')
        ->paginate(3);

        return view('patient.rdvpatient',compact('patientrdv','mailrecuNonlus','totalMailsRecu'));
    }

    /**
     * Display the specified resource.
     */
    public function show(RendezVous $rendezVous)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RendezVous $rendezVous)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RendezVous $rendezVous)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        RendezVous::destroy($id);
        return redirect('/listerendezvous')->with('flash_message', 'rendez-vous supprimer!');
    }

    public function confrdv(Request $request, $id)
    {
        $rendezVous = RendezVous::find($id);
        $input = $request->all();
        $rendezVous->update($input);
        return redirect('/listerendezvous');
    }

    public function listeRendezVousParDocteur()
    {
        $doctorId = Auth::user()->docteur->id;

        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];

        $rendezVousPlanifie = RendezVous::where('docteur_id', $doctorId)
        ->where('date_et_heure', '>', now()) // Rendez-vous futurs
        ->orderBy('created_at', 'asc')
        ->paginate(3);

        $RendezVousAujourdhui = RendezVous::where('docteur_id', $doctorId)
        ->whereDate('date_et_heure', today()) // Rendez-vous pour aujourd'hui
        ->orderBy('created_at', 'asc')
        ->paginate(3);

        $RendezVousTerminé = RendezVous::where('docteur_id', $doctorId)
        ->where('statut', 'Terminé')
        ->orderByRaw("CASE WHEN statut = 'Terminé' THEN 0 ELSE 1 END, date_et_heure DESC")
        ->paginate(3);

        $rendezVousConfirmes = RendezVous::where('docteur_id', $doctorId)
        ->where('statut', 'confirmé')
        ->orderBy('date_et_heure', 'asc')
        ->paginate(3);

        return view('docteur.indexrendezvous', compact('mailrecuNonlus','totalMailsRecu','rendezVousPlanifie', 'RendezVousAujourdhui','RendezVousTerminé','rendezVousConfirmes'));
    }
}
