<?php session_start() ?>

<?php include('./products.php') ?>
<?php

$product_id = $_GET['product_id'];


$categoryList = [];
$product = [];

//Get product of list fake products
foreach ($products as $pd) {
    foreach ($pd['list_products'] as $iPD) {
        if ($iPD['id'] == $product_id) {
            $categoryList = $pd;
            $product = $iPD;
            break;
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title>
        <?= $product['name'] ?>
    </title>
</head>

<body>
    <?php require_once("./partials/navbar.php") ?>




    <div class="container app mt-3">


        <div class="row">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <img width="420" src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                    </div>
                </div>
            </div>
            <div class="col">
                <h1>
                    <?= $product['name'] ?>
                </h1>

                <h3 style="color: red; font-weight: bold;">
                    <?= formatVND($product['price']) ?>
                </h3>


                <ul class="list-group mt-3 mb-3">

                    <li class="list-group-item">
                        <b>Kho: </b>
                        <?= $product['stock'] ?>
                    </li>

                    <?php foreach ($product['detail'] as $detail) : ?>

                        <li class="list-group-item">
                            <b>
                                <?= $detail['key'] ?>:
                            </b>
                            <?= $detail['value'] ?>
                        </li>


                    <?php endforeach ?>
                </ul>


                <button class="btn btn-success">
                    <a class="text-white" href="/cart.php?action=add&product_id=<?= $product_id ?>">
                        Thêm vào giỏ hàng
                    </a>
                </button>
            </div>

        </div>





        <h3 class="mt-3">Sản phẩm tương tự:</h3>

        <div class="row">

            <?php foreach ($categoryList['list_products'] as $index => $item_product) : ?>

                <?php if ($index <= 4) : ?>
                    <a class="col mb-3" href="/detail.php?product_id=<?= $item_product['id'] ?>">
                        <!-- <div class="col mb-3"> -->
                        <div class="card item-product-card" style="width: fit-content;">
                            <img src=" <?= $item_product['image'] ?>" class="card-img-top item-image-product" alt="...">
                            <div class="card-body" style="padding: 8px">
                                <h5 class="card-title">
                                    <?= $item_product['name'] ?>
                                </h5>
                                <p class="product-price">
                                    <?= formatVND($item_product['price']) ?>đ
                                </p>
                            </div>
                            <!-- </div> -->
                        </div>
                    </a>

                <?php endif ?>

            <?php endforeach ?>
        </div>

    </div>




    <?php require_once("./partials/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>

</html>