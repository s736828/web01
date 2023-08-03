<?php
include_once "DB.php";
class Image extends DB{
    public function __construct()
    {
        parent::__construct('image');
    }

}