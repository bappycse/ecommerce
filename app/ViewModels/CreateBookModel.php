<?php

namespace App\ViewModels;

use Illuminate\Http\Request;
use App\Services\IBookService;

class CreateBookModel implements ICreateBookModel
{
    private $_bookService;
    public function __construct(IBookService $bookService)
    {
        $this->_bookService = $bookService;
    }

    public function createBook($request)
    {
        
        $title = $request->input('title');
        $barcode = $request->input('barcode');
        $this->_bookService->AddBook($title,$barcode);
        return back();
    }
}
