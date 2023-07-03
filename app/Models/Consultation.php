<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'symptomes',
        'diagnostic',
        'traitements',
        'suivi',
        'rendez_vous_id'
    ];

    protected $table = 'consultations';

    public function rendezVous()
    {
        return $this->belongsTo(RendezVous::class);
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }
}
