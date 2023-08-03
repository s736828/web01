<?php
include_once "DB.php";
class News extends DB{
    public function __construct()
    {
        parent::__construct('news');
    }

}