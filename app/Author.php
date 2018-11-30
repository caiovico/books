<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $hidden = ['created_at', 'updated_at'];
    /**

    * The books that belong to the author.

    */

    public function books()

    {
        return $this->belongsToMany(Book::class, 'book_author');
    }
}
