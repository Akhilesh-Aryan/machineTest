<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getdata(){
        return view('homepage.registration');
    }

    public function regStore(Request $request){
        $request->validate([
            "name"=>'required|min:3',
            "email"=>'required|email',
            "mobile"=>'required|integer|min:10',
            "image"=>'required|mimes:png,jpg|size:min:100',
            "dob"=>'required',
            "password"=>'required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            "cpassword"=>'required|same:password',
        ]);
        
        $filename = time()."." .$request->image->extension();
        $request->image->move(public_path('images'),$filename);
        $post = new Test();
        $post->name = $request->name;
        $post->email = $request->email;
        $post->mobile = $request->mobile;
        $post->image = $request->image;
        $post->dob = $request->dob;
        $post->password = $request->password;
        $post->cpassword = $request->cpassword;
        $post->save();
        return redirect()->back();
    }
}
