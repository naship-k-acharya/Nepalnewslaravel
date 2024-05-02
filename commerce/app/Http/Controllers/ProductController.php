<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Transaction;
use App\Models\AdminMessage;
use Illuminate\Http\Request;
use App\Models\AdminNotification;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status_transaction = 'Pending';
        $status_message = 'unread';
        $transactions = Transaction::where('status',$status_transaction)->paginate(2);
        $transactions_count = Transaction::where('status',$status_transaction)->get();
        $unread = AdminMessage::latest()->where('status',$status_message)->paginate(2);
        $unreadcount = AdminMessage::latest()->where('status',$status_message)->get();
        $products = Product::latest()->paginate(5);

        return view('admin.products.index',compact('unread','unreadcount','products','transactions','transactions_count'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $status_transaction = 'Pending';
        $status_message = 'unread';
        $transactions = Transaction::where('status',$status_transaction)->paginate(2);
        $transactions_count = Transaction::where('status',$status_transaction)->get();
        $unread = AdminMessage::latest()->where('status',$status_message)->paginate(2);
        $unreadcount = AdminMessage::latest()->where('status',$status_message)->get();
        $products = Product::latest()->paginate(5);

        return view('admin.products.show',compact('unread','unreadcount','products','transactions','transactions_count','product'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $product->update([
            'stock' => 0
        ]);


        return back()->with('status_a', 'Product removed from stock successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
