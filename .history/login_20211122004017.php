<?php
    if(!empty($_POST)){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
    }
    if(isset($_POST['username']) && isset($_POST['password'])){
        // tao ket noi
        $connect = new mysqli("localhost","root","","bai3");    
        // them duoc tieng viet
        // mysqli_set_charset('utf8', $connect);
        mysqli_set_charset($connect,"utf8");
        // check loi
        if ($connect->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $query = "SELECT * FROM  admin WHERE username = '".$username."' AND password='".$password."'";
        $result = mysqli_query($connect,$query);
        $data = array();
        while($row = mysqli_fetch_array($result,1)){
            $data = $row;
        }
        if($data != null && count($data) > 0){
            header("Location: index.php");
        }
        // close connect
        $connect->close();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./style_login.css">
    <title>Login Quản lý khách hàng</title>
</head>
<body>
    <div class="container  d-flex justify-content-center align-items-center" style="height:100vh;">
        <div class="col-md-6">
            <form  class="form_login" method="post">
                <div class="form-group">
                    <label for="email">UserName:</label>
                    <input type="text" class="form-control" placeholder="Enter email" id="email" name="username">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
                </div>
                <div class="button">
                    <button type="submit" class="btn btn-primary">Đăng Nhập</button>
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>
<style>
    .form_login{
        padding: 20px !important;
        background: var(--secondary) !important;
        border-radius: 14px;
    }
    .button{
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
    }
  </style>