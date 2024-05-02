<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\Transaction;
use App\Models\AdminMessage;
use Illuminate\Http\Request;
use App\Models\AdminNotification;

use function Symfony\Component\String\b;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $status_transaction = 'Pending';
        $status_message = 'unread';
        $transactions = Transaction::where('status',$status_transaction)->paginate(2);
        $transactions_count = Transaction::where('status',$status_transaction)->get();
        $unread = AdminMessage::latest()->where('status',$status_message)->paginate(2);
        $unreadcount = AdminMessage::latest()->where('status',$status_message)->get();
        $brands = Brand::latest()->paginate(5);

        return view('admin.brands.index',compact('unread','unreadcount','brands','transactions','transactions_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $status_transaction = 'Pending';
        $status_message = 'unread';
        $transactions = Transaction::where('status',$status_transaction)->paginate(2);
        $transactions_count = Transaction::where('status',$status_transaction)->get();
        $unread = AdminMessage::latest()->where('status',$status_message)->paginate(2);
        $unreadcount = AdminMessage::latest()->where('status',$status_message)->get();
        $brands = Brand::latest()->paginate(5);

        return view('admin.brands.create',compact('unread','unreadcount','brands','transactions','transactions_count'));
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
        $request->validate([
            'name' => 'required',
        ]);

           Brand::create([
            'name' => $request->name
        ]);

        return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(brand $brand)
    {
        //
        $status_transaction = 'Pending';
        $status_message = 'unread';
        $transactions = Transaction::where('status',$status_transaction)->paginate(2);
        $transactions_count = Transaction::where('status',$status_transaction)->get();
        $unread = AdminMessage::latest()->where('status',$status_message)->paginate(2);
        $unreadcount = AdminMessage::latest()->where('status',$status_message)->get();
        $brands = Brand::latest()->paginate(5);

        return view('admin.brands.edit',compact('unread','unreadcount','brands','transactions','transactions_count','brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, brand $brand)
    {
        //
        $request->validate([
            'name' => 'required',
        ]);

        $brand->update([
            'name' => $request->name
        ]);

        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(brand $brand)
    {
        //
        $brand->delete();
        return back();
    }
}
