<?php

namespace App\Http\Controllers;

use App\Models\Docteur;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;

class DocteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docteur = Docteur::with('user')->paginate(4);
        return view('adminforms.indexdoctor', compact('docteur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('adminforms.adddocteurs');
    }

    public function getDepartements(){
        return view('adminforms.adddocteurs', ['departements' => Departement::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => ['required','string', 'max:255',],
            'email' => ['required','string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'adresse' => ['required','string',],
            'telephone' => ['required','string',],
            'genre' => ['required','string',],
            'date_de_naissance' => ['required','date'],
            'groupe_sanguin' => ['required','string',],
            'photo' => ['required','file',],
            'horaires_de_consultation' => ['required','string',],
            'specialite' => ['required','string',],
            'departement_id' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'genre' => $request->genre,
            'adresse' => $request->adresse,
            'date_de_naissance' => $request->date_de_naissance,
            'groupe_sanguin' => $request->groupe_sanguin,
            'photo' => $request->photo,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoFileName = $photo->getClientOriginalName();
            $photo->move(public_path('userimgs'), $photoFileName);
            $user->photo = 'userimgs/' . $photoFileName;
            $user->save();
        }

        $role = Role::where('nom', 'docteur')->first();
        $user->roles()->attach($role);

        $docteur = new Docteur([
            'horaires_de_consultation' => $request->horaires_de_consultation,
            'specialite' => $request->specialite,
            'departement_id' => $request->departement_id,
        ]);
        $user->docteur()->save($docteur);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Docteur $docteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $docteur = Docteur::findOrFail($id);
        $departements = Departement::all();
        $genres = ['Masculin', 'Féminin'];
        return view('adminforms.editdoctor', compact('docteur','departements','genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'adresse' => ['required', 'string'],
            'telephone' => ['required', 'string'],
            'genre' => ['required', 'string'],
            'date_de_naissance' => ['required', 'date'],
            'groupe_sanguin' => ['required', 'string'],
            'horaires_de_consultation' => ['required', 'string'],
            'specialite' => ['required', 'string'],
            'departement_id' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $docteur = Docteur::find($id);
        $docteur->update([
            'horaires_de_consultation' => $request->horaires_de_consultation,
            'specialite' => $request->specialite,
            'departement_id' => $request->departement_id,
        ]);

        $user = $docteur->user;
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'genre' => $request->genre,
            'date_de_naissance' => $request->date_de_naissance,
            'groupe_sanguin' => $request->groupe_sanguin,
            'photo' => $request->photo,
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoFileName = $photo->getClientOriginalName();
            $photo->move(public_path('userimgs'), $photoFileName);
            $user->photo = 'userimgs/' . $photoFileName;
            $user->save();
        }

        return redirect('/listedoctor')->with('flash_message', 'Docteur modifié !');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Docteur::destroy($id);
        return redirect('/listedoctor')->with('flash_message', 'batiment supprimer!');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $searchResults = Docteur::with('user')
        ->whereHas('user', function ($query) use ($searchTerm) {
            $query->where('name', 'LIKE', '%' . $searchTerm . '%');
        })->paginate(4);

        return view('adminforms.indexdoctor', compact('searchResults'));
    }
}
