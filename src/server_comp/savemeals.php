<?php
    $host = 'localhost';
    $user = 'root';
    $password = '445566pop';
    $database = 'client_meals';

    $mysqli = new MySQLi($host,$user,$password,$database);
    if($mysqli -> connect_error) {
        echo 'Connection failed!
        Error #' . $mysqli -> connect_errno
         . ': ' . $mysqli -> connect_error;
        exit(0);
    }

?>