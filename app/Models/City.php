<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public function customer()
    {
        return $this->hasOne(Customer::class);
    }
    public function city_bill_rate(){
        return $this->hasMany(City_Bill_rate::class);
    }
}
