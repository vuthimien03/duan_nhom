<?php

$offset = 0;
$a = sp_offset($offset);
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
   <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href=".../css/style.css" type="text/css">
</head>

<body>
    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg"
                        data-setbg="../img/categories/category-1.jpg">
                        <div class="categories__text">
                            <h1>Women’s fashion</h1>
                            <p>Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt labore
                                edolore magna aliquapendisse ultrices gravida.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="../img/categories/category-2.jpg">
                                <div class="categories__text">
                                    <h4>Men’s fashion</h4>
                                    <p>Gentle - Mature</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="../../img/categories/category-3.jpg">
                                <div class="categories__text">
                                    <h4>Kid’s fashion</h4>
                                    <p>Are coming...</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="../img/categories/category-4.jpg">
                                <div class="categories__text">
                                    <h4>Cosmetics</h4>
                                    <p>Being prepareing..</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="../../img/categories/category-5.jpg">
                                <div class="categories__text">
                                    <h4>Accessories</h4>
                                    <p>Be yours </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>New product</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".women">Women’s</li>
                        <li data-filter=".men">Men’s</li>
                        <li data-filter=".kid">Kid’s</li>
                        <li data-filter=".accessories">Accessories</li>
                        <li data-filter=".cosmetic">Cosmetics</li>
                    </ul>
                </div>
            </div>
            <div class="row property__gallery">
                <?php foreach ($a as $d):


                    ?>

                    <div class="col-lg-3 col-md-4 col-sm-6 mix men">
                        <div class="product__item">
                            <form action="index.php?act=addcart" method="post">
                                <div class="product__item__pic set-bg rounded-pill" data-setbg="../upload/<?= $d['img'] ?>">
                                    <ul class="product__hover">
                                        <li><a href="../upload/<?= $d['img'] ?>" class="image-popup"><span
                                                    class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                       
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <?php
                                    $ma_sp = $d['ma_sp'];
                                    $t = cate_id_by_masp($ma_sp);
                                    $u = count_cateid();
                                    $s = count($u);
                                  
                                    ?> 
                                    <h6><a class="text-decoration-none" href="index.php?act=spdetail&ma_sp=<?= $d['ma_sp'] ?>&cate_id=<?= $t[0][0] ?>">
                                            <?= $d['ten_sp'] ?>
                                        </a></h6>
                                    <input type="hidden" name="ten_sp" value="<?= $d['ten_sp'] ?>">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">
                                      
                                       <h6 class="text-danger"> <?php echo number_format($d['gia_sp'],0,',') ?></h6>
                                      
                                        <input type="hidden" name="gia_sp" value="<?= $d['gia_sp'] ?>">
                                        <input type="hidden" name="img" value="<?= $d['img'] ?>">
                                    </div>
                                    <div class="product__price bg-black rounded-pill text-white ">

                                        <input type="submit" value="Add to cart" name="addtocart" class="">
                                        &emsp;&emsp;|&emsp;&emsp;
                                        <a class="text-decoration-none" href="index.php?act=spdetail&ma_sp=<?= $d['ma_sp'] ?>&cate_id=<?= $t[0][0] ?>">
                                            Details
                                        </a>

                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>


    
</body>

</html>