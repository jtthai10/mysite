<?php
        include 'navbar.php';
        require_once 'config.php';
        $std_id=$_GET['std_id'];
        $sql="SELECT * FROM student WHERE std_id='$std_id' ";
        $result=$con->query($sql);
        $row=mysqli_fetch_array($result);

        if(isset($_POST['submit'])){
            $std_name=$_POST['std_name'];
            $std_tel=$_POST['std_tel'];
            $std_email=$_POST['std_email'];
            $upd_std="UPDATE student SET std_name='$std_name',std_tel='$std_tel',std_email='$std_email' WHERE std_id='$std_id'";
            $result=$con->query($upd_std);
            if(!$result){
                echo "<script>
                    alert('แก้ไขข้อมูลไม่สำเร็จ กรุณาตรวจสอบข้อผิดพลาด')
                    window.history.back();
                </script>";
            }else{
                echo "<script>window.location.href='show_student.php'</script>";
                }      
        }
?>


<div class="container mt-5 w-25">
   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="mb-3 row">
            <label for="" class="form_label">ชื่อ-นามสกลุ</label>
                <input type="text" class="form-control" name="std_name" placeholder="ชื่อ-นามสกุล" value="<?php echo $row['std_name']?>">
        </div>
        <div class="mb-3 row">
            <label for="" class="form_label">เบอร์โทรศัพท์</label>
                <input type="text" class="form-control" name="std_tel" placeholder="เบอร์โทรศัพท์" value="<?php echo $row['std_tel']?>">
        </div>
        <div class="mb-3 row">
            <label for="" class="form_label">อีเมล</label>
                <input type="text" class="form-control" name="std_email" placeholder="อีเมล" value="<?php echo $row['std_email']?>">
        <div class="mb-3 row">
            <label for="" class="form_label"></label>
                <input type="submit" class="btn btn-primary" name="submit" value="แก้ไขข้อมูล">
        </div>
</form>   
</div> 