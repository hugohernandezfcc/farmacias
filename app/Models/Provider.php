<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $table = "providers";

    protected $fillable = [
    	'user_id',
    	'product_id',
    	'name',
    	'country',
    	'state',
    	'colony',
    	'street',
    	'postal_code',
    	'number',
    	'phone',
    	'mail'
    ];

    public function product() {
    	return $this->belongsTo('App\Models\Product');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
