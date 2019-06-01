<?php
    $ipdb1 = "localhost";
    $userdb1="root";
    $pswdb1="";
    $dbname1="web_resep";
    $connection = mysqli_connect($ipdb1,$userdb1,$pswdb1);
    if(!$connection){
        die("Database Connection Failed");
    }
    $select_db = mysqli_select_db($connection,$dbname1);
    if(!$select_db){
        die("Database selection failed !".mysqli_error($connection));
    }
?>
