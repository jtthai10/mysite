<?php
    require_once 'config.php';
    $std_id=$_GET['std_id'];
    $sql="DELETE FROM student WHERE std_id='$std_id'";
    $result=$con->query($sql);
    if(!$result){
        echo "<script>alert('ลบข้อมูลไม่สำเร็จกรุณาตรวจสอบ')</script>";
    }else
        echo "<script>window.location.href='show_student.php'</script>";
?>