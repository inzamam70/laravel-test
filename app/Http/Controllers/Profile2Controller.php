<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile2;

class Profile2Controller extends Controller
{
    //
    protected $profile2;
    public function __construct(Profile2 $profile2)
    {
        $this->profile2 = $profile2;
    }
    public function index()
    {
        $profile2s = $this->profile2->all();
        return view('admin.profile2.index', compact('profile2s'));
    }
    public function create()
    {
        return view('admin.profile2.create');
    }
    public function store(Request $request)
    {
        Profile2::create([
            'name' => $request->name,
            'phone'=>$request->phone,
            'gender'=>$request->gender,
        ]);
        return redirect()->route('profile2.index');
    }
    public function show($id)
    {
        $profile2 = Profile2::find($id);
        return view('admin.profile2.show', compact('profile2'));
    }
    public function edit($id)
    {
        $profile2 = $this->profile2->find($id);
        return view('admin.profile2.edit', compact('profile2'));
    }
    public function update(Request $request,$id)
    {
        Profile2::find($id)->create([
            'name' => $request->name,
            'phone'=> $request->phone,
            'gender'=> $request->gender,
        ]);
        return redirect()->route('profile2.index');
    }
    public function destroy($id)
    {
        Profile2::find($id)->delete();
        return redirect()->route('profile2.index');
    }
}
