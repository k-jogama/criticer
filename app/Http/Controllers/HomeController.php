<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Weidner\Goutte\GoutteFacade;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $name = "山田太郎";
//        return view('home')->with('name',$name);
//        $eatlogdata = array('test1'=>'aaa', 'test2'=>'bbbs');
//        return view('home',$eatlogdata);


//        $test_array = ["テスト1","テスト2", "テスト3"];
//
//        return view('home',compact('test_array'));


        return view('home');
    }

    public function scraping(Request $request)
    {
        $goutte = GoutteFacade::request('GET', $request->input('eatlogurl'));

        $score = $goutte->filter('.rdheader-rating__score-val-dtl')->text();
        if ($score) {
            $shopinfos = array();
            $goutte->filter('.c-table tr')->each(function($node) use(&$shopinfos) {
                $value = $node->filter('td')->text();
                $shopinfos[] = trim($value);
            });


            foreach (config('const.EATLOGS.INDEX_LIST') as $key => $value) {
                if (isset($shopinfos[$value])) {
                    $shopinfos[$key] = $shopinfos[$value];
                } else {
                    $shopinfos[$key] = '';
                }
            }
        }

        $eatlogdata = array(
            'eatlogurl'        => array('info' => $request->input('eatlogurl'), 'label' => '食べログサイト'),
            'score'            => array('info' => $score, 'label' => '評価'),
            'shopname'         => array('info' => $shopinfos['Shopname'], 'label' => config('const.EATLOGS.NAME_LIST.Shopname')),
            'reserve_tel'      => array('info' => $shopinfos['Reserve_tel'], 'label' => config('const.EATLOGS.NAME_LIST.Reserve_tel')),
            'reserve_judgment' => array('info' => $shopinfos['Reserve_judgment'], 'label' => config('const.EATLOGS.NAME_LIST.Reserve_judgment')),
            'address'          => array('info' => $shopinfos['Address'], 'label' => config('const.EATLOGS.NAME_LIST.Address')),
            'business_hours'   => array('info' => $shopinfos['Business_hours'], 'label' => config('const.EATLOGS.NAME_LIST.Business_hours')),
            'payment_method'   => array('info' => $shopinfos['Payment_method'], 'label' => config('const.EATLOGS.NAME_LIST.Payment_method')),
            'service_charge'   => array('info' => $shopinfos['Service_charge'], 'label' => config('const.EATLOGS.NAME_LIST.Service_charge')),
            'private_room'     => array('info' => $shopinfos['Private_room'], 'label' => config('const.EATLOGS.NAME_LIST.Private_room')),
            'smoking_judgment' => array('info' => $shopinfos['Smoking_judgment'], 'label' => config('const.EATLOGS.NAME_LIST.Smoking_judgment')),
            'parking'          => array('info' => $shopinfos['Parking'], 'label' => config('const.EATLOGS.NAME_LIST.Parking')),
            'hp'               => array('info' => $shopinfos['Hp'], 'label' => config('const.EATLOGS.NAME_LIST.Hp')),
            'shoptel'          => array('info' => $shopinfos['Shoptel'], 'label' => config('const.EATLOGS.NAME_LIST.Shoptel'))
        );

        return view('home',compact('eatlogdata'));
    }
}
