<?php
//add_student.php
include 'navbar.php';
if (isset($_POST['submit'])){
require_once 'confix.php';
$sub_id=$_POST['sub_id'];
$sub_name=$_POST['sub_name'];
$t_hour=$_POST['t_hour'];
$p_hour=$_POST['p_hour'];
$credit=$_POST['credit'];
$teacher=$_POST['teacher'];
if($sub_id==''|| $sub_name==''|| $t_hour==''||$p_hour==''||$credit==''|| $teacher==''){
    echo "<script>alert('คุณยังไม่กรอกข้อมูล')</script>";
}else{
$sql="INSERT INTO subject VALUES('$sub_id','$sub_name','$t_hour','$p_hour','$credit','$teacher')";
$con->query($sql);
if(!$con){
    echo "<script>alert('ไม่สามารถเพิ่มข้อมูลได้')</script>";
}else{
    echo "<script>alert('เพิ่มข้อมูลสำเร็จ')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <div class="container mt-5 w-25">
   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="mb-3 row">
            <label for="" class="form_label">รหัสวิชา</label>
                <input type="text" class="form-control" name="sub_id" placeholder="sub_id">
        </div>
        <div class="mb-3 row">
            <label for="" class="form_label">ชื่อวิชา</label>
                <input type="text" class="form-control" name="sub_name" placeholder="sub_name">
        </div>
        <div class="mb-3 row">
            <label for="" class="form_label">ชม.ทฤษฎี</label>
                <input type="text" class="form-control" name="t_hour" placeholder="t_hour">
        </div>
        <div class="mb-3 row">
            <label for="" class="form_label">ชม.ปฏิบัติ</label>
                <input type="text" class="form-control" name="p_hour" placeholder="p_hour">
        </div>
        <div class="mb-3 row">
            <label for="" class="form_label">หน่วยกิต</label>
                <input type="text" class="form-control" name="credit" placeholder="credit">
        </div>
        <div class="mb-3 row">
            <label for="" class="form_label">ชื่อครูผู้สอน</label>
                <input type="text" class="form-control" name="teacher" placeholder="teacher">
        </div>
        <div class="mb-3 row">
            <label for="" class="form_label"></label>
                <input type="submit" class="btn btn-primary" name="submit" value="เพิ่มข้อมูล">
        </div>
</form>   
</div> 
</body>
</html>