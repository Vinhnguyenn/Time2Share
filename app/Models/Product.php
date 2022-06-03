<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function getUser(){
        return $this->belongsTo('\App\Models\Product', 'owner_email', 'email');
    }

    public function getLender(){
        return $this->belongsTo('\App\Models\Product', 'lender_email', 'email');
    }

    public function getCategory(){
        return $this->belongsTo('\App\Models\Category', 'category', 'category');
    }

    public function allReviews(){
        return $this->hasMany('\App\Models\Review', 'product_name', 'name');
    }
}
