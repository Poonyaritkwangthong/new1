<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::orderBy('id')->paginate(10);
        return view('customer.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'c_img' => 'required',
            'phone_n' => 'required',
            'user_id' => 'required',
            'password' => 'required',
        ]);
        Customer::create($request->post());

        return redirect()->route('customer.index')->with('success','customer Type has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'c_img' => 'required',
            'phone_n' => 'required',
            'user_id' => 'required',
            'password' => 'required',
        ]);
        $customer->fill($request->post())->save();

        return redirect()->route('customer.index')->with('success','customer has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customer.index')->with('success','customer has been deleted');
    }
}
