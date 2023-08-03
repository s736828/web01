<?php
include_once "DB.php";
class Title extends DB{
    public function __construct()
    {
        parent::__construct('title');
    }

}