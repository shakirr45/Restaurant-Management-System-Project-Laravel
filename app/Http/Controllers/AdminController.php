<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;

class AdminController extends Controller
{
    //

    public function users(){
        $data = User::all();
        return view('admin.users',compact('data'));
    }

    public function delete_user($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }

    //for add food====>
    public function foodmenu(){
        $data = Food::all();
        return view('admin.foodmenu',compact('data'));
    }

    public function upload_food(Request $request){
        $data = new Food;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('foodimage',$imagename);
            $data->image = $imagename;
        }

        $data->save();
        return redirect()->back();

    }

    // for delete food =====>
    public function delete_food($id){
        $data = Food::find($id);
        $data->delete();
        return redirect()->back();
    }

    //for update food ====>

    public function update_food($id){

        $data= Food::find($id);

        return view('admin.update_food',compact('data'));
        
    }

    public function edit_food(Request $request, $id){

        $data = Food::find($id);

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('foodimage',$imagename);
            $data->image = $imagename;
        }

        $data->save();
        return redirect()->back();

    }
}
