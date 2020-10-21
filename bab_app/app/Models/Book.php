<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    protected $table = 'books';
    public $timestamps = true;

    use HasFactory ,SoftDeletes;

    protected $dates = ['deleted_at'];

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'books_author');
    }

    public function EditionComment()
    {
        return $this->hasOne('App\Models\TextualContent', 'textual_content_id');
    }
}
