<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Http\Requests\CustomerRequest;


class CustomerController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Customer::all();
        return view('customer.home', ['data' => $data->toArray()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate( 
            [
                'id' => 'required|integer|min:130|max:140'
            ],
            [
                'required' => ':attribute không được để trống',
                'integer' => ':attribute phải là số nguyên',
                'min' => ':attribute không được nhỏ hơn 130',
                'max' => ':attribute không được lớn hơn 140'
            ],
            [
                'id' => 'Mã id khách hàng'
            ]
        );

        $customer = new Customer();

        $customer->id = $request->id;
        $customer->customer_id = $request->customer_id;
        $customer->customer_name = $request->customer_name;
        $customer->customer_mobile = $request->customer_mobile;
        $customer->customer_address = $request->customer_address;

        $customer->save();
        return redirect('customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customer.customer', ['data' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer.edit', ['data' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);

        $customer->customer_id = $request->customer_id;
        $customer->customer_name = $request->customer_name;
        $customer->customer_mobile = $request->customer_mobile;
        $customer->customer_address = $request->customer_address;

        $customer->save();
        return redirect('customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::find($id)->delete();
        return redirect('customer');
    }

    public function test(){
        $customers = DB::table('customers')->where('id', '>', 130)->get();
        $cus = Customer::get('customer_id');
        dd($cus);
    }
}
