<?php

namespace App\Http\Controllers;

use App\Models\Eatlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function edit($id)
    {
        $eatlog = DB::table('eatlogs')->where('id', $id)->get();
        return view('edit')->with('eatlog', $eatlog[0]);
    }

    public function update(Request $request)
    {
        $eatlog = new Eatlog();
        $userid = Auth::id();
        $eatlog
            ->where('id', $request->input('id'))
            ->update([
                'userid'           => $userid,
                'shopname'         => $request->input('shopname'),
                'score'            => ($request->input('score')) ? $request->input('score') : '',
                'reserve_tel'      => ($request->input('reserve_tel')) ? $request->input('reserve_tel') : '',
                'reserve_judgment' => ($request->input('reserve_judgment')) ? $request->input('reserve_judgment') : '',
                'address'          => ($request->input('address')) ? $request->input('address') : '',
                'business_hours'   => ($request->input('business_hours')) ? $request->input('business_hours') : '',
                'payment_method'   => ($request->input('payment_method')) ? $request->input('payment_method') : '',
                'service_charge'   => ($request->input('service_charge')) ? $request->input('service_charge') : '',
                'private_room'     => ($request->input('private_room')) ? $request->input('private_room') : '',
                'smoking_judgment' => ($request->input('smoking_judgment')) ? $request->input('smoking_judgment') : '',
                'parking'          => ($request->input('parking')) ? $request->input('parking') : '',
                'hp'               => ($request->input('hp')) ? $request->input('hp') : '',
                'shoptel'          => ($request->input('shoptel')) ? $request->input('shoptel') : '',
                'eatlogurl'        => ($request->input('eatlogurl')) ? $request->input('eatlogurl') : '',
                'img'              => ($request->input('img')) ? $request->input('img') : '',
            ]);

        session()->flash('msg_success', config('const.MESSAGE_SAVE_SUCCESS'));
        return redirect('/list');
    }

    public function delete($id)
    {
        $eatlog = new Eatlog();
        $eatlog::destroy($id);
        session()->flash('msg_success', config('const.MESSAGE_DELETE_SUCCESS'));
        return redirect('/list');
    }
}
