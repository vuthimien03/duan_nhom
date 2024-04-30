<?php
// require_once '../global.php';
// require_once '../dao_pdo/bill_pdo.php';
// $stt = status_select();

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
    <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../../css/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     <style>
        th,tr,td{
            border: 3px solid gray;
        }
     </style>
</head>

<body>
    <header class="header">
        <div class="container-fluid">
            
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.html"><i class="fa fa-home"></i>Management</a>
                        <span>Bills</span>
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

                        <table class="text-center ">
                            <thead   >
                                <tr border="1">

                                    
                                    <th>Bill ID</th>
                                    <th>Total </th>
                                    <th>Amounts</th>
                                    <th colspan="2">Buyer info</th>
                                    <th>Payment</th>
                                    <th>Status</th>
                                    <th>Act</th>


                                </tr>
                            </thead>
                            <tbody>
                            <?php
               
               foreach ($s as $d) {




                   ?>
                                    <tr border="1">
                                       
                                        <td class="font-weight-bold" border="1">
                                            <?= $d['ma_hd'] ?>
                                        </td>
                                        <td class="text-success font-weight-bold" border="1">
                                            <?= number_format($d['tong_tien'], 0, ',') ?>

                                        </td>
                                        <td border="1">
                                            <?= $d['tongsl'] ?>
                                            <!-- < ?= $item[2] ?> -->
                                        </td>
                                        <td colspan="2" class="font-weight-bold" border="1">
                                            Họ tên:
                                            <?= $d['hoten'] ?> <br>
                                            Địa chỉ:
                                            <?= $d['diachi'] ?> <br>
                                            SDT:
                                            <?= $d['sdt'] ?> <br>
                                        </td>
                                        <td class="cart__price text-danger" border="1">
                                            <?php $payment = [1, 2, 3];
                                            if ($d['payment'] == $payment[0]) {
                                                echo "Thanh toán khi nhận hàng!";
                                            } elseif ($d['payment'] == $payment[1]) {
                                                echo "Thanh toán qua tài khoản ngân hàng!";
                                            } elseif ($d['payment'] == $payment[2]) {
                                                echo "Thanh toán qua ví điện tử (MOMO, ZaloPay...)";
                                            }
                                            ?>
                                        </td>
                                        <td class="text-primary font-weight-bold" border="1">
                                            <?php
                                            $stt = [1,2,3,4];
                                            $ma_hd = $d['ma_hd'];
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

                                        <td border="1">
                                        <?php if(isset($t['stt_id'])){
                            ?>
                          <a class="btn btn-danger" href="index.php?act=updatestt&ma_hd=<?= $d['ma_hd'] ?>" class="text-success">Update Bills' Status</a>
<?php
                        }
                        else{ ?>
                        <a class="btn btn-warning" href="index.php?act=addstt&ma_hd=<?= $d['ma_hd'] ?>" class="text-success">Add New Status</a>
                            <?php }?>
                       
                    </div>
                    <a href="index.php?act=billdetail&ma_hd=<?=$d['ma_hd']?>" class="btn btn-info" >See details</a>         
                                    </td>
                 
                                        
                                    </td>
                                       
                                    </tr>
                                    <?php


                                        }

                                ?>

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
            
            
        </div>
    </section>
    <footer class="footer">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            shop is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                                href="https://colorlib.com/" target="_blank">DJ</a>
                        </p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
</body>


</html>