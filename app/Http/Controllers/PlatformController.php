<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlatformController extends Controller
{

    public function index()
    {
        $platform_list = $this->getAll();

        return view('admin.admin',[
            'platforms' => $platform_list,
            'resource' => 'platform'
        ]);
    }

    public function create()
    {
        return view('admin.create',[
            'resource' => 'platform'
        ]);
    }

    public function store(Request $request)
    {

        $file = $request->file('image');

        $imageName = time().'-'. $file->getClientOriginalName();

        $imagePath = 'images/platforms/'.time().'-'. $file->getClientOriginalName();

        $request->image->move(public_path('images/platforms'), $imageName);

        $insight = Platform::create([
            'title' => $request->input('title'),
            'link' => $request->input('link'),
            'image' => $imagePath
        ]);

        return redirect('/admin/platforms');
    }

    public function edit($id)
    {

        $platform = Platform::find($id);

        return view('admin.edit',[
            'platform' => $platform,
            'resource' => 'platform'
        ]);
    }

    public function update(Request $request, $id)
    {

        if ($request->file('image') == null) {

            $platform = Platform::where('id',$id)
                ->update([
                    'title' => $request->input('title'),
                    'link' => $request->input('link'),
                ]);

        } else {

            $file = $request->file('image');

            $imageName = time().'-'. $file->getClientOriginalName();

            $imagePath = 'images/platforms/'.time().'-'. $file->getClientOriginalName();

            $request->image->move(public_path('images/platforms'), $imageName);

            $platform = Platform::where('id',$id)
                ->update([
                    'title' => $request->input('title'),
                    'link' => $request->input('link'),
                    'image' => $imagePath
                ]);
        }

        return redirect('/admin/platforms');
    }

    public function destroy(Platform $platform)
    {

        $platform->delete();

        return redirect('/admin/platforms');
    }

    public function getAll()
    {
        $platform_list = DB::table('platforms')
            ->get();

        return $platform_list;
    }
}
