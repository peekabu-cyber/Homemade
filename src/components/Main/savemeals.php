<?php
    require './src/server_comp/credentials.php';

    $mysqli = new MySQLi($host,$user,$password,$database);
    if($mysqli -> connect_error) {
        echo 'Connection failed!
        Error #' . $mysqli -> connect_errno
         . ': ' . $mysqli -> connect_error;
        exit(0);
    }
    $mysqli -> set_charset('utf8');
    $sql = "INSERT
                INTO meal(Meal_Name, test_Meal4)
                VALUES ('Chicken', 23)";
    $result = $mysqli->query($sql);

    $sql = "SELECT *
                FROM meal";

    $result = $mysqli->query($sql);
    echo "$result->num_rows";


    $mysqli -> close();
?>