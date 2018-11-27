<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**

    * The authors that belong to the book.

    */

    public function authors()

    {
        return $this->belongsToMany(Author::class, 'book_author');
    }
}
