<?php
include_once "DB.php";
class Ad extends DB
{
    public function __construct()
    {
        parent::__construct('ad');
    }

}
