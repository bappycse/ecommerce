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

    
    
}
