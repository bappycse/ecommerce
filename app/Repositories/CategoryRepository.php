<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository extends Repository implements ICategoryRepository
{
    public function __construct(Category $category)
    {
        parent::setModel($category);
    }

    public function add($category)
    {
        
        $category_arr = [
            'name' => $category->getName()
        ];
        parent::add($category_arr);
    }
}
