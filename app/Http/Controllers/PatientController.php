<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Patient;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use App\Traits\ElementTrait;

class PatientController extends Controller
{
    use ElementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];
        $patients = Patient::with('user')->paginate(4);
        return view('adminforms.indexpatient', compact('patients','mailrecuNonlus','totalMailsRecu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];
        return view('adminforms.addpatient',compact('mailrecuNonlus','totalMailsRecu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required','string', 'max:255'],
            'email' => ['required','string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'adresse' => ['required','string'],
            'telephone' => ['required','string'],
            'genre' => ['required','string'],
            'date_de_naissance' => ['required','date'],
            'groupe_sanguin' => ['required','string'],
            'photo' => ['required','image'], // Règle de validation pour le champ photo
            'assurance_maladie' => ['required','string'],
            'antecedents_medicaux' => ['required','string'],
            'informations_urgence' => ['required','string'],
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
        ]);

        // Enregistrement de la photo
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoFileName = $photo->getClientOriginalName();
            $photo->move(public_path('userimgs'), $photoFileName);
            $user->photo = 'userimgs/' . $photoFileName;
            $user->save();
        }

        $role = Role::where('nom', 'patient')->first();
        $user->roles()->attach($role);

        $patient = new Patient([
            'assurance_maladie' => $request->assurance_maladie,
            'antecedents_medicaux' => $request->antecedents_medicaux,
            'informations_urgence' => $request->informations_urgence,
        ]);
        $user->patient()->save($patient);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
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
        $patient = Patient::findOrFail($id);
        $genres = ['Masculin', 'Féminin'];
        return view('adminforms.editpatient', compact('patient','genres','mailrecuNonlus','totalMailsRecu'));
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
            'assurance_maladie' => ['required','string'],
            'antecedents_medicaux' => ['required','string'],
            'informations_urgence' => ['required','string'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $patient = Patient::find($id);
        $patient->update([
            'assurance_maladie' => $request->assurance_maladie,
            'antecedents_medicaux' => $request->antecedents_medicaux,
            'informations_urgence' => $request->informations_urgence,
        ]);

        $user = $patient->user;
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

        return redirect('/listepatient')->with('flash_message', 'Patient modifié !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Patient::destroy($id);
        return redirect('/indexpatient')->with('flash_message', 'batiment supprimer!');
    }

    // public function getDept(){

    //     $departements = Departement::paginate(4);

    //     return view('dashboard', compact('departements'));
    // }

    public function search(Request $request)
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];
        $searchTerm = $request->input('search');

        $searchResults = Departement::where('nom', 'LIKE', '%'.$searchTerm.'%')->paginate(4);

        $departements = Departement::paginate(4);

        return view('dashboard', compact('searchResults' , 'departements','mailrecuNonlus','totalMailsRecu'));
    }

    public function searchPatient(Request $request)
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];
        $searchTerm = $request->input('search');

        $searchResults = Patient::with('user')
        ->whereHas('user', function ($query) use ($searchTerm) {
            $query->where('name', 'LIKE', '%' . $searchTerm . '%');
        })->paginate(4);

        return view('adminforms.indexpatient', compact('searchResults','mailrecuNonlus','totalMailsRecu'));
    }

    public function FormAjoutPatientParDocteur() : View
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];

        return view('docteur.addpatient', compact('mailrecuNonlus','totalMailsRecu'));
    }

    public function ajoutPatientParDocteur(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required','string', 'max:255'],
            'email' => ['required','string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'adresse' => ['required','string'],
            'telephone' => ['required','string'],
            'genre' => ['required','string'],
            'date_de_naissance' => ['required','date'],
            'groupe_sanguin' => ['required','string'],
            'photo' => ['required','image'], // Règle de validation pour le champ photo
            'assurance_maladie' => ['required','string'],
            'antecedents_medicaux' => ['required','string'],
            'informations_urgence' => ['required','string'],
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
        ]);

        // Enregistrement de la photo
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoFileName = $photo->getClientOriginalName();
            $photo->move(public_path('userimgs'), $photoFileName);
            $user->photo = 'userimgs/' . $photoFileName;
            $user->save();
        }

        $role = Role::where('nom', 'patient')->first();
        $user->roles()->attach($role);

        $patient = new Patient([
            'assurance_maladie' => $request->assurance_maladie,
            'antecedents_medicaux' => $request->antecedents_medicaux,
            'informations_urgence' => $request->informations_urgence,
        ]);
        $user->patient()->save($patient);
        $patient->docteurs()->attach(Auth::user()->docteur->id);

        return redirect()->back();
    }

    public function listePatientParDocteur()
    {
        $mailrecuNonlus = $this->getMails()['mailrecuNonlus'];
        $totalMailsRecu = $this->getMails()['totalMailsRecu'];

        $doctorId = Auth::user()->docteur->id;
        // dd($doctorId);
        $patients = Patient::whereHas('docteurs', function ($query) use ($doctorId) {
            $query->where('docteurs.id', $doctorId);
        })->paginate(4);
        return view('docteur.indexpatient', compact('patients','mailrecuNonlus','totalMailsRecu'));
    }
}
