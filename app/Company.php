<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
     protected $fillable = [
        'rfc','name', 'address',
    ];

    public function categories(){
    	return $this->hasMany(Company::class);
    }

    public function stores(){
    	return $this->hasMany(Store::class);
    }
}
