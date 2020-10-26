<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model 
{

    protected $table = 'sales';
    public $timestamps = true;
    protected $fillable = array('public_price', 'student_price');

}