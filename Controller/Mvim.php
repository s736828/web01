<?php
include_once "DB.php";
class Mvim extends DB{
    public function __construct()
    {
        parent::__construct('mvim');
    }

}