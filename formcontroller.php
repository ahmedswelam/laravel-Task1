<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
    //display view
    public function formview(){
        return view('regst');
    }


    //store data
    public function storedata(Request $request){

        $this->validate($request, [
            "name"     => "required|string",
            "email"    => "required|email",
            "password" => "required|min:6",
            "address"  => "required|size:10",
            "gender"   => "required",
            "linkedin" => "required|url"
        ]);

        echo '<h1>Your Data<h1>';
        echo 'Name : '. $request->name . '<br>';
        echo 'Email : '. $request->email;
        echo 'Password : '. $request->pasword. '<br>';
        echo 'Address : '. $request->address. '<br>';
        echo 'Gender : '. $request->gender. '<br>';
        echo 'LinkedIn : '. $request->linkedin;
    }
}
