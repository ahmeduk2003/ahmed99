<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boy;

class Boys extends Controller
{
    public function Mark (){
        $post=Boy::create(['Name'=>'hassen','Subject'=>'math','Teacher'=>'Ahmed']);
        $post=Boy::create(['Name'=>'Omer','Subject'=>'Arabic','Teacher'=>'ali']);
        $post=Boy::create(['Name'=>'Kremm','Subject'=>'EN','Teacher'=>'Aseil']);
        $post=Boy::all();
      
        
   return view ('xyz',compact('post'));
 }
    



public function Remove(id $is){
 

//  dd($Request);
  $post=student::find($id->id);
  $post->delete();
 return redirect()->back();
 






}





}
