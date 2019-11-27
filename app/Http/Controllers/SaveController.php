<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eatlog;
use Illuminate\Support\Facades\Auth;

class SaveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $eatlog = new Eatlog();
        $userid = Auth::id();
        $eatlog->userid = $userid;
        foreach ($request->all() as $key => $item) {
            if ($key == '_token') continue;
            if ($request->{$key}) {
                $eatlog->{$key} = $request->{$key};
            } else {
                $eatlog->{$key} = '';
            }
        }
        $eatlog->save();

        session()->flash('msg_success', config('const.MESSAGE_FAVORITE_ENTRY'));
        return redirect('/home');
    }
}
