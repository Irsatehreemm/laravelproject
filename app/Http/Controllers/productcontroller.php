<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
class productcontroller extends Controller
{
    function index(){
$data= product::all();
return view('product',['products'=>$data]);
    }
    function detail($id){
      $data= product::find($id);
      return view('detail',['product'=>$data]);
    }
    function search(Request $req){
       
         $data= product::where('name','like','%'.$req->input('query').'%' )->get();
         return view('search',['products'=>$data]);
    }

    function addtocart(Request $req)
    {
       if($req->session()->has('data'))
       {
        $cart=new cart;
        $cart->user_id=$req->session()->get('data')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/');
       }
      else
       {
         return redirect('/login');
       }

    }
    public static function cartItem()
    {
       

        return ;
    }
    // public static function cartItem()
    // {
    //   return  $total;
    //     // Your logic to get the total cart items
    //     // For example, you might fetch the total cart items from the session or database
    //     // Assuming you are returning a static number for demonstration
    //    // return 5;
    // }
}
