<?php


namespace App\ViewModels;

use Illuminate\Http\Request;

use App\Services\ICategoryService;

class EditCategoryModel {

    private $_category;
    private $_categoryService;
    private $_id;
    private $_name;

    public function __construct(ICategoryService $categoryService,Request $request)
    {
        $this->_categoryService = $categoryService;
        $this->_id = $request->input('id');
        $this->_name = $request->input('name');

    }

    public function get($id){
        $this->_categoryService->get($id);
    }
    public function update($id){
        $_category = resolve('App\BusinessObjects\ICategory');
        $_category->setName($this->_id);
        $_category->setName($this->_name);
        $this->_categoryService->UpdateCategory($_category,$id);
    }
}