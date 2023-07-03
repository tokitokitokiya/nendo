<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;
use App\Models\Shop;
use App\Models\User;

class AplController extends Controller
{
    //
    public function index(Order $order, Request $request)//インポートしたPostをインスタンス化して$postとして使用。
    {
        $shops=Shop::all();
        $order1 = Order::whereHas('item',function($q){
            $q->where('shop_id',1);
            })->get();
        $order2 =Order::whereHas('item',function($q){
            $q->where('shop_id',2);
            })->get();
        $order3 = Order::whereHas('item',function($q){
            $q->where('shop_id',3);
            })->get();
            
        //$orders=Order::whereIn('item_id', $item->pluck('id') )->get();
        
        return view('apls/index')->with(['shops' => $shops,'orders'=>$order->get(),'orders1' => $order1,'orders2' => $order2,'orders3' => $order3]);
    }





    
    public function prelogin(User $users)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('apls/login')->with(['users' => $users]);
    }
    
    public function mypage(Order $order)//インポートしたPostをインスタンス化して$postとして使用。
    {
        $userorder = Order::where('user_id', auth()->id())->get();
        $user = User::find(auth()->id());
        return view('apls/mypage')->with(['orders' => $order, 'userorders' => $userorder, 'user' => $user]);
    }
    
    public function delete(Order $order){
        $order->delete();
        return redirect('apls/mypage');
    }
    
    public function items()
    {
        $item=Item::all();
        $item1=Item::where('shop_id',1)->get();
        $item2=Item::where('shop_id',2)->get();
        $item3=Item::where('shop_id',3)->get();
        //dd($item);
        return view('apls/items')->with(['items1' => $item1,'items2' => $item2,'items3' => $item3]);
        
    }
    
    public function chumon(Order $order, Request $request){
        $input=$request['order'];
        $input2=$request['grade'];
        $order->fill($input)->save();
        $userid=$input['user_id'];
        $user=User::find($userid);
        //dd($input2);
        if ($user && $input2) {
            $user->grade = $input2;
            $user->save(); // ユーザーを保存する
        }
        
        return redirect('apls/mypage');
        
    }
}

