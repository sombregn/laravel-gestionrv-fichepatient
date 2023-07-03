<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $fillable = [
        'medicament',
        'posologie',
        'duree_traitement',
        'consultation_id',
    ];

    protected $table = 'prescriptions';

    public function consultation()
    {
        return $this->belongsTo(Consultation::class);
    }
}
