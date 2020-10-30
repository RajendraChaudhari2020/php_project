<?php
session_start();
$db = new mysqli('localhost','root','','cab_servies');


// // echo "<pre>"; print_r($_SERVER) ; exit;
    function file_url($path){
        //   C:/xampp/htdocs/php_project/connection.php
    $hostname = $_SERVER['DOCUMENT_ROOT'];
    // print_r($hostname);
    // print_r($_SERVER['REQUEST_URI']);
    $projectName = explode("/",$_SERVER['REQUEST_URI']);
    // print_r($projectName);
    return  $hostname."/".$projectName[1].$path; 
}

    function redirect_url($path){
            $hostname = $_SERVER['HTTP_HOST'];
            $projectName = explode("/",$_SERVER['REQUEST_URI']);
            // print_r($peojectName[1]);exit;
        return  "http://".$hostname."/".$projectName[1]."/".$path;
    }

?>
