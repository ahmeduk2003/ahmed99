<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boy extends Model
{
    protected $fillable= ['Name','Subject', 'Teacher'];
    protected $timelamp=false;
    //protected $table='boyes';
    use HasFactory;
}
