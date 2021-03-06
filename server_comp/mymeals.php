<?php

require "./credentials.php";
session_start();
$userName =  $_SESSION['username'];
$userPassword =  $_SESSION['password'];

if(isset($_SESSION['username']) and isset($_SESSION['password']) and $_SESSION['password']!=" " and $_SESSION['username'] != " ") {

    $mysqli = new MySQLi($host, $user, $password, $database);
    $sql = "SELECT *
            FROM meal
            WHERE clientUsername = '$userName'";
    $result = $mysqli ->query($sql);
    if($result != null) {
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($rows as $row) {
            ?>
            <div class="col-10 mx auto col-md-6 col-lg-4 my-4">
                <div class="card">
                    <img class="img-card-top recipe-img" alt="<?php echo $row['meal_Name'] ?>"
                         src="<?php echo $row['meal_ImageURL'] ?>"/>
                    <div class="card-body text-capitalize">
                        <h6><?php echo $row['meal_Name'] ?></h6>
                    </div>
                    <h6 class="text-warning">provided by <a href="<?php echo $row['meal_SourceLink'] ?>"
                                                            class="source-link"
                                                            target="_blank"
                                                            rel="noopener noreferrer"><?php echo $row['meal_Source'] ?></a>
                    </h6>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" onclick="submit()">View</button>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    else{
        echo "No meals found!";
    }
    $mysqli->close();
}
else{
    echo "ERROR - #214 - ACCOUNT NOT FOUND //LOGIN NEEDED";
}
?>