<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Account;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        //
        if (auth()->user()) {
            $user_id = auth()->user()->id;
            $order_status = "Inprogress";
            $carts_total = Cart::where('user_id',$user_id)->sum('product_price');
            $user_name = auth()->user()->name;
            $seller_order = Order::where(['seller_name'=>$user_name, 'status'=>$order_status])->get();
            $buyer_order = Order::where(['buyer_name'=>$user_name, 'status'=>$order_status])->get();
            $carts = Cart::where('user_id',$user_id)->get();
            $new_product = Product::latest()->paginate(1);
            $account = Account::where('user_id',$user_id)->sum('amount');
            $categories = Category::all();
             $brands = Brand::all();
            return view('contact', compact('categories','brands','account','carts','carts_total','new_product','seller_order','buyer_order'));
        }else{
        $categories = Category::all();
        $brands = Brand::all();
        $new_product = Product::latest()->paginate(1);
        return view('contact', compact('categories','brands','new_product'));
    }


}

}
