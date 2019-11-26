<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userid = Auth::id();
        $eatlogs = DB::table('eatlogs')->where('userid', $userid)->orderBy('id', 'desc')->get();
        return view('list', compact('eatlogs'));
    }
}
