<?php
    include 'navbar.php';
    require_once 'confix.php';
    $selected_username=$_GET['username'];
    $sql="SELECT * FROM member WHERE username='$selected_username'";
    $result=$con->query($sql);
    $row=mysqli_fetch_array($result);

    if(isset($_POST['submit'])){
        $password=$_POST['password'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $position=$_POST['position'];
        $update="UPDATE member SET password='$password',name='$name',email='$email',position='$position' WHERE username='$selected_username'";
        $result=$con->query($update);
        if(!$result){
            echo "<script>
            alert('แก้ไขข้อมูลไม่สำเร็จ');
            window.history.back();
            </script>";
        }else{
            echo "<script>window.location.href='show_member.php'</script>";
        }
    }
   ?> 
 <div class="container mt-5 w-25">
   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
   <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4">username</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="username" readonly value="<?php echo $row['username']?>">
                </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4">password</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="password" required  value="<?php echo $row['password']?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4">ชื่อ-นามสกุล</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="name" required  value="<?php echo $row['name']?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4">Email</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" name="email" required value="<?php echo $row['email']?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4">ตำแหน่ง</label>
            <div class="col-sm-8">
               <select name="position" class="form-control" value="<?php echo $row['position']?>">
                   <option value="<?php echo $row['position']?>"><?php echo $row['position']?></option>
                   <option value="admin">admin</option>
                   <option value="mod">moderator</option>
                   <option value="user">user</option>
</select>
</div>
</div>
        <div class="mb-3 row">
            <label for="" class="col-form-label col-sm-4"></label>
            <div class="col-sm-8">
                <input type="submit" class="btn btn-primary" name="submit" value="แก้ไขข้อมูล">
            </div>
        </div>
</form>   
</div>