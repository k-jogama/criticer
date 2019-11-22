<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function index()
    {
        $eatlogs = DB::table('eatlogs')->orderBy('id', 'desc')->get();
        return view('list', compact('eatlogs'));
    }
}
