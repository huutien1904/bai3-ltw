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
            <form action="/action_page.php" class="form_login">
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