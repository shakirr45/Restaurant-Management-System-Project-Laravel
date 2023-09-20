<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Chefs;



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

    // reservation post ====>
    public function reservation(Request $request){        							
        $data = new Reservation;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;

        $data->save();
        return redirect()->back();
    } 

    //reservation show ====>
    public function adminreservation(){
        $data = Reservation::all();
        return view('admin.adminreservation', compact('data'));
    }

    //add chefs ====>
    public function chefs(){
        $data3 = Chefs::all();
        return view('admin.chefs',compact('data3'));
    }

    public function add_chefs(Request $request){

        $data = new Chefs;
        $data->name=$request->name;
        $data->speciality=$request->speciality;

        $image = $request->image;
        if($image){
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image=$imagename;

        }

        $data->save();
        return redirect()->back();
    }


    public function update_chefs($id){
        $data = Chefs::find($id);
        return view('admin.edit_chef', compact('data'));
    }

    public function main_update_chefs(Request $request, $id){
        $data= Chefs::find($id);
        $data->name=$request->name;
        $data->speciality=$request->speciality;

        $image = $request->image;
        if($image){
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image=$imagename;

        }

        $data->save();
        return redirect()->back();

    }

    //Delete chefs ====>
    public function delete_chefs($id){
        $data = Chefs::find($id);
        $data->delete();
        return redirect()->back();

    }
}   
