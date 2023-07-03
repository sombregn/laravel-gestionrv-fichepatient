<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'telephone',
        'mail',
        'heures_de_visite',
        'services_offerts',
        'service_id',
        'batiment_id',
    ];

    protected $table = 'departements';

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function batiment()
    {
        return $this->belongsTo(Batiment::class);
    }

    public function docteurs()
    {
        return $this->hasMany(Docteur::class);
    }

    public function patients()
    {
        return $this->hasManyThrough(Patient::class, Docteur::class);
    }
}
