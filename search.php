<?php include('./products.php') ?>
<?php session_start() ?>
<?php


function formatText($text = "")
{
    $unicode_vn = array("à", "á", "ạ", "ả", "ã", "â", "ầ", "ấ", "ậ", "ẩ", "ẫ", "ă", "ằ", "ắ", "ặ", "ẳ", "ẵ", "è", "é", "ẹ", "ẻ", "ẽ", "ê", "ề", "ế", "ệ", "ể", "ễ", "ì", "í", "ị", "ỉ", "ĩ", "ò", "ó", "ọ", "ỏ", "õ", "ô", "ồ", "ố", "ộ", "ổ", "ỗ", "ơ", "ờ", "ớ", "ợ", "ở", "ỡ", "ù", "ú", "ụ", "ủ", "ũ", "ư", "ừ", "ứ", "ự", "ử", "ữ", "ỳ", "ý", "ỵ", "ỷ", "ỹ", "đ", "À", "Á", "Ạ", "Ả", "Ã", "Â", "Ầ", "Ấ", "Ậ", "Ẩ", "Ẫ", "Ă", "Ằ", "Ắ", "Ặ", "Ẳ", "Ẵ", "È", "É", "Ẹ", "Ẻ", "Ẽ", "Ê", "Ề", "Ế", "Ệ", "Ể", "Ễ", "Ì", "Í", "Ị", "Ỉ", "Ĩ", "Ò", "Ó", "Ọ", "Ỏ", "Õ", "Ô", "Ồ", "Ố", "Ộ", "Ổ", "Ỗ", "Ơ", "Ờ", "Ớ", "Ợ", "Ở", "Ỡ", "Ù", "Ú", "Ụ", "Ủ", "Ũ", "Ư", "Ừ", "Ứ", "Ự", "Ử", "Ữ", "Ỳ", "Ý", "Ỵ", "Ỷ", "Ỹ", "Đ");
    $unicode_vn_latin = array("a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "i", "i", "i", "i", "i", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "y", "y", "y", "y", "y", "d", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "i", "i", "i", "i", "i", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "y", "y", "y", "y", "y", "d");
    $text = str_replace($unicode_vn, $unicode_vn_latin, $text);
    $text = strtolower($text);
    $text = preg_replace("/[^a-z0-9]/", "-", $text);
    $text = preg_replace("/-{2,}/", "-", $text);
    $text = preg_replace("/-/", "(.*)", $text);
    return trim($text, "-");
}

$originTextSearch = isset($_GET['q']) ? $_GET['q'] : "";
$searchText = formatText($originTextSearch);



$list_product = [];

foreach ($products as $prod) {
    foreach ($prod['list_products'] as $itemProd) {
        if (preg_match('/(.*)' . $searchText . '(.*)/i', formatText($itemProd['name']))) {
            array_push($list_product, $itemProd);
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


    <base href="/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">



    <title>
        Tìm kiếm: <?= $originTextSearch ?>
    </title>
</head>


<body>


    <?php require_once("./partials/navbar.php") ?>



    <div class="container app">


        <div class="list-products pt-3 pb-3">
            <h2>
                Tìm kiếm: <?= $originTextSearch ?>
            </h2>

            <?php if (count($list_product) <= 0) : ?>
                <p>Không tìm thấy kết quả nào</p>
            <?php else : ?>
                <div class="row">
                    <?php foreach ($list_product as $item_product) : ?>
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
            <?php endif ?>
        </div>




    </div>






    <?php require_once("./partials/footer.php") ?>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>