<?php
require_once 'global.php';
require_once 'dao_pdo/sp_pdo.php';
require_once 'dao_pdo/tag_pdo.php';
// $ma_sp = $_GET['ma_sp'];
// $tag_id = 'CL';
// $tag_id2 = 'SZ';
// $a = sp_selectone($ma_sp);
// $b = tag_select($ma_sp,$tag_id);
// $d = tag_select($ma_sp,$tag_id2);

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php?act=home"><i class="fa fa-home"></i> Home</a>
                        <span>Product Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <hr>
    </section>
    <div>
        <section class="product-details spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product__details__pic">

                            <div class="product__details__slider__content">
                                <div class="product__details__pic__slider owl-carousel">
                                    <img data-hash="product-1" class="product__big__img" src="upload/<?= $a['img'] ?>"
                                        alt="">
                                    <img data-hash="product-2" class="product__big__img" src="upload/<?= $a['img'] ?>"
                                        alt="">
                                    <img data-hash="product-3" class="product__big__img" src="upload/<?= $a['img'] ?>"
                                        alt="">
                                    <img data-hash="product-4" class="product__big__img" src="upload/<?= $a['img'] ?>"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product__details__text">
                            <h3>
                                <?= $a['ten_sp'] ?><span>Brand: SKMEIMore Men Watches from SKMEI</span>
                            </h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span>( 138 reviews )</span>
                            </div>
                            <div class="product__details__price">
                                <?= $a['gia_sp'] ?> <span>$ 83.0</span>
                            </div>
                            <p>Nemo enim ipsam voluptatem quia aspernatur aut odit aut loret fugit, sed quia
                                consequuntur
                                magni lores eos qui ratione voluptatem sequi nesciunt.</p>
                            <form action="index.php?act=addcart" method="post">
                                <div class="product__details__button">
                                    <div class="quantity">
                                        <span>Quantity:</span>
                                        <div class="pro-qty">
                                            <input type="number" value="1" min=1 max=50 name="sl">
                                        </div>
                                        <input type="hidden" name="ten_sp" value="<?= $a['ten_sp'] ?>">
                                        <input type="hidden" name="gia_sp" value="<?= $a['gia_sp'] ?>">
                                        <input type="hidden" name="img" value="<?= $a['img'] ?>">
                                    </div>
                                    <input type="submit" value="Add to cart" name="addtocart">
                                </div>
                            </form>
                            <div class="product__details__widget">
                                <ul>
                                    <li>
                                        <span>Availability:</span>
                                        <div class="stock__checkbox">
                                            <label for="stockin">
                                                In Stock
                                                <input type="checkbox" id="stockin">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <span>Available Color:</span>
                                        <div class="color__checkbox">
                                            <label for="<?= $b['tag_value'] ?>">
                                                <?= $b['tag_value'] ?>
                                            </label>

                                        </div>
                                    </li>
                                    <li>
                                        <span>Available Size:</span>
                                        <div class="size__btn">
                                            <label for="<?= $b['tag_value'] ?>">
                                                <?= $d['tag_value'] ?>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <span>Promotions:</span>
                                        <p>Free shipping</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mx-5">
                    <h5 class="text-center"> PRODUCTS' COMMENTS</h5>
                    <div>
                        <?php foreach ($cmt as $cm){ ?>
                        <div class="media border p-3">

                            <div class="media-body">
                                <h4>
                                    <?= $cm['cmter'] ?> <small><i> on
                                            <?= $cm['cmt_date'] ?>
                                        </i></small>
                                </h4>
                                <p>
                                    <?= $cm['cmt_content'] ?>
                                </p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="related__title">
                            <h5>RELATED PRODUCTS</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/related/rp-1.jpg">
                                <div class="label new">New</div>
                                <ul class="product__hover">
                                    <li><a href="img/product/related/rp-1.jpg" class="image-popup"><span
                                                class="arrow_expand"></span></a></li>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Buttons tweed blazer</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/related/rp-2.jpg">
                                <ul class="product__hover">
                                    <li><a href="img/product/related/rp-2.jpg" class="image-popup"><span
                                                class="arrow_expand"></span></a></li>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Flowy striped skirt</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 49.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/related/rp-3.jpg">
                                <div class="label stockout">out of stock</div>
                                <ul class="product__hover">
                                    <li><a href="img/product/related/rp-3.jpg" class="image-popup"><span
                                                class="arrow_expand"></span></a></li>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Cotton T-Shirt</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/related/rp-4.jpg">
                                <ul class="product__hover">
                                    <li><a href="img/product/related/rp-4.jpg" class="image-popup"><span
                                                class="arrow_expand"></span></a></li>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Slim striped pocket shirt</a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>