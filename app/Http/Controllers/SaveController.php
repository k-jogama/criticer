<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eatlog;

class SaveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $eatlog = new Eatlog();
        foreach ($request->all() as $key => $item) {
            if ($key == '_token') continue;
            if ($request->{$key}) {
                $eatlog->{$key} = $request->{$key};
            } else {
                $eatlog->{$key} = '';
            }
        }
        $eatlog->save();

        session()->flash('flash_message', 'お気に入りに登録しました');
//        $result = Eatlog::store($request);
        return redirect('/');
    }
}
