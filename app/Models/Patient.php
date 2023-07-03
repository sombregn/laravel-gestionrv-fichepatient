<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Patient extends Model
{
    use HasFactory;

    

    protected $table = 'patients';

    protected $fillable = [
        'user_id',
        'assurance_maladie',
        'antecedents_medicaux',
        'informations_urgence'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function docteurs()
    {
        return $this->belongsToMany(Docteur::class, 'docteur_patient', 'patient_id', 'docteur_id');
    }

    public function departements()
    {
        return $this->docteurs()->with('departement')->get()->pluck('departement')->unique();
    }

    public function rendezVous()
    {
        return $this->hasMany(RendezVous::class);
    }
}
