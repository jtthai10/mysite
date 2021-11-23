<?php
    include 'navbar.php';
    require_once 'config.php';
    $sql="SELECT * FROM member";
    $result=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบบริหารจัดการสมาชิก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="add_member.php" class="btn btn-primary">+เพิ่มข้อมูลสมาชิก</a><br></br>
        <table class="table table-striped">
            <tr class ="bg-primary">
                <th class="text-white">ลำดับที่</th>
                <th class="text-white">Username</th>
                <th class="text-white">ชื่อ-นามสกุล</th>
                <th class="text-white">E-mail</th>
                <th class="text-white">ตำแหน่ง</th>
                <th class="text-white">การจัดการ</th>
            </tr>
                <?php
                $i=1;
                    while($row=mysqli_fetch_array($result)){
                ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['position']?></td>
                <td>
                    <a href="edit_member.php?username=<?php echo $row['username'] ?>" class="btn btn-success">แก้ไข</a>
                    <a href="del_member.php?username=<?php echo $row['username'] ?>" class="btn btn-danger" onclick="return confirm('แน่ใจหรือไม่ที่จะลบข้อมูล?')">ลบ</a>
                </td>
            </tr>
            <?php 
                $i++;
                }
        ?>
        </table>
</div>
</body>
</html>