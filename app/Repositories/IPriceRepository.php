<?php

namespace App\Repositories;

interface IPriceRepository
{
    public function Get($id);

    public function GetAll();


    public function Add();


    public function Update($id);


    public function Delete($id);
}