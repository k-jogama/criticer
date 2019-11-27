<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function show($id)
    {
        $eatlog = DB::table('eatlogs')->where('id', $id)->get();
        return view('detail')->with('eatlog', $eatlog[0]);
    }
}
