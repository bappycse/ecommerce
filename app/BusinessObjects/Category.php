<?php

namespace App\BusinessObjects;

class Category implements ICategory
{
    private $id;
    private $parentId;
    private $name;
    private $slug;
    private $featured;
    private $description;
    private $status;
    private $cover;


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

    public function getParentId()
    {
        return $this->parentId;
    }

    public function setParentId($id)
    {
        return $this->parentId = $id;
    }

    public function getName()
{
    return $this->name;
}

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getSlug()
{
    return $this->slug;
}

    public function setSlug($name)
    {
        return $this->slug = $name;
    }

    public function getFeatured()
    {
        return $this->featured;
    }

    public function setFeatured($name)
    {
        return $this->featured = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        return $this->description = $description;
    }

    public function getImage()
    {
        return $this->images;
    }
    public function setImage($images)
    {
        return $this->images = $images;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        return $this->status = $status;
    }
}
