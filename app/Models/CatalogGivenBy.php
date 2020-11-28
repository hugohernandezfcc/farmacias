<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogGivenBy extends Model
{
    use HasFactory;

    protected $table = "catalogs_given_by";

    protected $fillable = [
    	'user_id',
    	'product_id',
    	'given_by',
    	'description'
    ];

    public function product() {
    	return $this->belongsTo('App\Models\Product');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
