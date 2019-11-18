<?php

namespace App\Repositories;

use App\Models\Category;
use App\Library\Helper;

class CategoryRepository extends Repository implements ICategoryRepository
{
    public function __construct(Category $category)
    {
        parent::setModel($category);
    }

    public function get($id){
        $catSingle = parent::get($id);
        $catsingle = $catSingle->toArray();
        return $catItem[] = $catSingle;
    }

    public function getAll(){
        $category =  parent::getAll();
        return Helper::catAllData($category);
     }

    public function add($category)
    {
        
        $category_arr = [
            'name' => $category->getName()
        ];
        parent::add($category_arr);
    }

    public function Update($category,$id){
        $category_array = [
            'name' => $category->getName()
        ];

        parent::update($category_array,$id);
    }

    public function delete($id)
    {
        parent::delete($id);
    }
}
