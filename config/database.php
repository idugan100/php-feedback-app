<?php
    define('DB_HOST',"localhost");
    define("DB_USER","isaac");
    define("DB_PASS","Redmoped16!");
    define("DB_NAME","php_feedback");
    //create connection
    $conn=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($conn->connect_error){
        die('Connection Error'.$conn->connect_error);
    }
    //echo "connected";

?>