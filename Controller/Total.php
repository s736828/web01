<?php
include_once "DB.php";
class Total extends DB{
    public function __construct()
    {
        parent::__construct('total');
    }

}