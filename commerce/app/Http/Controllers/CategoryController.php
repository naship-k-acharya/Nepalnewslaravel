<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Transaction;
use App\Models\AdminMessage;
use Illuminate\Http\Request;
use App\Models\AdminNotification;

class CategoryController extends Controller
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
        $categories = Category::latest()->paginate(5);

        return view('admin.categories.index',compact('unread','unreadcount','categories','transactions','transactions_count'));

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
        $categories = Category::latest()->paginate(5);

        return view('admin.categories.create',compact('unread','unreadcount','categories','transactions','transactions_count'));
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

           Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        $status_transaction = 'Pending';
        $status_message = 'unread';
        $transactions = Transaction::where('status',$status_transaction)->paginate(2);
        $transactions_count = Transaction::where('status',$status_transaction)->get();
        $unread = AdminMessage::latest()->where('status',$status_message)->paginate(2);
        $unreadcount = AdminMessage::latest()->where('status',$status_message)->get();
        $categories = Category::latest()->paginate(5);

        return view('admin.categories.edit',compact('unread','unreadcount','categories','transactions','transactions_count','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $request->validate([
            'name' => 'required',
        ]);

        $category->update([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return back();
    }
}
