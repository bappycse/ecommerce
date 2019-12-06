<?php
namespace App\Services;

use App\BusinessObjects\ICategory;
use App\Repositories\ICategoryRepository;

class CategoryService implements ICategoryService{

    private $_categoryRepository;
    public function __construct(ICategoryRepository $categoryRepository){
        $this->_categoryRepository = $categoryRepository;
    }



    public function store(ICategory $category)
    {
        $this->_categoryRepository->add($category);
    }

    public function get($id){
        return $this->_categoryRepository->get($id);
        
    }

    public function getAll(){
        return $this->_categoryRepository->getAll();
        
    }

    public function UpdateCategory($category,$id){
        $this->_categoryRepository->update($category,$id);
    }

    public function delete($id){
        $this->_categoryRepository->delete($id);
    }
}
