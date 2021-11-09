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
                <th>ลำดับที่</th>
                <th>รหัสประจำตัว</th>
                <th>ชื่อ-นามสกลุ</th>
                <th>เบอร์โทรศัพท์</th>
                <th>อีเมล</th>
            </tr>
            <tr>
                <?php
                    $i=1;
                    while($row=mysqli_fetch_array($result)){  
                ?>
            </tr>
            <tr>
                <td><?php echo$i; ?></td>
                <td><?php echo $row['std_id']?></td>
                <td><?php echo $row['std_name']?></td>
                <td><?php echo $row['std_tel']?></td>
                <td><?php echo $row['std_email']?></td>
            </tr>
            <?php
                $i++;
            }
         ?>
        </table>
    </div>
</body>
</html>