<?php
include_once "DB.php";
class Menu extends DB{
    public function __construct()
    {
        parent::__construct('menu');
    }

}