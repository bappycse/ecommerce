<?php

namespace App\ViewModels;

use Illuminate\Http\Request;

use App\Services\ICategoryService;

class CategoryModel implements ICategoryModel
{ 
    private $_categoryService;

    private $_category;

    public function __construct(ICategoryService $categoryService)
    {
      $this->_categoryService = $categoryService;  
    }

    public function store($request){
        $this->_category = resolve('App\BusinessObjects\ICategory');
        $this->_category->setName($request->input('name'));
        $this->_categoryService->store($this->_category);  
    }
}
