<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Front_User;
use App\Models\Profile2;

class FrontUserController extends Controller
{
    //
    protected $user;

    public function __construct(Front_User $user)
    {
        $this->user = $user;
    }
    public function index()
    {
        $users = Front_User::latest()->paginate(5);
        return view('admin.front_user.index', compact('users'));
    }
    public function create()
    {
        $profile2s = Profile2::all();  
        return view('admin.front_user.create',compact('profile2s'));
    }
    public function store(Request $request)
    {
        Front_User::create([
            'profile2_id' => $request->profile2_id,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone_no' => $request->phone_no,
        ]);
        return redirect()->route('front_user.index');
    }
    public function show($id)
    {
        $user = Front_User::find($id);
        return view('admin.front_user.show', compact('user'));
    }
    public function edit($id)
    {
        $user = Front_User::find($id);
        return view('admin.front_user.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        Front_User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone_no' => $request->phone_no,
        ]);

        return redirect()->route('front_user.index');
    }
    public function destroy($id)
    {
        Front_User::find($id)->delete();
        return redirect()->route('front_user.index');
    }
}
