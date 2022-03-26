<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Phone;
class ali extends Controller
{




    //

  

  


    public function __construct(){


    
   


    //}
    }
    public function Showme1(){

     return 'Shome1';

    }

    public function Showme2(){

      return 'Shome a Problem';
 
     }
     public function Showme3(){

      return 'Shome3';
 
     }



    public function Add(){
      
      $name =array('ahmed','ali' ,'omar');

      

     // );
           return view ('welcome', compact('name'));
      
    }


    public function NewPage (){

     return view ('landing'); 

    }


   
    public function read (){
      $uks=Post::all();
      
      //foreach ($uk as $uks){

       return $uks;


      //} 
      
    }

   public function ReadDateBase(){

  $me=Post::find(6);
     $me->email;
             
    return $me->email;
   }



  public function Find(){


     $find=Post::where('username','ahmed abdul rahman')->orderBy('id')->get();
    
      return $find ;


  }

  public function Insert(){

  $uk= new Post ;
  $uk->username='weal arabic';
  $uk->save();
  
  
  }
 

  public function Insert2(){


    $q=Post::create(['username'=>'mahmooed','email'=>'arewwfmk@ffdwrf.com']);




  }

  public function Update(){


    Post::where('id',3)->update(['username'=>'dog','email'=>'abte@yahoo.com']);




  }



  public function Insert5(){

   $Phone=Phone::create(['Iphone'=>'iphone 6s','Price'=>'200$','Rom'=>'64','Coler'=>'black']);
   $Phone=Phone::create(['Iphone'=>'iphone xs','Price'=>'700$','Rom'=>'64','Coler'=>'white']);
   $Phone=Phone::create(['Iphone'=>'iphone 11','Price'=>'800$','Rom'=>'64','Coler'=>'red']);
   $phone=Phone::create(['Iphone'=>'iphone xr','Price'=>'800$','Rom'=>'128','Coler'=>'red']);
   $Phone=phone::create(['Iphone'=>'iphone pro','Price'=>'1000$','Rom'=>'128','Coler'=>'black']);
  
   return $phone;
  



  }


  
  public function Reading(){

   $phone=Phone::where('id',68)->Update(['Iphone'=>'pro','Price'=>'15999$']);


  return $phone;







  }


  public function Ar(){

    $cool=Phone::destroy('id',65);
   
    return  $cool;
           


  }





















































































































































































































































































































































































































































}
