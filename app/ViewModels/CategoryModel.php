<?php

namespace App\ViewModels;

use App\Library\Helper;
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

    public function addCategory($request){
        $this->loadFields($request);
        $this->_category = resolve('App\BusinessObjects\ICategory');
        $category = Helper::convertCategoryModel($this);
        $this->_categoryService->addCategory($category);
    }

    public function getAll(){
        return $this->_categoryService->getAll();

    }

    public function delete($id){
        $this->_categoryService->delete($id);
    }

    private function loadFields(Request $request)
    {
        $this->name = $request->input('name');
        $this->slug = $request->input('slug');
        $this->description = $request->input('description');
        $this->parent_id = $request->input('parent_id');
        $this->featured = $request->input('featured');
    }
}
