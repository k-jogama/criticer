<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Eatlog extends Model
{
    protected $fillable = [
        'shopname', 'score', 'reserve_tel', 'reserve_judgment', 'address', 'business_hours', 'payment_method', 'service_charge',
        'private_room', 'smoking_judgment', 'parking', 'hp', 'shoptel', 'eatlogurl', 'img'
    ];
    protected $table = 'eatlogs';

    public function scopeStore($request)
    {
//        $flight = new App\Flight();

//        $this->fill(
//            ['shopname' => $request->input('shopname')],
//            ['score' => $request->input('score')],
//            ['reserve_tel' => $request->input('reserve_tel')],
//            ['reserve_judgment' => $request->input('reserve_judgment')],
//            ['address' => $request->input('address')],
//            ['business_hours' => $request->input('business_hours')],
//            ['payment_method' => $request->input('payment_method')],
//            ['service_charge' => $request->input('service_charge')],
//            ['private_room' => $request->input('private_room')],
//            ['smoking_judgment' => $request->input('smoking_judgment')],
//            ['parking' => $request->input('parking')],
//            ['hp' => $request->input('hp')],
//            ['shoptel' => $request->input('shoptel')],
//            ['eatlogurl' => $request->input('eatlogurl')],
//            ['img' => $request->input('img')]
//        );
//
//        $this->save();
    }
}
