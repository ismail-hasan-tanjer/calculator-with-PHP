<?php

require_once "./vendor/autoload.php";
use App\classes\HelloWorld;

// print_r ($_GET);

if(isset($_GET['page'])){
    if("home" == $_GET['page']) {
        $menu = new HelloWorld();  
    include 'pages/home.php';
    }
}


?>

