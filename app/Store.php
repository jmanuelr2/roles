<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
    	'company_id', 'name', 'address',
    ];

    public function company(){
    	return $this->belongsTo(Company::class);
    }
}
