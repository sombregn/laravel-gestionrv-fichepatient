<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\BatimentController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DocteurController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceivedMailController;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Accueil.index');
})->name('/');

Route::get('/about', function () {
    return view('Accueil/about');
})->name('about');

Route::get('/service', function () {
    return view('Accueil/service');
})->name('service');

Route::get('/price', function () {
    return view('Accueil/price');
})->name('price');

Route::get('/contact', function () {
    return view('Accueil/contact');
})->name('contact');

Route::get('/blog', function () {
    return view('Accueil/blog');
})->name('blog');

Route::get('/detail', function () {
    return view('Accueil/detail');
})->name('detail');

Route::get('/search', function () {
    return view('Accueil/search');
})->name('search');

Route::get('/connection', function () {
    return view('Auth.login');
})->name('connection');

Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback',  [ProviderController::class, 'callback']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('accueil');
Route::get('/listemessages/{id?}', [ReceivedMailController::class, 'create'])->middleware(['auth', 'verified']);
Route::get('/listemessages/{id?}', [ReceivedMailController::class, 'index'])->middleware(['auth', 'verified'])->name('messages.index');

Route::get('/dashboard/search', [PatientController::class, 'search'])->middleware(['auth', 'verified'])->name('dashboard.search');

Route::middleware('auth', 'role:admin')->group(function(){

    Route::get('/ajoutservice', [ServiceController::class, 'create']);
    Route::post('/ajoutservice',[ServiceController::class, 'store']);
    Route::get('/listeservices', [ServiceController::class, 'index']);
    Route::get('/editservices/{id}', [ServiceController::class, 'edit'])->name('edit');
    Route::post('/editservices/{id}', [ServiceController::class, 'update']);
    Route::delete('/listeservice/{id}', [ServiceController::class, 'destroy'])->name('delete');

    Route::get('/ajoutbatiment', [BatimentController::class, 'create']);
    Route::post('/ajoutbatiment', [BatimentController::class, 'store']);

    Route::get('/ajoutbatiment', [BatimentController::class, 'create']);
    Route::post('/ajoutbatiment', [BatimentController::class, 'store']);
    Route::get('/listebatiment', [BatimentController::class, 'index']);
    Route::get('/editbatiments/{id}', [BatimentController::class, 'edit'])->name('editbatiment');
    Route::post('/editbatiments/{id}', [BatimentController::class, 'update']);
    Route::delete('/listebatiment/{id}', [BatimentController::class, 'destroy'])->name('deletebatiment');

    Route::get('/ajoutdepartement', [DepartementController::class, 'create']);
    Route::get('/ajoutdepartement', [DepartementController::class, 'get_Service_Batiment']);
    Route::post('/ajoutdepartement', [DepartementController::class, 'store']);
    Route::get('/listedepartement', [DepartementController::class, 'index']);
    Route::get('/listedepartement/search', [DepartementController::class, 'search'])->name('departement.search');
    Route::get('/editdepartements/{id}', [DepartementController::class, 'edit'])->name('editdepartement');
    Route::post('/editdepartements/{id}', [DepartementController::class, 'update']);
    Route::delete('/listedepartement/{id}', [DepartementController::class, 'destroy'])->name('deletedepartement');

    Route::get('/ajoutdocteur', [DocteurController::class, 'create']);
    Route::get('/ajoutdocteur', [DocteurController::class, 'getDepartements']);
    Route::post('/ajoutdocteur', [DocteurController::class, 'store']);
    Route::get('/listedoctor', [DocteurController::class, 'index']);
    Route::get('/listedoctor/search', [DocteurController::class, 'search'])->name('docteur.search');
    Route::get('/editdocteurs/{id}', [DocteurController::class, 'edit'])->name('editdocteur');
    Route::post('/editdocteurs/{id}', [DocteurController::class, 'update'])->name('updatedocteur');
    Route::delete('/listedocteur/{id}', [DocteurController::class, 'destroy'])->name('deletedocteur');


    Route::get('/ajoutpatient', [PatientController::class, 'create']);
    Route::post('/ajoutpatient', [PatientController::class, 'store']);
    Route::get('/listepatient', [PatientController::class, 'index']);
    Route::get('/listepatient/search', [PatientController::class, 'searchPatient'])->name('patient.search');
    Route::get('/editpatients/{id}', [PatientController::class, 'edit'])->name('editpatient');
    Route::post('/editpatients/{id}', [PatientController::class, 'update'])->name('updatepatient');
    Route::delete('/listepatient/{id}', [PatientController::class, 'destroy'])->name('deletepatient');

    Route::get('/listerendezvous', [RendezVousController::class, 'index'])->name('listerdv');
    Route::delete('/listerendezvous/{id}', [RendezVousController::class, 'destroy'])->name('deleterdv');
    Route::post('/listerendezvous/{id}', [RendezVousController::class, 'confrdv'])->name('confrdv');
    Route::get('/emailview/{id}', [AdminController::class, 'emailview']);
    Route::post('/emailview/{id}', [AdminController::class, 'sendemail']);
});

Route::middleware('auth', 'role:patient')->group(function(){
    Route::get('/departement/{id}', [DepartementController::class, 'show'])->whereNumber('id');
    Route::post('/departement/{id}', [RendezVousController::class, 'store']);
    Route::get('/historiquerendez-vous', [RendezVousController::class, 'rdvpatient']);
});

Route::middleware('auth', 'role:docteur')->group(function(){
    Route::get('planifierrendezvous/{id_rdv}/{id_user}',[RendezVousController::class, 'create'])->whereNumber(['id_rdv','id_user']);
    Route::post('planifierrendezvous/{id_rdv}/{id_user}',[RendezVousController::class, 'planifier']);
    Route::get('/ajoutpatientD', [PatientController::class, 'FormAjoutPatientParDocteur']);
    Route::post('/ajoutpatientD', [PatientController::class, 'ajoutPatientParDocteur']);
    Route::get('/listepatientD', [PatientController::class, 'listePatientParDocteur'])->name('listepatientD');
    Route::get('/listerendezvousD', [RendezVousController::class, 'listeRendezVousParDocteur'])->name('listerendezvousD');
    Route::get('/listerendezvousD/{id}', [ConsultationController::class, 'create'])->whereNumber('id');
    Route::post('/listerendezvousD/{id}', [ConsultationController::class, 'store'])->name('save');
});


require __DIR__.'/auth.php';
