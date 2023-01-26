<?php 
    $host="localhost";
    $port=3306;
    $user="root";
    $password="1223334444";
    $dbname="ponsca";
    $errors=array();

    $conn = new mysqli($host, $user, $password, $dbname, $port)
        or die ('Could not connect to the database server' . mysqli_connect_error());

    mysqli_select_db($conn,$dbname)
        or die ("Could not find the database");

    mysqli_set_charset($conn,"utf8");
?>