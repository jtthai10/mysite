<?php
    require_once 'config.php';
    $selected_username=$_GET['username'];
    $sql="DELETE FROM member WHERE username='$selected_username'";
    $result=$con->query($sql);
    if(!$result){
        echo "<script>alert('ลบข้อมูลไม่สำเร็จ')</script>";
    }else{
        echo "<script>window.location.href='show_member.php'</script>";
    }
?>