<?php
session_start();
include_once "./views/header.php";
if(isset($_GET['act']))
{
    switch ($_GET['act']){
        case '/':
            include "./views/home.php";
            break;
    }
}
else
{
    include "./views/home.php";
}
include_once "./views/footer.php";
