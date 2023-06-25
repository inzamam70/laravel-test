<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    protected $customer;
    public function __construct(Customer $customer)
    {
        $this->customer=$customer;
    }
    public function index()
    {
        $customers=Customer::all();
        return view('admin.customer.index',compact('customers'));
    }
    public function create()
    {
        return view('admin.customer.create');
    }
    public function store(Request $request)
    {
        Customer::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_no'=>$request->phone_no,
            'address'=>$request->address,
        ]);
        return redirect()->route('customer.index');
    }
    public function show($id)
    {
        $customer=Customer::find($id);
        return view('admin.customer.show',compact('customer'));
    }
    public function edit($id)
    {
        $customer=Customer::find($id);
        return view('admin.customer.edit',compact('customer'));
    }
    public function update(Request $request,$id)
    {
        Customer::find($id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_no'=>$request->phone_no,
            'address'=>$request->address,
        ]);
        return redirect()->route('customer.index');
    }
    public function destroy($id)
    {
        Customer::find($id)->delete();
        return redirect()->route('customer.index');
    }
}
