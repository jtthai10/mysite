<?php
//add_member.php
include 'navbar.php';
if (isset($_POST['submit'])){
require_once 'config.php';
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$email=$_POST['email'];
$position=$_POST['position'];
$sql="INSERT INTO member VALUES('$username','$password','$name','$email','$position')";
$con->query($sql);
if(!$con){
    echo "<script>alert('ไม่สามารถเพิ่มข้อมูลได้')</script>";
}else{
    echo "<script>
        alert('เพิ่มข้อมูลสำเร็จ')
        window.location.href='show_member.php';
        </script>";
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
            <label for="" class="col-form-label col-sm-4">username</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="username" required placeholder="ระบุ username">
                </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4">password</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="password" required placeholder="ระบุ password">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4">ชื่อ-นามสกุล</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="name" required placeholder="ระบุ ชื่อ-นามสกุล">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4">Email</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" name="email" required placeholder="ระบุ Email">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4">ตำแหน่ง</label>
            <div class="col-sm-8">
               <select name="position" class="form-control">
                   <option value="0">กรุณาเลือก</option>
                   <option value="admin">admin</option>
                   <option value="mod">moderator</option>
                   <option value="user">user</option>
</select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4"></label>
            <div class="col-sm-8">
                <input type="submit" class="btn btn-primary" name="submit" value="เพิ่มข้อมูล">
            </div>
        </div>
</form>   
</div> 
</body>
</html>