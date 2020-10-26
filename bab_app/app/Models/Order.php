<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    protected $table = 'orders';
    public $timestamps = true;

    use HasFactory,SoftDeletes;

    protected $dates = ['deleted_at'];

    public function books()
    {
        return $this->belongsToMany('App\Models\Book');
    }

    public function status()
    {
        return $this->belongsToMany('App\Models\Status');
    }
}
