<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=utf-8');


require_once 'connect.php';


session_start();


if(!isset($_COOKIE['username']) && !isset($_COOKIE['access'])) {
    header("Location:login.php");
}


else{
    

//unset($_POST);


?>
<style>
    
    #content_info
    {
        display: block!important;
    }
</style>


<link rel="shortcut icon" href="../moodle/favicon.ico">

<?php


$a = $_COOKIE['access'];



?>


<?php

  }

?>
