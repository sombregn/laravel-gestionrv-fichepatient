<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
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

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
