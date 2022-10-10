<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\InsightController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\MemberController;

class PagesController extends Controller
{
    public function index(){

        $insight_list = (new InsightController)->get_landing();

        return view('landing',[
            'insights' => $insight_list
        ]);
    }

    public function virtualResorces(){

        $platform_list = (new PlatformController)->getAll();

        return view('virtualResources',[
            'platforms' => $platform_list
        ]);
    }

    public function insightList(){

        $insight_list = (new InsightController)->getAll();

        return view('insights.insightList',[
            'insights' => $insight_list
        ]);
    }

    public function member($id){

        $member = (new MemberController)->get($id);

        return view('member',[
            'member' => $member
        ]);
    }

    public function admin(){



        return view('home');
    }

}
