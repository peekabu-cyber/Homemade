<?php
require './credentials.php';

session_start();
$clientUsername = trim($_POST['client_username']);
$clientPassword = trim($_POST["client_password"]);

$mysqli = new MySQLi($host,$user,$password,$database);
if($clientUsername != null and $clientPassword != null){

        $sql = "SELECT *
                    FROM useraccounts
                    WHERE userName = '$clientUsername'
                    ";

        $query = $mysqli ->query($sql);
        $result = $query -> fetch_all(MYSQLI_ASSOC);
        if($result[0]['userName'] == null){
            echo "ERROR - #450 // Account doesn't exist,";
            echo '<a href="http://localhost:3000/">' . 'Sign up?'. '</a>';
            exit(0);
        }
        $_SESSION['username'] = $clientUsername;
        $_SESSION['password'] = $clientPassword;


        echo "Login with the username: " .$clientUsername. " :was successful";
        echo '<p><a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Go back</a></p>';
}else{
            echo "ERROR - #320// BLANK ";
}
?>