<?php
    $con=mysqli_connect('localhost','root','','mysite');
    if($con){
        echo "สามารเชื่อมต่อกับ Database ได้";
    }else{
        echo "ไม่สามารถเชื่อม Database ได้";
    }
?>