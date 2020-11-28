<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = "tickets";

    protected $fillable = [
    	'user_id',
    	'folio',
    	'total_cost'
    ];

    public function ordersTickets() {
    	return $this->hasMany('App\Models\OrderTicket');
    }

    public function ticketsClients() {
    	return $this->hasMany('App\Models\TicketClient');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
