<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Eatlog extends Model
{
    protected $fillable = [
        'userid', 'shopname', 'score', 'reserve_tel', 'reserve_judgment', 'address', 'business_hours', 'payment_method', 'service_charge',
        'private_room', 'smoking_judgment', 'parking', 'hp', 'shoptel', 'eatlogurl', 'img'
    ];
    protected $table = 'eatlogs';
}
