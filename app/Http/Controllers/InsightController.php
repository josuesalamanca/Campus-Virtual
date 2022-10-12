<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsightController extends Controller
{
    public function index()
    {
        $insight_list = $this->getAll();

        return view('admin.admin',[
            'insights' => $insight_list,
            'resource' => 'insight'
        ]);
    }

    public function create()
    {
        return view('admin.create',[
            'resource' => 'insight'
        ]);
    }

    public function store(Request $request)
    {

        $file = $request->file('image');

        $imageName = time().'-'. $file->getClientOriginalName();

        $imagePath = 'images/insights/'.time().'-'. $file->getClientOriginalName();

        $request->image->move(public_path('images/insights'), $imageName);

        $insight = Insight::create([
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'link' => $request->input('link'),
            'resume' => $request->input('resume'),
            'image' => $imagePath
        ]);

        return redirect('/admin/insights');
    }

    public function edit($id)
    {

        $insight = Insight::find($id);

        return view('admin.edit',[
            'insight'=>$insight,
            'resource' => 'insight'
        ]);
    }

    public function update(Request $request, $id)
    {

        if($request->file('image') == null){

            $insight = Insight::where('id',$id)->update([
                'title' => $request->input('title'),
                'date' => $request->input('date'),
                'link' => $request->input('link'),
                'resume' => $request->input('resume'),
            ]);

        }else{

            $file = $request->file('image');

            $imageName = time().'-'. $file->getClientOriginalName();

            $imagePath = 'images/insights/'.time().'-'. $file->getClientOriginalName();

            $request->image->move(public_path('images/insights'), $imageName);

            $insight = Insight::where('id',$id)->update([
                'title' => $request->input('title'),
                'date' => $request->input('date'),
                'link' => $request->input('link'),
                'resume' => $request->input('resume'),
                'image'=> $imagePath
            ]);
        }



        return redirect('/admin/insights');
    }

    public function destroy(Insight $insight)
    {

        $insight->delete();

        return redirect('/admin/insights');
    }

    public function get_one($id)
    {

        $insight = Insight::find($id);
        // dd($insight);
        return view('insights.insight',[
            'insight' => $insight
        ]);
    }

    public function get_landing()
    {
        $quantity = 3;

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
