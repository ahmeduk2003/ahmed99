<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class Lib extends Controller
{
    

    public function Bookker() {
    $post=Book::create(['NameOfBook'=>'Math','Athuer'=>'DrAhmed','Des'=>'me']);
    $post=Book::create(['NameOfBook'=>'Ar','Athuer'=>'DrAli','Des'=>'is']);
    $post=Book::create(['NameOfBook'=>'En','Athuer'=>'DrMu','Des'=>'iy']);
    $post=Book::all();
    return view ('Bookker',compact('post'));
    }

    public function DisplayAddbook(){


      $books=Book::all();

      $informationArray=array(
        "books"=>$books
      );
      return view('Addbook',$informationArray);
    }
    
    public function Adding (Request $req)
    {
        $book=new Book;
        $book->NameOfBook=$req->NameOfBook;
        $book->Athuer=$req->Athuer;
        $book->Des=$req->Des;
        $book->save();
        $books=Book::all();

        $informationArray=array(
          "books"=>$books
        );
      return redirect()->back();
    }





 public function E (){

return view('Edit');

 }

 

     


 



























































































































































}

























