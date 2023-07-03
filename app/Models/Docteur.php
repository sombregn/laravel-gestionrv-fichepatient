<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docteur extends Model
{
    use HasFactory;

    protected $table = 'docteurs';

    protected $fillable = [
        'user_id',
        'horaires_de_consultation',
        'departement_id',
        'specialite',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function cours()
    {
        return $this->belongsToMany(Patient::class, 'docteur_patient', 'docteur_id', 'patient_id');
    }

    public function rendezVous()
    {
        return $this->hasMany(RendezVous::class);
    }
}
