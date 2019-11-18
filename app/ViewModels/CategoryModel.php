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

    public function get($id){
        return $this->_categoryService->get($id);
    }

    public function store($request){
        $this->_category = resolve('App\BusinessObjects\ICategory');
        $this->_category->setName($request->input('name'));
        $this->_categoryService->store($this->_category);  
    }

    public function getAll(){
        return $this->_categoryService->getAll();
       
    }

    public function delete($id){
        $this->_categoryService->delete($id);
    }
}
