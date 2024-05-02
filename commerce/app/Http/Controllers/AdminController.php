<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use App\Models\Transaction;
use App\Models\AdminMessage;
use Illuminate\Http\Request;
use App\Models\AdminNotification;
use App\Models\Order;
use App\Models\Product;
use App\Models\Profile;

class AdminController extends Controller
{
    //

    public function index()
    {

         $total_user = User::all();
        $total_stock = Product::sum('stock');
         $total_order = Order::all();
         $total_account = Account::sum('amount');
         $recent_products = Product::latest()->paginate(5);


        $status_transaction = 'Pending';
        $status_message = 'unread';
        $transactions = Transaction::where('status',$status_transaction)->paginate(2);
        $transactions_count = Transaction::where('status',$status_transaction)->get();
        $unread = AdminMessage::latest()->where('status',$status_message)->paginate(2);
        $unreadcount = AdminMessage::latest()->where('status',$status_message)->get();


        return view('admin.index',compact('unread','unreadcount','transactions','transactions_count','total_user','total_order','total_stock','total_account','recent_products'));
    }

    public function seller_user()
    {
        $status_transaction = 'Pending';
        $status_message = 'unread';
        $transactions = Transaction::where('status',$status_transaction)->paginate(2);
        $transactions_count = Transaction::where('status',$status_transaction)->get();
        $unread = AdminMessage::latest()->where('status',$status_message)->paginate(2);
        $unreadcount = AdminMessage::latest()->where('status',$status_message)->get();


        $user_type = "seller";
        $users = User::where('user_type', $user_type )->paginate(5);
        return view('admin.seller_user', compact('users','unread','unreadcount','transactions','transactions_count'));
    }




    public function user_view(User $user)
    {


        $profile = Profile::where('user_id',$user->id)->first();
        if (!$profile) {

            return back()->with('status', 'User yet to upload Profile');
        }

        $status_transaction = 'Pending';
        $status_message = 'unread';
        $transactions = Transaction::where('status',$status_transaction)->paginate(2);
        $transactions_count = Transaction::where('status',$status_transaction)->get();
        $unread = AdminMessage::latest()->where('status',$status_message)->paginate(2);
        $unreadcount = AdminMessage::latest()->where('status',$status_message)->get();


        $user_type = "seller";
        $users = User::where('user_type', $user_type )->paginate(5);
        return view('admin.user_view', compact('users','unread','unreadcount','transactions','transactions_count','profile','user'));
    }






    public function activate_user(User $user)
    {

        $user->update([
            'status' => 1
        ]);

        return back();
    }

    public function disable_user(User $user)
    {

        $user->update([
            'status' => 0
        ]);

        return back();
    }


    public function buyer_user()
    {
        $status_transaction = 'Pending';
        $status_message = 'unread';
        $transactions = Transaction::where('status',$status_transaction)->paginate(2);
        $transactions_count = Transaction::where('status',$status_transaction)->get();
        $unread = AdminMessage::latest()->where('status',$status_message)->paginate(2);
        $unreadcount = AdminMessage::latest()->where('status',$status_message)->get();

        $user_type = "buyer";
        $users = User::where('user_type', $user_type )->paginate(5);
        return view('admin.buyer_user', compact('users','unread','unreadcount','transactions','transactions_count'));
    }




    public function admin_order()
    {


        $orders = Order::latest()->paginate(5);

        $status_transaction = 'Pending';
        $status_message = 'unread';
        $transactions = Transaction::where('status',$status_transaction)->paginate(2);
        $transactions_count = Transaction::where('status',$status_transaction)->get();
        $unread = AdminMessage::latest()->where('status',$status_message)->paginate(2);
        $unreadcount = AdminMessage::latest()->where('status',$status_message)->get();


        return view('admin.order',compact('unread','unreadcount','transactions','transactions_count','orders'));
    }








    public function admin_message()
    {

        $status_transaction = 'Pending';
        $status_message = 'unread';
        $transactions = Transaction::where('status',$status_transaction)->paginate(2);
        $transactions_count = Transaction::where('status',$status_transaction)->get();
        $unread = AdminMessage::latest()->where('status',$status_message)->paginate(2);
        $unreadcount = AdminMessage::latest()->where('status',$status_message)->get();
        $allmessages  = AdminMessage::orderBy('status', 'DESC')->paginate(5);
        return view('admin.admin_message', compact('unread','unreadcount','allmessages','transactions','transactions_count'));
    }

    public function admin_message_read(AdminMessage $message)
    {

        $read = $message->status;
        if ( $read == 'read') {

            $status_transaction = 'Pending';
            $status_message = 'unread';
            $transactions = Transaction::where('status',$status_transaction)->paginate(2);
            $transactions_count = Transaction::where('status',$status_transaction)->get();
            $unread = AdminMessage::latest()->where('status',$status_message)->paginate(2);
            $unreadcount = AdminMessage::latest()->where('status',$status_message)->get();
            return view('admin.admin_message_read', compact('unread','unreadcount','message','transactions','transactions_count'));

        }else{

            $message->update([
                'status' => 'read'
            ]);

            $status_transaction = 'Pending';
            $status_message = 'unread';
            $transactions = Transaction::where('status',$status_transaction)->paginate(2);
            $transactions_count = Transaction::where('status',$status_transaction)->get();
            $unread = AdminMessage::latest()->where('status',$status_message)->paginate(2);
            $unreadcount = AdminMessage::latest()->where('status',$status_message)->get();
            return view('admin.admin_message_read', compact('unread','unreadcount','message','transactions','transactions_count'));

        }



    }



    public function admin_transaction()
    {

        $status_transaction = 'Pending';
        $status_message = 'unread';
        $transactions = Transaction::where('status',$status_transaction)->paginate(2);
        $transactions_count = Transaction::where('status',$status_transaction)->get();
        $alltransactions  = Transaction::latest()->paginate(5);
        $unread = AdminMessage::latest()->where('status',$status_message)->paginate(2);
        $unreadcount = AdminMessage::latest()->where('status',$status_message)->get();
        $allmessages  = AdminMessage::orderBy('status', 'DESC')->paginate(5);
        return view('admin.transaction', compact('unread','unreadcount','allmessages','alltransactions','transactions_count','transactions'));
    }



    public function admin_transaction_approve(Transaction $transaction)
    {

             $status_transaction = 'Pending';
             $status_message = 'unread';
             $transaction_type = "Deposit";
             $profile = Profile::where('user_id',$transaction->user_id)->first();
            $teller_check = Transaction::where(['teller_number' => $transaction->teller_number, 'type'=>$transaction_type])->get();
            $transactions = Transaction::where('status',$status_transaction)->paginate(2);
            $transactions_count = Transaction::where('status',$status_transaction)->get();
            $unread = AdminMessage::latest()->where('status',$status_message)->paginate(2);
            $unreadcount = AdminMessage::latest()->where('status',$status_message)->get();
            return view('admin.transaction_approve', compact('unread','unreadcount','transaction','transactions','transactions_count','teller_check','profile'));





    }


    public function admin_transaction_verified(Transaction $transaction)
    {

   Account::where('user_id',$transaction->user_id)->increment('amount',$transaction->amount);

    $transaction->update([
        'status' => "Successful"
    ]);

    return back();

 }


 public function admin_transaction_decline(Transaction $transaction)
 {



 $transaction->update([
     'status' => "Decline"
 ]);

 return back();

}


public function admin_withdrawal_verified(Transaction $transaction)
{

    $transaction->update([
        'status' => "Successful"
    ]);

    return back();

}


}
