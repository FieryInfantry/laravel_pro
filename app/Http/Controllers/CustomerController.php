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
        $field = $request->validated(
            [
                'name' => 'required',
                'age' => 'required',
                'mobile_no' => 'required',
                'email'=> 'email'
            ]
            );
            $customer = Customer::create($field);
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
        $field = $request->validated(
            [
                'name' => 'required',
                'age' => 'required',
                'mobile_no' => 'required',
                'email'=> 'email'
            ]
            );
            $customer = Customer::update($field);
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
