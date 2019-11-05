<?php
namespace App\Services;

use App\Repositories\ICategorytRepository;
use App\Repositories\CategoryRepository;


class CategoryService implements ICategoryService{

    private $_category;
    public function __construct(ICategoryRepository $category){
        $this->_category = $category;
    }

    public function addCat(){
        $this->_category->Add();
        
    }

    
    
}


?>