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

    protected $fillable = [];
    protected $dates = ['deleted_at'];

    /**
     * return the relation for the orders asociated to this book
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }

    /**
     * return the relationship for authors associated to this book
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function authors()
    {
        return $this->belongsToMany(Author::class, 'book_author');
    }

    /**
     * return the relationship for the academics years and the price from pivot associated to this command
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function academicYears()
    {
        return $this->belongsToMany(AcademicYear::class, 'sales', 'academic_year_id', 'book_id')->withPivot('student_price', 'public_price');
    }
}
