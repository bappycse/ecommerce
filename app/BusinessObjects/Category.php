<?php

namespace App\BusinessObjects;

class Category implements ICategory
{
    private $id;
    private $name;

    public function __construct()
    { }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        return $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getImage()
    {
        return $this->images;
    }
    public function setImage($images)
    {
        return $this->images = $images;
    }
}
