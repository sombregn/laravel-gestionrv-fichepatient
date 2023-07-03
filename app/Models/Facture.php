<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = [
        'montant',
        'date_emission',
        'statut_paiement',
        'rendez_vous_id'
    ];

    protected $table = 'factures';

    public function rendezVous()
    {
        return $this->belongsTo(RendezVous::class);
    }
}
