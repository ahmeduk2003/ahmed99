<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;
use Validator;
class Ahmed extends Controller
{

 public function create (){
  $posts=student:: all();
  
   return view ('school',compact('posts'));
 }
    

 
 public function store(Request $request)
 {
  $request->validate([

    'username' => 'required|max:255',
    'Email'=> 'required|Email|unique:students',
    'Phone'=> 'required|numeric'


  ]);
  $post=new student();
  $post->name=$request->input('username');
  $post->Email=$request->input('Email');
  $post->Phone=$request->input('Phone');
  $post->save();
  

  return redirect()->back();
}






public function Remove(Request $Request){
 

 
    $post=student::find($Request->id);
    $post->delete();
   return redirect()->back();




}

 public function Edit (Request $Request) {



 $post=student::find($Request->id);

 return view ('Edit',compact('post'));



 }
 




 public function update (Request $Request) {
  $post=student::find($Request->id);
  $post->name=$Request->input('Name');
  $post->Email=$Request->input('Email');
  $post->Phone=$Request->input('Phone');
  $post->update();

  return redirect('add-student');


}
 



}



































































































































































