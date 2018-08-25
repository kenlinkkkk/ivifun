<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 08/19/2018
 * Time: 02:36 PM
 */
    $user = "root";
    $pass = "";
    $host = "localhost";
    $dbname = "imemes";

    $cnt = mysqli_connect($host, $user, $pass, $dbname);
    mysqli_query($cnt, "SET NAME 'UTF-8'");
?>