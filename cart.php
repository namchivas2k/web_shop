<?php session_start() ?>
<?php require_once("./database.php"); ?>
<?php include('./products.php') ?>



<?php


if (!isset($_SESSION['isLogin']) | !$_SESSION['isLogin']) {
    header("location: /login.php");
    return;
}

$username = $_SESSION['username'];

$action = isset($_GET['action']) ? $_GET['action'] : "";


switch ($action) {
    case "add":
        Database::getInstance()->fetchObject("SELECT * FROM `user` WHERE `username`= '$username' LIMIT 1", function ($data) use ($username) {
            $product_id = $_GET['product_id'];
            $data = $data[0];
            $cart = json_decode($data->cart);
            array_push($cart, $product_id);
            $cart = json_encode($cart);
            Database::getInstance()->exec("UPDATE `user` SET`cart`='$cart' WHERE `username`= '$username'");
        });
        break;


    case "del":
        Database::getInstance()->fetchObject("SELECT * FROM `user` WHERE `username`= '$username' LIMIT 1", function ($data) use ($username) {
            $product_id = $_GET['product_id'];
            $data = $data[0];
            $cart = json_decode($data->cart);

            $tmpCart = [];
            foreach ($cart as $item) {
                if ($item != $product_id) {
                    array_push($tmpCart, $product_id);
                }
            }
            $tmpCart = json_encode($tmpCart);
            Database::getInstance()->exec("UPDATE `user` SET`cart`='$tmpCart' WHERE `username`= '$username'");
        });
        break;


    default:
        break;
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





    <title>Giỏ hàng</title>
</head>

<body>


    <?php require_once("./partials/navbar.php") ?>


    <div class="container app" style="padding: 3rem">


        <h1>Giỏ hàng</h1>

        <ul class="list-group">



            <?php
            require_once("./products.php");
            //get all cart product

            $result = [];
            $data = Database::getInstance()->exec("SELECT * FROM `user` WHERE `username`= '$username' LIMIT 1");
            if (Database::getInstance()->num_rows($data) > 0) {
                while ($row = $data->fetch_object()) {
                    array_push($result, $row);
                }
            }

            $data = $result[0];

            $data->cart = json_decode($data->cart);

            if (count($data->cart) <= 0) {
                echo ("Giỏ hàng trống");
            } else {

                //Caculate count of product
                $tmpListProduct = [];
                $totalPrice = 0;

                foreach ($data->cart as $idProduct) {
                    $count = $tmpListProduct[$idProduct]['count'] ?? 1;
                    foreach ($tmpListProduct as $tmp) {
                        if (isset($tmp['id']) && $tmp['id'] == $idProduct) {

                            $count++;
                        }
                    }
                    $tmpListProduct[$idProduct] = [
                        'id' => $idProduct,
                        'count' => $count
                    ];
                }


                //Render
                foreach ($tmpListProduct as $tmp) {

                    foreach ($products as $itemProds) {
                        foreach ($itemProds['list_products'] as $itemProd) {

                            if ($itemProd['id'] == $tmp['id']) {


                                $totalPrice += $itemProd['price'] * $tmp['count'];

                                echo ('
                                        <li class="list-group-item d-flex">
                                            <img width="200" height="200" src="' . $itemProd['image'] . '" alt="">
                                            <div class="ms-3">
                                                <h3>' . $itemProd['name'] . '</h3>
                                                 <p>Giá:<b>' . formatVND($itemProd['price']) . '</b></p>
                                                <p>Số lượng:<b>' . $tmp['count'] . '</b></p>
                                                <button type="button" class="btn btn-danger btn-sm">
                                                    <a class="text-white" href="/cart.php?action=del&product_id=' . $itemProd['id'] . '">Xoá</a>
                                                </button>
                                             </div>
                                        </li>
                                    ');
                            }
                        }
                    }
                }


                echo ("<div  >Tổng cộng: <span class='text-danger fw-bold fs-3'>" . formatVND($totalPrice) . "</span></div>");

                echo ('<button type="button" class="btn btn-success">Tiến hành đặt hàng</button>');
            }
            ?>

        </ul>

    </div>



    <?php require_once("./partials/footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>