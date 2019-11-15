<?php

namespace App\Repositories;

use App\Book;

class BookRepository implements IBookRepository 
{
    public function __construct()
    { }

    public function Add($title, $barcode)
    {   
        $book = new Book;
        $book->title = $title;
        $book->barcode = $barcode;
        $book->save();
         
     }

     public function getData(){
         echo  "Get Data";
     }
}
