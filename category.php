<?php include('./products.php') ?>
<?php session_start() ?>
<?php


$cate_list_product = [];

foreach ($products as $prod) {
    if ($prod['cate_id'] == $_GET['cate_id']) {
        $cate_list_product = $prod;
    }
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



    <title>
        <?= $cate_list_product['cate_name'] ?>
    </title>
</head>


<body>


    <?php require_once("./partials/navbar.php") ?>



    <div class="container app">


        <div class="list-products pt-3 pb-3">
            <h2>
                <?= $cate_list_product['cate_name'] ?>
            </h2>
            <div class="row">

                <?php foreach ($cate_list_product['list_products'] as $item_product) : ?>
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

                <?php endforeach ?>
            </div>
        </div>




    </div>






    <?php require_once("./partials/footer.php") ?>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>