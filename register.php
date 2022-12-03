<?php session_start() ?>


<?php

require_once("./database.php");

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $isSuccess = Database::getInstance()->exec("INSERT INTO `user`(`username`, `password`, `cart`) VALUES ('$username','$password','[]')");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <base href="/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">





    <title>Đăng ký</title>
</head>

<body>

    <?php
    if (isset($isSuccess) && $isSuccess) {
        echo "<script>alert('Đăng ký thành công !'); location.href = 'login.php'</script>";
    }
    ?>



    <?php require_once("./partials/navbar.php") ?>


    <div class="container app" style="max-width: 500px; padding: 3rem">




        <h1>Đăng ký tài khoản</h1>
        <form action="/register.php" method="post">



            <div class="input-group mb-3">
                <span class="input-group-text">Tên tài khoản</span>
                <input type="text" class="form-control" placeholder="Tên tài khoản" aria-label="Username" aria-describedby="basic-addon1" name="username" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Mật khẩu</span>
                <input type="password" class="form-control" placeholder="Mật khẩu" aria-label="Username" aria-describedby="basic-addon1" name="password" required>
            </div>


            <div class="d-flex">
                <button style="margin: 0 auto" type="submit" class="btn btn-primary">Đăng ký</button>
                <span>hoặc</span>
                <a href="/login.php" style="margin: 0 auto" type="submit" class="btn btn-warning">Đăng nhập</a>
            </div>
        </form>




    </div>







    <?php require_once("./partials/footer.php") ?>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>