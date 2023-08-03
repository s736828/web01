<?php
include_once "DB.php";
class Admin extends DB{
    public function __construct()
    {
        parent::__construct('admin');
    }

}