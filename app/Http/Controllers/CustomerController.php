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
        //
        return Customer::get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'mobile_no' => 'required|string',
            'email'=> 'required|email'
        ]);
    
        $customer = Customer::create($fields);
    
        return response()->json($customer, 201); // HTTP 201 for created resource
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return $customer;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'mobile_no' => 'required|string',
            'email'=> 'required|email'
        ]);
    
        $customer->update($fields);
        return $customer;
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return 'Customer has been deleted';
    }
}
