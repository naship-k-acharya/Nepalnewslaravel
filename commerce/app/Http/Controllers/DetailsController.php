<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Account;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    //
    public function index(Product $product)
    {
        //
        if (auth()->user()) {
            $user_id = auth()->user()->id;
            $carts = Cart::where('user_id',$user_id)->get();
            $order_status = "Inprogress";
            $carts_total = Cart::where('user_id',$user_id)->sum('product_price');
            $user_name = auth()->user()->name;
            $seller_order = Order::where(['seller_name'=>$user_name, 'status'=>$order_status])->get();
            $buyer_order = Order::where(['buyer_name'=>$user_name, 'status'=>$order_status])->get();
            $account = Account::where('user_id',$user_id)->sum('amount');
            $categories = Category::all();
            $brands = Brand::all();
            $new_product = Product::latest()->paginate(1);
            $products = Product::latest()->where('category_id',$product->category_id)->paginate(3);
            return view('details', compact('categories','brands','product','products','account','carts','new_product','carts_total','seller_order','buyer_order'));
        }

        $categories = Category::all();
        $brands = Brand::all();
        $new_product = Product::latest()->paginate(1);
        $products = Product::latest()->where('category_id',$product->category_id)->paginate(3);
        return view('details', compact('categories','brands','product','products','new_product'));
    }
}
