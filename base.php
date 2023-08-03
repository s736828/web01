<?php
$BASEDIR = __DIR__;
session_start();

include_once $BASEDIR . "/Controller/Ad.php";
include_once $BASEDIR . "/Controller/Admin.php";
include_once $BASEDIR . "/Controller/Bottom.php";
include_once $BASEDIR . "/Controller/Image.php";
include_once $BASEDIR . "/Controller/Menu.php";
include_once $BASEDIR . "/Controller/Mvim.php";
include_once $BASEDIR . "/Controller/News.php";
include_once $BASEDIR . "/Controller/Title.php";
include_once $BASEDIR . "/Controller/Total.php";

function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
function to($url)
{
    header("location:" . $url);
}

function q($sql)
{
    $pdo = new PDO("mysql:host=localhost;charset=utf8;dbname=db01,'root',''");
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

$Ad = new Ad;
$Admin = new Admin;
$Bottom = new Bottom;
$Image = new Image;
$Menu = new Menu;
$Mvim = new Mvim;
$News = new News;
$Total = new Total;
$Title = new Title;
