<?php include('./products.php') ?>
<?php session_start() ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <base href="/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">



    <title>Thế giớ thời trang </title>
</head>


<body>


    <?php require_once("./partials/navbar.php") ?>



    <div class="container app">


        <!-- Slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://img.ltwebstatic.com/images3_acp/2022/11/05/1667648487ec71aef3c33605e14313b6ff78e42754.jpg" class="d-block w-100" alt="AAAAAAAAAAAAa">
                </div>
                <div class="carousel-item  ">
                    <img src="https://img.ltwebstatic.com/images3_acp/2022/11/05/1667648487ec71aef3c33605e14313b6ff78e42754.jpg" class="d-block w-100" alt="AAAAAAAAAAAAa">
                </div>
                <div class="carousel-item  ">
                    <img src="https://img.ltwebstatic.com/images3_acp/2022/11/05/1667648487ec71aef3c33605e14313b6ff78e42754.jpg" class="d-block w-100" alt="AAAAAAAAAAAAa">
                </div>
                <div class="carousel-item  ">
                    <img src="https://img.ltwebstatic.com/images3_acp/2022/11/05/1667648487ec71aef3c33605e14313b6ff78e42754.jpg" class="d-block w-100" alt="AAAAAAAAAAAAa">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>




        <?php foreach ($products as $key => $product) : ?>

            <div class="list-products pt-3 pb-3">
                <h2>
                    <?= $product['cate_name'] ?>
                </h2>
                <div class="row">

                    <?php foreach ($product['list_products'] as $item_product) : ?>
                        <a class="col mb-3" href="/detail.php?product_id=<?= $item_product['id'] ?>">
                            <div class="card item-product-card" style="width: fit-content;">
                                <img src=" <?= $item_product['image'] ?>" class="card-img-top item-image-product" alt="...">
                                <div class="card-body" style="padding: 8px">
                                    <h5 class="card-title card-product-name">
                                        <?= $item_product['name'] ?>
                                    </h5>
                                    <p class="product-price">
                                        <?= formatVND($item_product['price']) ?>đ
                                    </p>
                                </div>
                            </div>
                        </a>

                    <?php endforeach ?>
                </div>
            </div>

        <?php endforeach; ?>



    </div>






    <?php require_once("./partials/footer.php") ?>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>