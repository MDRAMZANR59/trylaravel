<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;

class FormController extends Controller
{
   public function getform(){
        return view('form');
   }
   public function store(Request $request){
        $validation=$request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'age'=>'nullable',
            'image'=>'mimes:png,jpg',
        ]);
        $db=new form;
        $nameimg=null;
        if($request->image){
        $nameimg=time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$nameimg);
        };
        $db->fname=$request->fname;
        $db->lname=$request->lname;
        $db->age=$request->age;
        $db->image=$nameimg;

        $db->save();
        return redirect()->route('form')->with('success','Data saved');
   }
}
