<?php

namespace App\Http\Controllers\API;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Stock;
use App\Invoice;
use App\Customer;
use App\Outstanding_Payments;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Stock::all();
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         return Invoice::create([
             'InvoiceNo' => $request['newInvoiceNo'],
            'CustomerID' => $request['CustomerID'],
            'Outstanding'=> $request['Outstanding'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function search(){
        if($search = \Request::get('q')){
            $stocks = Stock::where(function($query) use ($search){
                $query->where('ItemName','LIKE',"%$search%");
            })->get();
        }else{
            return Stock::all();
        }
        return $stocks;
    }
}
