<?php

namespace App\Services;

use App\Repositories\IBookRepository;

class BookService implements IBookService
{

    private $_bookRepository;

    public function __construct(IBookRepository $bookRepository)
    {
        $this->_bookRepository = $bookRepository;
    }
    public function AddBook($title, $barcode)
    {
        $this->_bookRepository->add($title, $barcode);
    }

    public function getData(){
        $this->_bookRepository->getData();
    }
}
