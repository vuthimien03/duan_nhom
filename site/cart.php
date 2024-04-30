<?php

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
                        <span>Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <hr>
    </section>
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <?php
                        if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                            ?>
                            <table class="text-center">
                                <thead>
                                    <tr>

                                        <th>STT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th colspan="2">Products</th>
                                        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>Amounts</th>
                                        <th>Total</th>
                                        <th>Act</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    $total = 0;
                                    $sl = 0;


                                    foreach ($_SESSION['giohang'] as $item):


                                        $tt = (int) $item[2] * (int) $item[3];
                                        $total += $tt;


                                        ?>
                                        <tr>
                                            <td>
                                                <?= ($i + 1) ?>
                                            </td>
                                            <td>
                                                <img src="upload/<?= $item[1] ?>" alt="" width="100px" height="100px">

                                            </td>
                                            <td class="text-success font-weight-bold">
                                                <?= $item[0] ?>

                                            </td>
                                            <td>
                                                <?php echo number_format($item[2], 0, ',') ?>

                                            </td>
                                            <td>
                                                <form class="form-inline" action="index.php?act=cart" method="post">
                                                    <input type="hidden" name="ten_sp" value="<?= $item[0] ?>">
                                                    <input type="number" class="form-control" id="" name="sl"
                                                        value="<?= $item[3] ?>" min=1>

                                                    <input type="submit" value="Update" name="uptocart"
                                                        class="btn btn-secondary"> <br>
                                                    <span class="text-danger">
                                                        <?= isset($err_sl) ? $err_sl : '' ?>
                                                    </span>
                                                </form>

                                            </td>
                                            <td class="cart__price text-danger">
                                                <!-- < ?= $tt ?> -->
                                                <?php echo number_format($tt, 0, ',') ?>
                                            </td>
                                            <td><a href="index.php?act=delcart&i=<?= $i ?>" class=" text-purple-900"><i
                                                        class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <?php
                                        $sl += $item[3];
                                        $i++;
                                    endforeach ?>
                                    <tr>
                                        <td colspan="5" class=" text-center font-weight-bold">Total in Amounts:</td>
                                        <td colspan="2" class="text-danger font-weight-bold">
                                            <?= $sl ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="5" class=" text-center font-weight-bold">Total in Total:</td>
                                        <td colspan="2" class="text-danger  font-weight-bold">
                                            <!-- < ?= $total ?> -->
                                            <?php echo number_format($total, 0, ',') ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php } else {
                            $total = 0;
                            echo '<p class="font-weight-bold">The cart is empty! Go on shopping, please!</p>';
                        }

                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="index.php?act=sp" class="btn btn-info bg-info text-white">Continue Buying</a>
                    </div>
                </div>
                <?php
                if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                    ?>
                    <div class="col-lg-4 ">
                        <div class="cart__total__procced">
                            <h6>Cart total</h6>
                            <ul>
                                <li>Total: <span>

                                        <?php echo number_format($total, 0, ',') ?>
                                    </span></li>
                            </ul>
                            <a href="index.php?act=checkout" class="primary-btn">Checkout</a>
                        </div>
                    </div>
                <?php } else {
                    ?>


                <?php } ?>
            </div>

            <div class="row">
                <?php
                if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                    ?>
                    <div class="col-lg-6">
                        <div class="discount__content">
                            <h6>Discount codes</h6>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">Apply</button>
                            </form>
                        </div>
                    </div>
                <?php } else {
                    ?>


                <?php } ?>
            </div>
        </div>
    </section>
</body>