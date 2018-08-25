<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 08/19/2018
 * Time: 03:42 PM
 */
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dnname = "ivifun";

    $cnt = mysqli_connect($host, $user, $pass, $dnname) or die("không thể kết nối db");
    mysqli_query($cnt, "SET NAME 'UTF-8");
?>