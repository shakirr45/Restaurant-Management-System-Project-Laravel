<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Chefs;
use App\Models\Cart;



class HomeController extends Controller
{
    //

    //For home Page ====>
    public function index(){
        $data = Food::all();
        $data2 = Chefs::all();


        return view('home',compact('data','data2'));
        
    }

    public function redirects(){
        $data = Food::all();
        $data2 = Chefs::all();

        $usertype = Auth::user()->usertype;

        if($usertype == '1'){

            return view('admin.adminhome');

        }else if ($usertype == '0'){

            $user_id =Auth::id();
            $count= cart::where('user_id',$user_id)->count();

            return view('home',compact('data','data2','count'));
        }
    }

    ///Add to cart ====>>>
    public function addcart(Request $request , $id){

        //example-->>>>>>>>>
        // $user_id = Auth::user()->id;
        // or Auth::id()

        if(Auth::id()){

            $user_id =Auth::id();
            // dd($user_id);

            $foodid = $id;
            $quantity=$request->quantity;

            $cart = new Cart;
            $cart->user_id=$user_id;
            $cart->food_id=$foodid;
            $cart->quantity = $quantity;

            $cart->save();

            return redirect()->back();
        }else{
            return redirect('/login');
        }
    }

    //show cart ===>
    public function showcart(Request $request ,$id){

        $count = Cart::where('user_id',$id)->count();

        
        //for delete===>
        $data2 =Cart::select('*')->where('user_id','=' , $id)->get();


        $data = Cart::where('user_id', $id)->join('food', 'carts.food_id', '=' , 'food.id')->get();



        return view('showcart',compact('count','data','data2'));
    }

    //remove cart ====>
    public function remove($id){
        $data = Cart::find($id);
        $data->delete();

            return redirect()->back();

    }


}
