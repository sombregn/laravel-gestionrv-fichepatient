<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Facture;
use App\Models\Prescription;
use App\Models\RendezVous;
use Illuminate\Http\Request;
use App\Traits\ElementTrait;

class ConsultationController extends Controller
{
    use ElementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
         $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
         $totalMailsRecu = $this->getMails()['totalMailsRecu'];
         $rendezvous = RendezVous::find($id);

        return view('docteur.consultationbyrdv', compact('mailrecuNonlus','totalMailsRecu','rendezvous'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $rdv = RendezVous::find($id);
        $input = [
            'statut' => 'Terminé',
        ];
        $rdv->update($input);

        $consultation = new Consultation([
            'symptomes' => $request->symptomes,
            'diagnostic' => $request->diagnostic,
            'traitements' => $request->traitements,
            'suivi' => $request->suivi,
        ]);

        $rdv->consultations()->save($consultation);

        $prescription = new Prescription([
            'medicament' => $request->medicament,
            'posologie' => $request->posologie,
            'duree_traitement' => $request->duree_traitement,
        ]);

        $consultation->prescriptions()->save($prescription);

        $facture = new Facture([
            'montant' => $request->montant,
            'date_emission' => now(),
            'statut_paiement' => $request->statut_paiement,
        ]);

        $rdv->facture()->save($facture);



        return redirect()->route('listerendezvousD');

    }

    /**
     * Display the specified resource.
     */
    public function show(Consultation $consultation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consultation $consultation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consultation $consultation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consultation $consultation)
    {
        //
    }
}
