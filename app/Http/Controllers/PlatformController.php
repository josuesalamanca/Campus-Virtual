<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlatformController extends Controller
{
    public function getAll()
    {
        $platform_list = DB::table('platforms')
            ->get();

        return $platform_list;
    }
}
