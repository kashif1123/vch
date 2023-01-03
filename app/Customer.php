<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=['id','name','cnic','address','opening_balance','registration_date','type','description'];
}
