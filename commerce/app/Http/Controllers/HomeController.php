<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Brand;
use App\Models\Account;
use App\Models\Product;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\AdminMessage;
use Illuminate\Http\Request;
use App\Models\AdminNotification;
use App\Models\Order;
use App\Models\Profile;
use App\Models\User;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //
    public function index()
    {
        //
        if (auth()->user()) {
            $user_id = auth()->user()->id;
            $order_status = "Inprogress";

            $user_name = auth()->user()->name;
            $seller_order = Order::where(['seller_name'=>$user_name, 'status'=>$order_status])->get();
            $buyer_order = Order::where(['buyer_name'=>$user_name, 'status'=>$order_status])->get();
            $carts = Cart::where('user_id',$user_id)->get();
            $carts_total = Cart::where('user_id',$user_id)->sum('product_price');
            $account = Account::where('user_id',$user_id)->sum('amount');
            $products = Product::latest()->paginate(6);
            $new_product = Product::latest()->paginate(1);
            $categories = Category::all();
            $brands = Brand::all();
            return view('welcome', compact('categories','brands','products','account','carts','new_product','carts_total','seller_order','buyer_order'));
        }else{

        $new_product = Product::latest()->paginate(1);
        $products = Product::latest()->paginate(6);
        $categories = Category::all();
        $brands = Brand::all();
        return view('welcome', compact('categories','brands','products','new_product'));
        }

    }

    public function product_category(Category $category)
    {
        //
        if (auth()->user()) {

            $user_id = auth()->user()->id;
            $order_status = "Inprogress";
            $user_name = auth()->user()->name;
            $seller_order = Order::where(['seller_name'=>$user_name, 'status'=>$order_status])->get();
            $buyer_order = Order::where(['buyer_name'=>$user_name, 'status'=>$order_status])->get();
            $carts = Cart::where('user_id',$user_id)->get();
            $carts_total = Cart::where('user_id',$user_id)->sum('product_price');
            $account = Account::where('user_id',$user_id)->sum('amount');
            $new_product = Product::latest()->paginate(1);
            $products = Product::latest()->where('category_id',$category->id)->paginate(6);
            $brands = Brand::all();
            $categories = Category::all();
            return view('categories.product_category', compact('categories','brands','products','category','account','carts','new_product','carts_total','seller_order','buyer_order'));
        }
        $new_product = Product::latest()->paginate(1);
        $products = Product::latest()->where('category_id',$category->id)->paginate(6);
        $brands = Brand::all();
        $categories = Category::all();
        return view('categories.product_category', compact('categories','brands','products','category','new_product'));
    }

    public function product_brand(Brand $brand)
    {
        //
        if (auth()->user()) {



        $user_id = auth()->user()->id;
        $order_status = "Inprogress";
        $user_name = auth()->user()->name;
        $seller_order = Order::where(['seller_name'=>$user_name, 'status'=>$order_status])->get();
        $buyer_order = Order::where(['buyer_name'=>$user_name, 'status'=>$order_status])->get();
        $carts = Cart::where('user_id',$user_id)->get();
        $carts_total = Cart::where('user_id',$user_id)->sum('product_price');
        $account = Account::where('user_id',$user_id)->sum('amount');
        $new_product = Product::latest()->paginate(1);
        $products = Product::latest()->where('brand_id',$brand->id)->paginate(6);
        $brands = Brand::all();
        $categories = Category::all();
        return view('brands.product_brand', compact('categories','brands','products','brand','account','carts','new_product','carts_total','seller_order','buyer_order'));
        }

        $new_product = Product::latest()->paginate(1);
        $products = Product::latest()->where('brand_id',$brand->id)->paginate(6);
        $brands = Brand::all();
        $categories = Category::all();
        return view('brands.product_brand', compact('categories','brands','products','brand','new_product'));
    }

    public function message_admin()
    {
        if (auth()->user()) {
            $user_id = auth()->user()->id;
            $order_status = "Inprogress";
            $user_name = auth()->user()->name;
            $seller_order = Order::where(['seller_name'=>$user_name, 'status'=>$order_status])->get();
             $buyer_order = Order::where(['buyer_name'=>$user_name, 'status'=>$order_status])->get();
            $carts = Cart::where('user_id',$user_id)->get();
            $carts_total = Cart::where('user_id',$user_id)->sum('product_price');
            $account = Account::where('user_id',$user_id)->sum('amount');
            $new_product = Product::latest()->paginate(1);
            $categories = Category::all();
            $brands = Brand::all();
            return view('contact_admin', compact('categories','brands','account','carts','new_product','carts_total','seller_order','buyer_order'));
        }else{

            $new_product = Product::latest()->paginate(1);
            $categories = Category::all();
            $brands = Brand::all();
            return view('contact_admin', compact('categories','brands','new_product'));
        }


    }

    public function message_admin_store(Request $request)
    {

        if (!auth()->user()) {

            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'user_type' => 'required',
                'title' => 'required',
                'body' => 'required',

            ]);

            AdminMessage::create([
                'name' => $request->name,
                'email' => $request->email,
                'user_type' => $request->user_type,
                'title' => $request->title,
                'body' => $request->body,
                'status' => 'unread'
            ]);

            return redirect()->route('contact')->with('status_a', 'Thanks for contacting us, we will reply via your Email... ');

        }else{

            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'title' => 'required',
                'body' => 'required',
            ]);

            AdminMessage::create([
                'name' => $request->name,
                'email' => $request->email,
                'user_type' => $request->user()->user_type,
                'title' => $request->title,
                'body' => $request->body,
                'status' => 'unread'
            ]);

            return redirect()->route('contact')->with('status_a', 'Thanks for contacting us, we will reply via your Email... ');

        }
    }


    public function seller_product_create()
    {
        //
        $user_id = auth()->user()->id;
        $order_status = "Inprogress";
        $user_name = auth()->user()->name;
        $seller_order = Order::where(['seller_name'=>$user_name, 'status'=>$order_status])->get();
        $buyer_order = Order::where(['buyer_name'=>$user_name, 'status'=>$order_status])->get();
        $account = Account::where('user_id',$user_id)->sum('amount');
        $new_product = Product::latest()->paginate(1);
        $categories = Category::all();
        $brands = Brand::all();
        return view('seller_product.create', compact('categories','brands','account','new_product','seller_order','buyer_order'));
    }

    public function seller_product_store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'details' => 'required'

        ]);

        $image_name = time() . '.' . $request->image->extension();
        $request->image->move(public_path('product_image'),$image_name);

        Product::create([
            'name' => $request->name,
            'image' => $image_name,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'details' => $request->details,
            'user_id' => $request->user()->id
        ]);

        return redirect()->route('seller_product_index');


    }


    public function seller_product_index(Category $category)
    {
        //
        if ($category) {

            $user_id = auth()->user()->id;
            $order_status = "Inprogress";
            $user_name = auth()->user()->name;
            $seller_order = Order::where(['seller_name'=>$user_name, 'status'=>$order_status])->get();
            $buyer_order = Order::where(['buyer_name'=>$user_name, 'status'=>$order_status])->get();
            $account = Account::where('user_id',$user_id)->sum('amount');
            $new_product = Product::latest()->paginate(1);
            $products = Product::latest()->where('user_id',$user_id, 'category_id',$category->id)->paginate(4);
            $categories = Category::all();
            $brands = Brand::all();
            return view('seller_product.index', compact('categories','brands','products','account','new_product','seller_order','buyer_order'));

        }else{

            $user_id = auth()->user()->id;
            $order_status = "Inprogress";
            $user_name = auth()->user()->name;
            $seller_order = Order::where(['seller_name'=>$user_name, 'status'=>$order_status])->get();
            $account = Account::where('user_id',$user_id)->sum('amount');
            $products = Product::latest()->where('user_id',$user_id)->paginate(6);
            $new_product = Product::latest()->paginate(1);
            $categories = Category::all();
            $brands = Brand::all();
            return view('seller_product.index', compact('categories','brands','products','account','new_product','seller_order','buyer_order'));

        }

    }

    public function seller_product_show(Product $product)
    {

        $user_id = auth()->user()->id;
        $order_status = "Inprogress";
        $user_name = auth()->user()->name;
        $seller_order = Order::where(['seller_name'=>$user_name, 'status'=>$order_status])->get();
        $buyer_order = Order::where(['buyer_name'=>$user_name, 'status'=>$order_status])->get();
        $account = Account::where('user_id',$user_id)->sum('amount');
        $new_product = Product::latest()->paginate(1);
        $categories = Category::all();
        $brands = Brand::all();
    return view('seller_product.show',compact('categories','brands','product','account','new_product','seller_order','buyer_order'));
    }

    public function seller_product_destroy(Product $product)
    {



        $product->delete();

        return redirect()->route('seller_product_index')->with('status_a', 'Product Deleted Successfully');

    }



    public function seller_product_edit(Product $product)
    {

        $user_id = auth()->user()->id;
        $order_status = "Inprogress";
        $user_name = auth()->user()->name;
        $seller_order = Order::where(['seller_name'=>$user_name, 'status'=>$order_status])->get();
        $buyer_order = Order::where(['buyer_name'=>$user_name, 'status'=>$order_status])->get();
        $account = Account::where('user_id',$user_id)->sum('amount');
        $new_product = Product::latest()->paginate(1);
        $categories = Category::all();
        $brands = Brand::all();
    return view('seller_product.edit',compact('categories','brands','product','account','new_product','seller_order','buyer_order'));
    }

    public function seller_product_update(Request $request, Product $product)
    {


       if ($request->image) {

        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'details' => 'required'

        ]);

        $image_name = time() . '.' . $request->image->extension();
        $request->image->move(public_path('product_image'),$image_name);

     $product->update([
            'name' => $request->name,
            'image' => $image_name,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'details' => $request->details,

        ]);


        return redirect()->route('seller_product_show',$product)->with('status_a', 'Product Updated Succesfully...');



       }else{

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'details' => $request->details,

        ]);

        return redirect()->route('seller_product_show',$product)->with('status_a', 'Product Updated Succesfully...');

       }
    }


    public function user_deposit()
    {

            $user_id = auth()->user()->id;
            $order_status = "Inprogress";
            $user_name = auth()->user()->name;
            $seller_order = Order::where(['seller_name'=>$user_name, 'status'=>$order_status])->get();
            $buyer_order = Order::where(['buyer_name'=>$user_name, 'status'=>$order_status])->get();
            $carts = Cart::where('user_id',$user_id)->get();
            $carts_total = Cart::where('user_id',$user_id)->sum('product_price');
            $account = Account::where('user_id',$user_id)->sum('amount');
            $new_product = Product::latest()->paginate(1);
            $categories = Category::all();
             $brands = Brand::all();
            return view('deposit', compact('categories','brands','account','carts','new_product','carts_total','seller_order','buyer_order'));



    }



    public function user_deposit_store(Request $request)
    {

        $request->validate([
            'amount' => 'required',
            'teller_number' => 'required'
        ]);


        Transaction::create([
            'user_id' => $request->user()->id,
            'amount'  =>$request->amount,
            'teller_number' => $request->teller_number,
            'type' => "Deposit",
            'status'  => "Pending"
        ]);




        return back()->with('status_a', 'Confirmation sent Successfull, Please check your Transaction page for Payment status');

    }



    public function user_withdrawal()
    {


            $user_id = auth()->user()->id;
            $profile = Profile::where('user_id',$user_id)->first();

            if ($profile) {


            $profile_check = Profile::where('user_id',$user_id)->get();
            $order_status = "Inprogress";
            $user_name = auth()->user()->name;
            $seller_order = Order::where(['seller_name'=>$user_name, 'status'=>$order_status])->get();
            $buyer_order = Order::where(['buyer_name'=>$user_name, 'status'=>$order_status])->get();
            $carts = Cart::where('user_id',$user_id)->get();
            $carts_total = Cart::where('user_id',$user_id)->sum('product_price');
            $account = Account::where('user_id',$user_id)->sum('amount');
            $new_product = Product::latest()->paginate(1);
            $categories = Category::all();
             $brands = Brand::all();
            return view('withdrawal', compact('categories','brands','account','carts','new_product','carts_total','seller_order','buyer_order','profile','profile_check'));

            }else{




                $profile_check = Profile::where('user_id',$user_id)->get();
                $order_status = "Inprogress";
                $user_name = auth()->user()->name;
                $seller_order = Order::where(['seller_name'=>$user_name, 'status'=>$order_status])->get();
                $buyer_order = Order::where(['buyer_name'=>$user_name, 'status'=>$order_status])->get();
                $carts = Cart::where('user_id',$user_id)->get();
                $carts_total = Cart::where('user_id',$user_id)->sum('product_price');
                $account = Account::where('user_id',$user_id)->sum('amount');
                $new_product = Product::latest()->paginate(1);
                $categories = Category::all();
                 $brands = Brand::all();
                return view('profile', compact('categories','brands','account','carts','new_product','carts_total','seller_order','buyer_order','profile','profile_check'));


            }






    }



    public function user_withdrawal_store(Request $request)
    {

        $request->validate([
            'amount' => 'required',
            'password' => 'required'
        ]);



        if ($request->amount < 1) {


            return back()->with('status', 'Invalid amount input');
        }

      $user = User::where('email',$request->user()->email)->first();




      if ( Hash::check($request->password,$user->password) ) {


        if ( $request->acct_available >= $request->amount ){



            Account::where('user_id',$request->user()->id)->decrement('amount',$request->amount);
            $teller = "Team Project";
            Transaction::create([
                'user_id' => $request->user()->id,
                'amount'  =>$request->amount,
                'teller_number' =>  $teller,
                'type' => "Withdrawal",
                'status'  => "Pending"
            ]);




            return back()->with('status_a', 'Withdrawal Successfull,  your bank account will be credited in 24hrs');

        }

            return back()->with('status', 'Insufficient Fund to input amount');





      }else{

return back()->with('status', 'Wrong Password');

      }



    }




    public function user_transaction()
    {

        $user_id = auth()->user()->id;
        $order_status = "Inprogress";
        $user_name = auth()->user()->name;
        $seller_order = Order::where(['seller_name'=>$user_name, 'status'=>$order_status])->get();
        $buyer_order = Order::where(['buyer_name'=>$user_name, 'status'=>$order_status])->get();
        $carts = Cart::where('user_id',$user_id)->get();
        $carts_total = Cart::where('user_id',$user_id)->sum('product_price');
        $account = Account::where('user_id',$user_id)->sum('amount');
        $new_product = Product::latest()->paginate(1);
        $categories = Category::all();
         $brands = Brand::all();
         $transactions = Transaction::latest()->where('user_id',$user_id)->paginate(5);
        return view('user_transaction', compact('categories','brands','account','transactions','carts','new_product','carts_total','seller_order','buyer_order'));
    }



public function user_transaction_destroy(Transaction $transaction)
{

     $transaction->delete();
     return back();

}




public function cart_store(Product $product)
{
    $cart_check = Cart::where(['product_id' => $product->id, 'user_id' => auth()->user()->id])->get();

    if ($cart_check->count() > 0) {
        return back()->with('cart', 'Already added to cart');
    }

    // Load brand and category relationships
    $product->load('brand', 'category');

    // Get brand name if exists, otherwise set to a default value
    $brandName = $product->brand ? $product->brand->name : 'Unknown Brand';

    // Get category name if exists, otherwise set to null
    $categoryName = optional($product->category)->name;

    Cart::create([
        'user_id' => auth()->user()->id,
        'product_id' => $product->id,
        'product_name' => $product->name,
        'product_image' => $product->image,
        'product_brand' => $brandName,
        'product_category' => $categoryName,
        'product_price' => $product->price,
        'product_stock' => $product->stock,
    ]);

    return back();
}







    public function cart_index()
    {


        $user_id = auth()->user()->id;
        $order_status = "Inprogress";
        $buyer_name = auth()->user()->name;
        $buyer_order = Order::where(['buyer_name'=>$buyer_name, 'status'=>$order_status])->get();
         $carts = Cart::where('user_id',$user_id)->get();
         $carts_total = Cart::where('user_id',$user_id)->sum('product_price');
         $products = Cart::where('user_id',$user_id)->paginate(3);
         $new_product = Product::latest()->paginate(1);

        $account = Account::where('user_id',$user_id)->sum('amount');
        $categories = Category::all();
         $brands = Brand::all();
         $transactions = Transaction::where('user_id',$user_id)->get();
        return view('cart', compact('categories','brands','account','transactions','carts','products','new_product','carts_total','buyer_order'));

    }




    public function cart_remove(Cart $cart)
    {

    $cart->delete();
    return back();

    }





    public function order_index(Product $product)
    {


        $user_id = auth()->user()->id;
        $order_status = "Inprogress";
        $buyer_name = auth()->user()->name;
        $seller_name = $product->name;
        $seller_order = Order::where(['seller_name'=>$seller_name, 'status'=>$order_status])->get();
        $buyer_order = Order::where(['buyer_name'=>$buyer_name, 'status'=>$order_status])->get();
        $carts = Cart::where('user_id',$user_id)->get();
        $carts_total = Cart::where('user_id',$user_id)->sum('product_price');
        $account = Account::where('user_id',$user_id)->sum('amount');
        $new_product = Product::latest()->paginate(1);
        $categories = Category::all();
        $brands = Brand::all();

     return view('order', compact('carts','account','new_product','categories','brands','product','carts_total','seller_order','buyer_order'));

    }






    public function order_cart_index(Product $product)
    {


        $user_id = auth()->user()->id;
        $order_status = "Inprogress";
        $buyer_name = auth()->user()->name;
        $seller_name = $product->name;
        $seller_order = Order::where(['seller_name'=>$seller_name, 'status'=>$order_status])->get();
        $buyer_order = Order::where(['buyer_name'=>$buyer_name, 'status'=>$order_status])->get();
        $carts = Cart::where('user_id',$user_id)->get();
        $carts_total = Cart::where('user_id',$user_id)->sum('product_price');
        $account = Account::where('user_id',$user_id)->sum('amount');
        $new_product = Product::latest()->paginate(1);
        $categories = Category::all();
        $brands = Brand::all();

     return view('order', compact('carts','account','new_product','categories','brands','product','carts_total','seller_order','buyer_order'));

    }











    public function order_store(Request $request, Product $product)
    {

        $acct = Account::with('user_id',$request->user()->id)->sum('amount');

         $total = $request->amount * $request->quantity;

        $total_amount = $total + 10;


        if ( $request->acct_available >= $total_amount ) {


            $stock_check = $product->stock;
            if ( $stock_check >= $request->quantity) {

                $request->validate([
                    'quantity' => 'required',
                    'phone' => 'required',
                    'address' => 'required',

                 ]);


                 if ($request->quantity <= 0) {


                    return back()->with('status','Invalid Quantity input');

                 }

                 Order::create([
                    'product_id' =>$product->id,
                    'buyer_name' => $request->user()->name,
                    'seller_name' => $product->user->name,
                    'product_name' =>$product->name,
                    'quantity' => $request->quantity,
                    'amount' => $total_amount,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'status' => 'Inprogress'
                 ]);





                 $teller = "Team Project";
                 Account::where('user_id',$request->user()->id)->decrement('amount',$total_amount);

               Transaction::create([
                'user_id' => $request->user()->id,
                'amount'  =>$total_amount,
                'teller_number' => $teller,
                'type' => "Send",
                'status'  => "Successful"
                  ]);

                  Account::where('user_id',$product->user_id)->increment('amount',$total_amount);


                  Transaction::create([
                    'user_id' => $product->user->id,
                    'amount'  => $total_amount,
                    'teller_number' => $teller,
                    'type' => "Recieved",
                    'status'  => "Successful"
                      ]);

             Product::where('id',$product->id)->decrement('stock',$request->quantity);
                    //   Api call 
                    // required field:(all fields are string)
                    // purchase_order_id
                    // purchase_order_name
                    // amount
                    // return_url
                    // website_url

                 return back()->with('status_a','Order sent Successful Ckeck Delivery page to keep track on your order');





            }else{


                return back()->with('status','Low Stock to selected quantity');


            }




        }else{


            return back()->with('status', 'Insufficient Fund');
        }



    }




    public function delivery()
    {


        $user_id = auth()->user()->id;
        $order_status = "Inprogress";
        $buyer_name = auth()->user()->name;
        $buyer_order = Order::where(['buyer_name'=>$buyer_name, 'status'=>$order_status])->get();
        $buyer_delivery = Order::latest('status',$order_status)->where('buyer_name', $buyer_name )->paginate(6);
        $carts = Cart::where('user_id',$user_id)->get();
        $carts_total = Cart::where('user_id',$user_id)->sum('product_price');
        $account = Account::where('user_id',$user_id)->sum('amount');
        $new_product = Product::latest()->paginate(1);
        $categories = Category::all();
        $brands = Brand::all();
        return view('buyer_delivery', compact('categories','brands','account','carts','new_product','carts_total','buyer_order','buyer_delivery'));
    }





    public function delivery_confirm()
    {


        $user_id = auth()->user()->id;
        $order_status = "Inprogress";
        $seller_name = auth()->user()->name;
        $seller_order = Order::where(['seller_name'=>$seller_name, 'status'=>$order_status])->get();
        $delivery_confirm = Order::latest()->where('seller_name', $seller_name )->paginate(6);
        $carts = Cart::where('user_id',$user_id)->get();
        $carts_total = Cart::where('user_id',$user_id)->sum('product_price');
        $account = Account::where('user_id',$user_id)->sum('amount');
        $new_product = Product::latest()->paginate(1);
        $categories = Category::all();
        $brands = Brand::all();
        return view('delivery_confirm', compact('categories','brands','account','carts','new_product','carts_total','seller_order','delivery_confirm'));
    }




    public function delivered(Order $order)
    {

        $status = 'Delivered';
        $order->update([
            'status' => $status
        ]);

        return back();

    }







    public function user_profile()
    {

            $user_id = auth()->user()->id;
            $profile_check = Profile::where('user_id',$user_id)->get();
            $profile = Profile::where('user_id',$user_id)->first();
            $order_status = "Inprogress";
            $user_name = auth()->user()->name;
            $seller_order = Order::where(['seller_name'=>$user_name, 'status'=>$order_status])->get();
            $buyer_order = Order::where(['buyer_name'=>$user_name, 'status'=>$order_status])->get();
            $carts = Cart::where('user_id',$user_id)->get();
            $carts_total = Cart::where('user_id',$user_id)->sum('product_price');
            $account = Account::where('user_id',$user_id)->sum('amount');
            $new_product = Product::latest()->paginate(1);
            $categories = Category::all();
             $brands = Brand::all();
            return view('profile', compact('categories','brands','account','carts','new_product','carts_total','seller_order','buyer_order','profile','profile_check'));



    }


    public function user_profile_store(Request $request)
    {


        $request->validate([
            'fullname' => 'required',
            'image' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'bank' => 'required',
            'acct_number' => 'required',
        ]);

        $image_name = time(). '.' . $request->image->extension();
        $request->image->move(public_path('profile'),$image_name);

        Profile::create([
            'user_id' => $request->user()->id,
            'fullname' => $request->fullname,
            'image' => $image_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'bank' => $request->bank,
            'acct_number' => $request->acct_number,

        ]);

        return back();

    }





    public function user_profile_update(Request $request, Profile $profile)
    {


        if ($request->image) {

        $request->validate([
            'fullname' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'bank' => 'required',
            'acct_number' => 'required',
        ]);

            $image_name = time(). '.' . $request->image->extension();
            $request->image->move(public_path('profile'),$image_name);

            $profile->update([
                'user_id' => $request->user()->id,
                'fullname' => $request->fullname,
                'image' => $image_name,
                'address' => $request->address,
                'phone' => $request->phone,
                'bank' => $request->bank,
                'acct_number' => $request->acct_number,

            ]);

            return back();

        }else{

            $request->validate([
                'fullname' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'bank' => 'required',
                'acct_number' => 'required',
            ]);


            $profile->update([
                'user_id' => $request->user()->id,
                'fullname' => $request->fullname,
                'address' => $request->address,
                'phone' => $request->phone,
                'bank' => $request->bank,
                'acct_number' => $request->acct_number,

            ]);

            return back();
        }



    }

}
