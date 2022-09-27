<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\InsightController;

class PagesController extends Controller
{
    public function index(){

        $insight_list = (new InsightController)->show_landing();

        return view('landing',[
            'insights' => $insight_list
        ]);
    }
}
