<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batiment extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
    ];

    protected $table = 'batiments';

    public function departements(){

        return $this->HasMany(Departement::class);
    }
}
