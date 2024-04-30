<?php

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                <?php foreach ($cate as $cates) : ?>


<div class="card">
    <div class="card-heading">
        <a class="text-decoration-none" href="index.php?act=spothers&cate_id=<?= $cates['cate_id'] ?>" name="spothers"><?= $cates['cate_name']?></a>
    </div>

</div>

<?php endforeach ?>
                                    
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="col-lg-9 col-md-9">

                    <div class="row property__gallery">
                        <?php foreach ($d as $s): ?>

                            <div class="col-lg-3 col-md-4 col-sm-6 mix men">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg rounded-pill" data-setbg="upload/<?= $s['img'] ?>">
                                        <ul class="product__hover">
                                            <li><a href="../upload/<?= $s['img'] ?>.'" class="image-popup"><span
                                                        class="arrow_expand"></span></a></li>
                                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                            <?php
                                            $ma_sp = $s['ma_sp'];
                                            $t = cate_id_by_masp($ma_sp);

                                            ?>
                                            <form action="index.php?act=addcart" method="post">
                                                <h6><a class="text-decoration-none"
                                                        href="index.php?act=spdetail&ma_sp=<?= $s['ma_sp'] ?>&cate_id=<?= $t[0][0] ?>">
                                                        <?= $s['ten_sp'] ?>
                                                    </a></h6>
                                                <input type="hidden" name="ten_sp" value="<?= $s['ten_sp'] ?>">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product__price">
                                                 
                                                <h6 class="text-danger">   <?php echo number_format($s['gia_sp'], 0, ',') ?> </h6>
                                                </div>
                                                <input type="hidden" name="gia_sp" value="<?= $s['gia_sp'] ?>">
                                                <input type="hidden" name="img" value="<?= $s['img'] ?>">
                                                <div class="product__price rounded-pill bg-black text-white ">

                                                    <input type="submit" value="Add to cart" name="addtocart" class="">
                                                    &emsp; |&emsp;
                                                    <a class="text-decoration-none"
                                                        href="index.php?act=spdetail&ma_sp=<?= $s['ma_sp'] ?>&cate_id=<?= $t[0][0] ?>">
                                                        Details
                                                    </a>

                                                </div>
                                            </form>
                                        </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <ul class="pagination justify-content-center">
  <?php
?>
<ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="index.php?act=productother&cate_id=<?=$_GET['cate_id']?>&page=<?= ($page - 1) > 0 ? $page - 1 : 1 ?> ">Previous</a></li>
    <li class="page-item"><a class="page-link" href="index.php?act=productother&cate_id=<?=$_GET['cate_id']?>&page=<?= $page ?>"><?= $page ?></a></li>
    <li class="page-item"><a class="page-link" href="index.php?act=productother&cate_id=<?=$_GET['cate_id']?>&page=<?= $page + 1 ?>"><?= ($page+1) > $page_count ? '<>' : ($page+1) ?></a></li>
    <li class="page-item"><a class="page-link" href="index.php?act=productother&cate_id=<?=$_GET['cate_id']?>&page=<?= ($page + 1) > $page_count ? $page_count : ($page + 1) ?> ">Next</a></li>
  </ul>
  </ul>
</body>

</html>