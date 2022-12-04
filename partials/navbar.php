<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="/">Thế giới mua sắm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/">Trang chủ</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Danh mục sản phẩm
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php foreach ($category as $iCate) : ?>
                            <li>
                                <a class="dropdown-item" href="/category.php?cate_id=<?= $iCate['id'] ?>">
                                    <?= $iCate['name'] ?>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hỗ trợ
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown-2">

                        <li>
                            <a class="dropdown-item" href="https://zalo.me/0969917720">
                                Zalo
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="https://www.facebook.com/haothuyhien.CO">
                                Facebook
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>

            <form class="d-flex me-3" method="get" action="/search.php">
                <input name="q" class="form-control me-2" type="search" placeholder="Tìm kiếm..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Tìm</button>
            </form>




            <?php if (isset($_SESSION['isLogin'])) : ?>
                <div class="btn-group">
                    <button style="min-width: 150px;" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                        <?= $_SESSION['username'] ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                        <li><a class="dropdown-item" href="/cart.php">Giỏ hàng</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/logout.php">Đăng xuất</a></li>
                    </ul>
                </div>

            <?php else : ?>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-primary"><a href="/register.php">Đăng ký</a></button>
                    <button type="button" class="btn btn-outline-primary"><a href="/login.php">Đăng nhập</a></button>
                </div>

            <?php endif ?>

        </div>
    </div>
</nav>