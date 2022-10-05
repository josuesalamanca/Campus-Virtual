<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index()
    {
        $member_list = Member::all();

        return view('admin.admin',[
            'members' => $member_list,
            'resource' => 'member'
        ]);
    }

    public function create()
    {
        return view('admin.create',[
            'resource' => 'member'
        ]);
    }

    public function store(Request $request)
    {
        $file = $request->file('image');

        $imageName = time().'-'. $file->getClientOriginalName();

        $imagePath = 'images/members/'.time().'-'. $file->getClientOriginalName();

        $request->image->move(public_path('images/members'), $imageName);

        $member = Member::create([
            'fullName' => $request->input('fullName'),
            'job' => $request->input('job'),
            'email' => $request->input('email'),
            'biography' => $request->input('biography'),
            'image' => $imagePath
        ]);

        return redirect('/admin/members');
    }

    public function edit($id)
    {

        $member = Member::find($id);

        return view('admin.edit',[
            'member' => $member,
            'resource' => 'member'
        ]);
    }

    public function update(Request $request, $id)
    {

        if ($request->file('image') == null) {

            $member = Member::where('id',$id)
                ->update([
                    'fullName' => $request->input('fullName'),
                    'job' => $request->input('job'),
                    'email' => $request->input('email'),
                    'biography' => $request->input('biography'),
                ]);

        } else {
            $file = $request->file('image');

            $imageName = time().'-'. $file->getClientOriginalName();

            $imagePath = 'images/members/'.time().'-'. $file->getClientOriginalName();

            $request->image->move(public_path('images/members'), $imageName);

            $member = Member::where('id',$id)
                ->update([
                    'fullName' => $request->input('fullName'),
                    'job' => $request->input('job'),
                    'email' => $request->input('email'),
                    'biography' => $request->input('biography'),
                    'image' => $imagePath
                ]);
        }

        return redirect('/admin/members');
    }

    public function destroy(Member $member)
    {

        $member->delete();

        return redirect('/admin/members');
    }


    public function get($id)
    {
        $member = Member::find($id);

        return $member;
    }
}
