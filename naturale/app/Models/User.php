<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
        'isAdmin',
        'subscribed',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'two_factor_confirmed_at' => 'datetime',
        ];
    }

    public function orders()
    {
        return $this->hasManyThrough(
            Order::class,
            Customer::class,
            'c_uid',
            'o_cid',
            'id',
            'cid'
        );
    }

    public function addresses()
    {
        return $this->hasManyThrough(
            Address::class,  
            Customer::class, 
            'c_uid',         
            'ca_cid',        
            'id',            
            'cid'            
        );
    }

    public function isAdmin()
    {
        return $this->isAdmin == 'admin';
    }

    public function isSubscriber()
    {
        return $this->subscribed == '1';
    }
}
