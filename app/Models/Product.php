<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
    	'user_id',
    	'name',
    	'description',
    	'sku',
    	'formula',
    	'laboratory',
    	'product_code',
    	'purchase_price',
    	'sales_price',
    	'barcode',
		'net_content'    	
    ];

    public function inventory() {
        return $this->belongsTo('App\Models\Inventory');
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

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
