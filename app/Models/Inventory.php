<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = "agents_sales";

    protected $fillable = [
    	'total_quantity',
    	'shelving',
    	'user_id'
    ];

    public function orders() {
    	return $this->hasMany('App\Models\Order');
    } 

    public function products() {
    	return $this->hasMany('App\Models\Product');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
