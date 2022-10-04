<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsightController extends Controller
{
    public function create()
    {

        // $insight = new Insight;
        // $insight->title = 'God of War';
        // $insight->resume = 'Lorem ipsum  iente iusto illo, distinctio sit fuga incidunt.';


        // $insight->save();

        // $member = Member::find([1, 2]);
        // $insight->members()->attach($member);

        // return 'Success';

    }

    public function get_one($id)
    {
        $insight = DB::table('insights')
            ->where('id',$id)
            ->get();

        return view('insights.insight',[
            'insight' => $insight
        ]);
    }

    public function get_landing()
    {
        $quantity = 4;

        $insight_list = DB::table('insights')
            ->latest()
            ->take($quantity)
            ->get();

        return $insight_list;
    }

    public function getAll()
    {
        $insight_list = DB::table('insights')
            ->get();

        return $insight_list;
    }
}
