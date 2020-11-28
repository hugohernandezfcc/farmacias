<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTicket extends Model
{
    use HasFactory;

    protected $table = "orders_tickets";

    protected $fillable = [
    	'order_id',
    	'ticket_id'
    ];

	public function order() {
		return $this->belongsTo('App\Models\Order');
	}    

	public function ticket() {
		return $this->belongsTo('App\Models\Ticket');
	}
}
