
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php?act=home"><i class="fa fa-home"></i> Home</a>
                        <span>Bill</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <hr>
    </section>
    <div class="container mx-auto">
      
    </div>

    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">

                        <table class="text-center">
                            <thead>
                                <tr>

                                    
                                    <th>Bill ID</th>
                                    <th>Total price</th>
                                    <th>Amounts</th>
                                    <th colspan="2">Buyer info</th>
                                    <th>Payment</th>
                                    <th>Status</th>
                                    <th>Details</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                foreach ($a as $c){
                                    
                                    ?>
                                    <tr>
                                       
                                        <td class="font-weight-bold">
                                            <?= $c['ma_hd'] ?>
                                        </td>
                                        <td class="text-success font-weight-bold">
                                            <?= number_format($c['tong_tien'], 0, ',') ?>

                                        </td>
                                        <td>
                                            <?= $c['tongsl'] ?>
                                            <!-- < ?= $item[2] ?> -->
                                        </td>
                                        <td colspan="2">
                                            Họ tên:
                                            <?= $c['hoten'] ?> <br>
                                            Địa chỉ:
                                            <?= $c['diachi'] ?> <br>
                                            SDT:
                                            <?= $c['sdt'] ?> <br>
                                        </td>
                                        <td class="cart__price text-danger">
                                            <?php $payment = [1, 2, 3];
                                            if ($c['payment'] == $payment[0]) {
                                                echo "Thanh toán khi nhận hàng!";
                                            } elseif ($c['payment'] == $payment[1]) {
                                                echo "Thanh toán qua tài khoản ngân hàng!";
                                            } elseif ($c['payment'] == $payment[2]) {
                                                echo "Thanh toán qua ví điện tử (MOMO, ZaloPay...)";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $stt = [1,2,3,4];
                                            $ma_hd = $c['ma_hd'];
                                            $t = status_select1($ma_hd);
                                            if (isset($t['stt_id'])) {
                                                if ($t['stt_id'] == $stt[0]) {
                                                    echo "Đang xử lý - Đã nhận thông tin đơn hàng!";
                                                } elseif ($t['stt_id'] == $stt[1]) {
                                                    echo "Đang xử lý - Đang chuẩn bị hàng!";
                                                } elseif ($t['stt_id'] == $stt[2]) {
                                                    echo "Đang xử lý - Đã giao cho bên vận chuyển!";
                                                } elseif ($t['stt_id'] == $stt[3]) {
                                                    echo "Đã xử lý - Giao hàng thành công!";
                                                }
                                            } elseif (!isset($t['stt_id'])) {
                                                echo '<h6 class="text-white">Chưa xử lý: Chờ cập nhật trạng thái!</h6>';
                                            }

                                            ?>
                                        </td>

                                        <td ><a href="index.php?act=billdetail&ma_hd=<?=$c['ma_hd']?>">See details</a></td>
                                       
                                    </tr>
                                    <?php

                                        }
                              

                                ?>

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="index.php?act=product" class="btn btn-info bg-info text-white">Tiếp tục mua</a>
                    </div>
                </div>

            </div>
            
        </div>
    </section>








</body>

</html>