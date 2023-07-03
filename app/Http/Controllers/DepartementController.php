<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use App\Models\Departement;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\ElementTrait;

class DepartementController extends Controller
{
    use ElementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];
        $departement = Departement::paginate(4);
        return view('adminforms.indexdepartement', compact('departement','mailrecuNonlus','totalMailsRecu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {

        return view('adminforms.adddepartements');
    }

    public function get_Service_Batiment()
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];
        $services = Service::all();
        $batiments = Batiment::all();
        return view('adminforms.adddepartements', compact('services', 'batiments','mailrecuNonlus','totalMailsRecu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nom' => ['required','string', 'max:255',],
            'description' => ['required','string',],
            'telephone' => ['required','string',],
            'mail' => ['required','string', 'email', 'max:255',],
            'heures_de_visite' => ['required','string', 'max:255',],
            'services_offerts' => ['required','string', 'max:255',],
            'service_id' => ['required',],
            'batiment_id' => ['required',],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Departement::create($request->all());


        return redirect()->back()->with('success', 'département ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];
        $departement = Departement::find($id);
        return view('patient.docteurs', compact('departement','mailrecuNonlus','totalMailsRecu'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];
        $departement = Departement::find($id);
        $services = Service::all();
        $batiments = Batiment::all();
        return view('adminforms.editdepartements', compact('departement','services','batiments','mailrecuNonlus','totalMailsRecu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $departement = Departement::find($id);
        $input = $request->all();
        $departement->update($input);
        return redirect('/listedepartement')->with('flash_message', 'departement modifier!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Departement::destroy($id);
        return redirect('/listedepartement')->with('flash_message', 'departement supprimer!');
    }

    public function search(Request $request)
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];
        $searchTerm = $request->input('search');

        $searchResults = Departement::where('nom', 'LIKE', '%'.$searchTerm.'%')->paginate(4);

        return view('adminforms.indexdepartement', compact('searchResults','mailrecuNonlus','totalMailsRecu'));
    }
}
