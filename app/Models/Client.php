<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = "clients";

    protected $fillable = [
    	'user_id',
    	'name',
    	'representative_name',
    	'document_permission',
    	'country',
    	'state',
    	'colony',
    	'street',
    	'postal_code',
    	'number',
    	'phone',
    	'mail',
    	'client_code'
    ];

    public function ticketsClients() {
        return $this->hasMany('App\Models\TicketClient');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
