
    <?php
require_once 'global.php';
require_once 'dao_pdo/bill_pdo.php';
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
                        <span>Bill Detail</span>
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

                        <table class="text-center">
                            <thead>
                                <tr>

                                  
                                    <th>Bill ID</th>
                                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <th>Amounts</th>
                                    <th colspan="2">Buyer info</th>
                                    <th>Payment</th>
                                    <th>Status</th>
                                    <th>Product name</th>
                                    <th>Product image</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $a = bills_selectone($ma_hd);
                               

                                    ?>
                                    <tr>
                                       
                                        <td  class="font-weight-bold">
                                           <span class="bg-success text-white"><?= $a['ma_hd'] ?></span> 
                                        </td>
                                        <td class="text-success font-weight-bold">
                                            <?= number_format($a['tong_tien'], 0, ',') ?>

                                        </td>
                                        <td>
                                            <?= $a['tongsl'] ?>
                                            <!-- < ?= $item[2] ?> -->
                                        </td>
                                        <td colspan="2">
                                            Họ tên:
                                           <span class="text-info font-weight-bold"><?= $a['hoten'] ?></span>  <br>
                                            Địa chỉ:
                                            <span class="text-info font-weight-bold"><?= $a['diachi'] ?></span> <br>
                                            SDT:
                                            <span class="text-info font-weight-bold"><?= $a['sdt'] ?> </span> <br>
                                        </td>
                                        <td class="cart__price text-danger">
                                            <?php $payment = [1, 2, 3];
                                            if ($a['payment'] == $payment[0]) {
                                                echo "Thanh toán khi nhận hàng!";
                                            } elseif ($a['payment'] == $payment[1]) {
                                                echo "Thanh toán qua tài khoản ngân hàng!";
                                            } elseif ($a['payment'] == $payment[2]) {
                                                echo "Thanh toán qua ví điện tử (MOMO, ZaloPay...)";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $stt = [1,2,3,4];
                                            $ma_hd = $a['ma_hd'];
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
                                        <td>
                                            <?php echo $a['tensp'] ?>
                                        </td>
                                       <td>
                                       <img src="upload/<?= $a['hasp']?>" alt="" width="100px" height="100px">
                                       </td>
                                    </tr>
                                 
                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="index.php?act=home" class="btn btn-info bg-info text-white">Về trang chủ</a>
                    </div>
                </div>

            </div>
            
        </div>
    </section>








</body>

</html>
</head>
<body>
    
</body>
</html>