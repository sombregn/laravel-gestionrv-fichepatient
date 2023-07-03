<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\ElementTrait;

class BatimentController extends Controller
{
    use ElementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];
        $batiment = Batiment::all();
        return view('adminforms.indexbatiment', compact('batiment','mailrecuNonlus','totalMailsRecu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];
        return view('adminforms.addbatiments',compact('mailrecuNonlus','totalMailsRecu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nom' => ['required','string']
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Batiment::create($request->all());

        return redirect()->back()->with('success', 'batiment ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Batiment $batiment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];
        $batiment = Batiment::find($id);
        return view('adminforms.editbatiments', compact('batiment','mailrecuNonlus','totalMailsRecu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $batiment = Batiment::find($id);
        $input = $request->all();
        $batiment->update($input);
        return redirect('/listebatiment')->with('flash_message', 'batiment modifier!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        Batiment::destroy($id);
        return redirect('/listebatiment')->with('flash_message', 'batiment supprimer!');
    }
}
