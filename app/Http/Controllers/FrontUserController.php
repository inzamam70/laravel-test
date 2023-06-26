<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrontUser;
use App\Models\Profile2;

class FrontUserController extends Controller
{
    //
    protected $frontuser;
    public function __construct(FrontUser $frontUser)
    {
        $this->frontuser = $frontUser;
    }
    public function index()
    {
        $frontusers = FrontUser::all();
        return view('admin.front_user.index',compact('frontusers'));
    }
    public function create()
    {
        $profile2s = Profile2::all();
        return view('admin.front_user.create',compact('profile2s'));
    }
    public function store(Request $request)
    {
        FrontUser::create([
            'profile2_id'=>$request->profile2_id,
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone_no'=>$request->phone_no,
        ]);
        return redirect()->route('front_user.index');
    }
    public function show($id)
    {
        $frontUser = FrontUser::find($id);
        return view('admin.front_user.show',compact('frontuser'));
    }
    public function edit($id)
    {
        $frontUser = FrontUser::find($id);
        return view('admin.front_user.edit',compact('frontuser'));
    }
    public function update(Request $request,$id)
    {
        FrontUser::find($id)->update(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'address'=>$request->address,
                'phone_no'=>$request->phone_no,
            ]
            );
            return redirect()->route('front_user.index');
    }
    public function destroy($id)
    {
        FrontUser::find($id)->delete();
        return redirect()->route('front_user.index');
    }
    
}
