<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\ElementTrait;

class ServiceController extends Controller
{
    use ElementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];
        $service = Service::all();
        return view('adminforms.indexservices', compact('service','mailrecuNonlus','totalMailsRecu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];
        return view('adminforms.addservices',compact('mailrecuNonlus','totalMailsRecu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => ['required','string', 'max:255',],
            'telephone' => ['required','string',],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Service::create($request->all());

        return redirect()->back()->with('success', 'service ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
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
        $service = Service::find($id);
        return view('adminforms.editservices', compact('service','mailrecuNonlus','totalMailsRecu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $input = $request->all();
        $service->update($input);
        return redirect('/listeservices')->with('flash_message', 'service modifier!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Service::destroy($id);
        return redirect('/listeservices')->with('flash_message', 'service supprimer!');
    }
}
