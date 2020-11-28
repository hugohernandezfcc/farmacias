<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentSales extends Model
{
    use HasFactory;

    protected $table = "agents_sales";

    protected $fillable = [
    	'name',
    	'country',
    	'state',
    	'colony',
    	'setreet',
    	'postal_code',
    	'number',
    	'phone',
    	'mail',
    	'record_sale',
    	'user_id'
    ];

    public function orders() {
        return $this->hasMany('App\Models\Order');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
