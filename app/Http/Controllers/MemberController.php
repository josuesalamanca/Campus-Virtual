<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{

    public function create()
    {



    }

    public function get($id)
    {
        $member = DB::table('members')
        ->where('id',$id)
        ->get();

        return $member;
    }
}
