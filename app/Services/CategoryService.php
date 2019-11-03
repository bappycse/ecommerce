<?php
namespace App\BusinessObeject;


use App\BusinessObeject\CategoryRepository;
use App\Repositories\ICategorytRepository;

class CategoryService implements ICategoryRepository{

    private $_category;
    public function __construct(ICategoryRepository $category){
        $this->$_category = $category;
    }

    public function addCat(){
        $this->$_category->Add();
        
    }

    
    
}


?>