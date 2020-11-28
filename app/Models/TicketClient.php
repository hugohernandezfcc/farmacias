<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketClient extends Model
{
    use HasFactory;

    protected $table = "tickets_clients";

    protected $fillable = [
    	'ticket_id',
    	'client_id'
    ];

    public function ticket() {
    	return $this->belongsTo('App\Models\Ticket');
    }

    public function client() {
    	return $this->belongsTo('App\Models\Client');
    }
}
