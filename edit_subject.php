<?php
        include 'navbar.php';
        require_once 'config.php';
        $sub_id=$_GET['sub_id'];
        $sql="SELECT * FROM subject WHERE sub_id='$sub_id' ";
        $result=$con->query($sql);
        $row=mysqli_fetch_array($result);

        if(isset($_POST['submit'])){
            $sub_id=$_POST['sub_id'];
            $sub_name=$_POST['sub_name'];
            $t_hour=$_POST['t_hour'];
            $p_hour=$_POST['p_hour'];
            $credit=$_POST['credit'];
            $teacher=$_POST['teacher'];
            $upd_sub="UPDATE subject SET sub_id='$sub_id',sub_name='$sub_name',t_hour='$t_hour',p_hour='$p_hour',credit='$credit',teacher='$teacher' WHERE sub_id='$sub_id'";
            $result=$con->query($upd_sub);
            if(!$result){
                echo "<script>
                    alert('แก้ไขข้อมูลไม่สำเร็จ กรุณาตรวจสอบข้อผิดพลาด')
                    window.history.back();
                </script>";
            }else{
                echo "<script>window.location.href='show_subject.php'</script>";
                }      
        }
?>


<div class="container mt-5 w-25">
   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="mb-3 row">
            <label for="" class="form_label">รหัสวิชา</label>
                <input type="text" class="form-control" name="sub_id" placeholder="รหัสวิชา" value="<?php echo $row['sub_id']?>">
        </div>
        <div class="mb-3 row">
            <label for="" class="form_label">ชื่อวิชา</label>
                <input type="text" class="form-control" name="sub_name" placeholder="ชื่อวิชา" value="<?php echo $row['sub_name']?>">
        </div>
        <div class="mb-3 row">
            <label for="" class="form_label">ชม.ทฤษฎี</label>
                <input type="text" class="form-control" name="t_hour" placeholder="ชัวโมงทฤษฏี" value="<?php echo $row['t_hour']?>">
        </div>
        <div class="mb-3 row">
            <label for="" class="form_label">ชม.ปฏิบัติ</label>
                <input type="text" class="form-control" name="p_hour" placeholder="ชัวโมงปฏิบัติ" value="<?php echo $row['p_hour']?>">
        </div>
        <div class="mb-3 row">
            <label for="" class="form_label">หน่วยกิต</label>
                <input type="text" class="form-control" name="credit" placeholder="หน่วยกิต" value="<?php echo $row['credit']?>">
        </div>
        <div class="mb-3 row">
            <label for="" class="form_label">ชื่อครูผู้สอน</label>
                <input type="text" class="form-control" name="teacher" placeholder="ชื่อครูผู้สอน" value="<?php echo $row['teacher']?>">
        </div>
        <div class="mb-3 row">
            <label for="" class="form_label"></label>
                <input type="submit" class="btn btn-primary" name="submit" value="เพิ่มข้อมูล">
        </div>
</form>   
</div> 