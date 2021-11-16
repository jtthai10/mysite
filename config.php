<?php
    //mainhost
    $host="localhost";
    $user="planetco_64309010034";
    $password="64309010034";
    $dbname="planetco_64309010034";

/*
    //testhost
    $host="localhost";
    $user="root";
    $password="";
    $dbname="mysite";
*/


    $con=mysqli_connect($host,$user,$password,$dbname);
    $con->query("SET NAMES UTF8");
    if($con){
        echo "สามารเชื่อมต่อกับ Database ได้";
    }else{
        echo "ไม่สามารถเชื่อม Database ได้";
    }
?>