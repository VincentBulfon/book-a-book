<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';
    public $timestamps = true;

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }
}