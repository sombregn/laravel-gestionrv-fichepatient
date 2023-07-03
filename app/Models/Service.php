<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Mockery\Matcher\HasKey;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'telephone'
    ];

    protected $table = 'services';

    public function departements(){

        return $this->HasMany(Departement::class);
    }
}
