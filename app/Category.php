<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
    	'company_id', 'name','description','inventary',
    ];

    public function company(){
    	return $this->belongsTo(Company::class);
    }

    public function products(){
    	return $this->hasMany(Product::class);
    }
}
