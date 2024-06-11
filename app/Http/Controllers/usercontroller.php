<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 
class usercontroller extends Controller
{
    function index(Request $req){
       $data= User::where(['email'=>$req->email])->First();
       if(!$data ||!Hash::check($req->password,$data->password)){
        return "name and password cannot match";
       }
       else{
        $req->session()->put('data',$data);
        return redirect('/');
       }
    }
}
 
