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
//            foreach ($goutte->filter('.c-table tr') as $row) {
//                $value = $goutte->filter($row)->find("td:eq(0)")->text();
//                $shopinfos[] = trim($value);
//            }
//            $goutte->filter('.c-table tr')->each(function($node) use(&$shopinfos) {
//                $value = $node->filter('td:eq(0)')->text();
//                $shopinfos[] = trim($value);
//            });
        }

        $eatlogdata = array(
            'score' => array('info' => $score, 'label' => '評価')
        );

        return view('home',compact('eatlogdata'));
    }
}
