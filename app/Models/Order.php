<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillable = [
    	'user_id',
    	'agent_sales_id',
    	'inventory_id',
    	'description',
    	'unit_cost',
    	'discount'
    ];

    public function agentSales() {
        return $this->belongsTo('App\Models\AgentSales');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function ordersTickets() {
        return $this->hasMany('App\Models\OrderTicket');
    }    

    public function inventory() {
        return $this->belongsTo('App\Models\Inventory');
    }
}
