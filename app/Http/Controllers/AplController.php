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
        $item = Item::where('shop_id',$request->input('shops') ?? [1])->get();
        $user= $order->find(1)->user->get();
        

        //$orders=Order::whereIn('item_id', $item->pluck('id') )->get();
        
        
     
        return view('apls/index')->with(['shops' => $shops,'orders'=>$order->get(),'user'=>$user]);
    }





    
    public function login(Apl $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('apls/login')->with(['food' => $post]);
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
        //dd($item);
        return view('apls/items')->with(['items' => $item]);
        
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

