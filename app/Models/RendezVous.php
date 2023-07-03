<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class RendezVous extends Model
{
    use HasFactory;

    protected $dates = ['date_et_heure'];

    protected $fillable = [
        'date_et_heure',
        'duree',
        'statut',
        'motif',
        'commentaires',
        'patient_id',
        'docteur_id'

    ];

    protected $table = 'rendez_vous';


    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function docteur()
    {
        return $this->belongsTo(Docteur::class, 'docteur_id');
    }

    public function consultations(){

        return $this->HasMany(Consultation::class);
    }

    public function facture()
    {
        return $this->hasOne(Facture::class);
    }

}
