<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eatlog;

class SaveController extends Controller
{
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
//        $result = Eatlog::store($request);
        return redirect('/');
    }
}
