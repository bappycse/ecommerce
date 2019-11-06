<?php

namespace App\Repositories;

interface IProductRepository
{
    public function Get($id);

    public function GetAll();


    public function Add();


    public function Update($id);


    public function Delete($id);
}
