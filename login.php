<?php
    if(isset($_POST['submit'])){
        require_once 'config.php';
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="SELECT * FROM member WHERE username='$username' and password='$password'";
        $result=$con->query($sql);
        $num=mysqli_num_rows($result);
        $row=mysqli_fetch_array($result);
        if($num==1){
            session_start();
            $_SESSION['username']=$row['username'];
            $_SESSION['name']=$row['name'];
            $_SESSION['position']=$row['position'];
           header('location:index.php');
        }else{
            echo "<script>alert('username หรือ password ไม่ถูกต้อง')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div class="container w-25" style="margin-top:200px">
  <div class="card">
      <div class="card-header bg-success text-white">เข้าสู่ระบบ</div>
      <div class="card-body">
          <form action="<?php $_SERVER ['PHP_SELF']?>" method="POST">
        <div class="input-group flex-nowrap my-4">
            <span class="input-group-text" id="addon-wrapping">
                <i class="material-icons">person</i>
            </span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" 
            name="username"aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap mb-4" >
            <span class="input-group-text" id="addon-wrapping"> 
                <i class="material-icons">lock</i>
            </span>
            <input type="password" class="form-control" placeholder="password" aria-label="password" 
            name="password" aria-describedby="addon-wrapping">
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-outline-primary" name="submit">LOGIN</button>
             </div>
             <form>
        </div>
    </div> 
</div>

</body>
</html>