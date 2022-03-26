<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{    protected $fillable= ['NameOfBook','Athuer', 'Des'];
     protected $timelamp=false;
     protected $table='Bookes';

   
  
}
