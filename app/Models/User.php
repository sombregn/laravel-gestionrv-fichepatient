<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\support\Str;
use App\Models\Patient;
use App\Models\Docteur;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'provider',
        'provider_id',
        'provider_token',
        'adresse',
        'telephone',
        'genre',
        'date_de_naissance',
        'groupe_sanguin',
        'photo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function patient()
    {
        return $this->hasOne(Patient::class);
    }

    public function docteur()
    {
        return $this->hasOne(Docteur::class);
    }

    public function recuMails()
    {
        return $this->hasMany(ReceivedMail::class, 'recipient_id');
    }

    public function sentMails()
    {
        return $this->hasMany(ReceivedMail::class, 'sender_id');
    }

    public static function generateUserName($username)
    {
        if($username === null){
            $username = Str::lower(Str::random(8));
        }
        if(User::where('username', $username)->exists()){
            $newUsername = $username.Str::lower(Str::random(3));
            $username = self::generateUserName($newUsername);

        }
        return $username;
    }
}
