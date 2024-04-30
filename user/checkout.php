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
                        <span>Check out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <hr>
    </section>
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="coupon__link"><span class="icon_tag_alt"></span> <a href="#">Have a coupon?</a> Click
                        here to enter your code.</h6>
                </div>
            </div>
            <form action="index.php?act=checkout" method="post" class="checkout__form">
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Billing detail</h5>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>First Name <span>*</span></p>
                                    <span class="text-danger">
                                        <?= isset($err_hoten) ? $err_hoten : '' ?>
                                    </span>
                                    <input type="text" name="hoten" value="<?=
                                    $us['username'];
                                    ?>" >
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Address <span>*</span></p>
                                    <span class="text-danger">
                                        <?= isset($err_diachi) ? $err_diachi : '' ?>
                                    </span>
                                    <input type="text" name="diachi" value="<?=
                                    $us['user_address'];
                                    ?>" >
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Phone <span>*</span></p>
                                    <span class="text-danger">
                                        <?= isset($err_sdt) ? $err_sdt : '' ?>
                                    </span>
                                    <input type="text" name="sdt" value="<?=
                                    $us['user_phone'];
                                    ?>" > 
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="">
                                    <p>Payment <span>*</span></p>

                                    <select name="payment" id="select" value="<?php if(isset($_POST['payment'])) echo htmlentities($_POST['payment']);?>" id="" class="w-full border border-gray-200 h-[50px]" onchange="paymentChange()">
                                        <option value="0">Choose payment</option>
                                        <option value="1">Paying when receiving! (COD)</option>
                                        <option value="2">Paying through Bank's account!</option>
                                        <option value="3">Paying through App(MOMO, ZaloPay...)!</option>
                                    </select>
                                </div> 
                                <span class="text-danger">
                                    <?= isset($err_payment) ? $err_payment : '' ?>
                                </span>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <p id="show" class="text-info font-weight-bold "> </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout__order">
                            <h5>Your order</h5>
                            <div class="checkout__order__total">
                                <ul>
                                    <li>Amounts <span>
                                            <?php
                                            $tongsl = 0;
                                            foreach ($_SESSION['giohanguser'] as $itemuser) {
                                                $tongsl += $itemuser[3];
                                            }
                                            echo $tongsl;
                                            ?>
                                            <input type="hidden" name="tongsl" value="<?= $tongsl ?>">
                                    <li>In Total <span>
                                            <?php
                                            $total = 0;
                                            foreach ($_SESSION['giohanguser'] as $itemuser) {
                                                $tt = $itemuser[2] * $itemuser[3];
                                                $total += $tt;
                                            }
                                            echo number_format($total, 0, ',')
                                                ?>
                                            <input type="hidden" name="tong_tien" value="<?= $total ?>">
                                        </span></li>
                                        <?php
                                            $total = 0;
                                            $i=0;
                                            for ($i=0; $i < count($_SESSION['giohanguser']); $i++ ) {
                                                $a =$_SESSION['giohanguser'][$i][1];
                                       

                                         $c =$_SESSION['giohanguser'][$i][0];
                                       
                                         //echo $d;
                                            ?>
                                    <input type="hidden" name="tensp" value="<?= $c ?>">
                                    <input type="hidden" name="hasp" value="<?= $a ?>">
                                     <?php }   ?>
                                </ul>
                            </div>


                            <input type="submit" class="site-btn" name="buy" value="Buy">
                        </div>
                    </div>
                </div>
            </form>
        
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="index.php?act=home" class="btn btn-info bg-info text-white">Home</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="index.php?act=cart" class="btn btn-info bg-warning text-white">Back to cart</a>
                    </div>
                </div>

            </div>
        </div>
        
    </section>
    
    <script>
        function paymentChange(){
        var show =document.getElementById('show');
        var values = document.getElementById('select');
        var vl =values.value;
        if(vl ==0){
            show.innerHTML="";
        }
        else if(vl== 1){
            show.innerHTML="You choose paying when receiving.<br> Please check the product and pay to the shipper"
        }
        else if(vl== 2){
            show.innerHTML="You choose paying through bank's account. <br> Please transfer to <br> DJ - Techcombank - 4558788555555! "
        }
        else if(vl== 3){
            show.innerHTML='You choose paying by App. <br> Please scan this QR code and transfer <br> <img src="https://images.viblo.asia/5974cb6b-ec70-41d0-9074-d4319b62f4c7.png" width="100px" height="100px">!'
        }
        }
    </script>
</body>

</html>