<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'job',
        'role',
        'born_date',
        'phone',
        'state',
        'street',
        'municipality',
        'exterior_number',
        'postal_code',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function agentsSales() {
        return $this->hasMany('App\Models\AgentSales');
    }  

    public function orders() {
        return $this->hasMany('App\Models\Order');
    }

    public function tickets() {
        return $this->hasMany('App\Models\Ticket');
    }

    public function clients() {
        return $this->hasMany('App\Models\Client');
    }

    public function inventories() {
        return $this->hasMany('App\Models\Inventory');
    }

    public function products() {
        return $this->hasMany('App\Models\Product');
    }

    public function categories() {
        return $this->hasMany('App\Models\Category');
    }

    public function providers() {
        return $this->hasMany('App\Models\Provider');
    }

    public function catalogsGivenBy() {
        return $this->hasMany('App\Models\CatalogGivenBy');
    }
}
