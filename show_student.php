<?php 
    require_once 'config.php';
    $sql="SELECT * FROM student";
    $result=$con->query($sql);
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
    <div class="container">
        <table class="table table-striped">
            <tr class="bg-primary text-white">
                <tr>ลำดับที่</tr>
                <tr>รหัสประจำตัว</tr>
                <tr>ชื่อ-นามสกลุ</tr>
                <tr>เบอร์โทรศัพท์</tr>
                <tr>อีเมล</tr>
            </tr>
            <tr>
                <?php
                    $row=mysqli_connect_fetch_array($result);
                ?>
            </tr>
        </table>
    </div>
</body>
</html>