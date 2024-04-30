<?php
require_once 'global.php';
require_once 'dao_pdo/sp_pdo.php';
require_once 'dao_pdo/bill_pdo.php';
require_once 'dao_pdo/cate_pdo.php';
require_once 'dao_pdo/adm_pdo.php';
require_once 'dao_pdo/tag_pdo.php';
require_once 'dao_pdo/user_pdo.php';
require_once 'dao_pdo/cmt_pdo.php';
if (!isset($_SESSION['giohang']))
    $_SESSION['giohang'] = [];
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'about':
            $VIEW_NAME = 'site/about.php';
            break;
        case 'sp':
            if (isset($page)) {
                $offset = ($page - 1) * $target_per_page;
            } else {
                $offset = 0;
            }
            $a = sp_offset($offset);
            //$a = sp_selectAll_limit();
            $cate = cate_selectAll();
            $VIEW_NAME = 'site/sp.php';
            break;
        case '':
            $VIEW_NAME = 'site/sp.php';
            break;
        case 'blog':
            $VIEW_NAME = 'site/blog.php';
            break;
        case 'cart':
            if (isset($_POST['uptocart']) && $_POST['uptocart']) {
                $sl = $_POST['sl'];
                $ten_sp = $_POST['ten_sp'];
                $err_sl = '';
                if ($sl == '') {
                    $err_sl = 'Select amount!';
                } elseif ($sl != '') {
                    if (isset($_SESSION['giohang']) & count($_SESSION['giohang']) > 0) {
                        $i = 0;
                        foreach ($_SESSION['giohang'] as $item) {
                            if ($item[0] == $ten_sp) {
                                $_SESSION['giohang'][$i][3] = $sl;
                                break;
                            }
                            $i++;
                        }
                    }
                    header('location: index.php?act=cart');
                }
            }
            $VIEW_NAME = 'site/cart.php';
            break;

        case 'home':
            $VIEW_NAME = 'site/home.php';
            break;
        case 'spothers':
            $cate_id = $_GET['cate_id'];
            $a = sp_by_cate($cate_id);
            $count = count($a);
            $page_count = ceil($count / $target_per_page);
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                if ($page <= 0) {
                    $page = 1;
                }
                if ($page > $page_count) {
                    $page = $page_count;
                }
            } else {
                $page = 1;
            }
            $offset = ($page - 1) * $target_per_page;
            $d = sp_by_cate_offset($cate_id, $offset);
            $cate = cate_selectAll();
            $VIEW_NAME = 'site/spothers.php';
            break;
        case 'addcart':
            if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                $ten_sp = $_POST['ten_sp'];
                $gia_sp = $_POST['gia_sp'];
                $img = $_POST['img'];
                if (isset($_POST['sl']) && $_POST['sl']) {
                    $sl = $_POST['sl'];
                } else {
                    $sl = 1;
                }
                // khai báo biến fo để kiểm tra
                $fo = 0;
                //Check sp da ton tai hay chưa, //nếu có thì cập nhật số lượng,
                $i = 0;
                foreach ($_SESSION['giohang'] as $item) {
                    if ($item[0] === $ten_sp) {
                        $slm = $sl + $item[3];
                        $_SESSION['giohang'][$i][3] = $slm;
                        $fo = 1;
                        break;
                    }
                    $i++;
                }
                // k thì thêm mới
                //Khơie tạo mảng
                if ($fo == 0) {
                    $item = array($ten_sp, $img, $gia_sp, $sl);
                    $_SESSION['giohang'][] = $item;
                }
                header('location: index.php?act=cart');
            }
            break;
        case 'delcart':
            if (isset($_GET['i']) && $_GET['i'] >= 0) {
                if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0)
                    array_splice($_SESSION['giohang'], $_GET['i'], 1);
            } else {
                if (isset($_SESSION['giohang']))
                    unset($_SESSION['giohang']);
            }
            if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                header('location: index.php?act=cart');
            } else {
                header('location: index.php?act=cart');
            }
            break;
        case 'spdetail':
            $ma_sp = $_GET['ma_sp'];
            $tag_id = 'CL';
            $tag_id2 = 'SZ';
            $cmt = cmt_select($ma_sp);
            $a = sp_selectone($ma_sp);
            $b = tag_select($ma_sp, $tag_id);
            $d = tag_select($ma_sp, $tag_id2);
            $VIEW_NAME = 'site/spdetail.php';
            break;
        case 'checkout':
            if (isset($_POST['buy']) && $_POST['buy']) {
                $ma_hd = "HD" . rand(0, 10000);
                $tong_tien = $_POST['tong_tien'];
                $tongsl = $_POST['tongsl'];
                $hoten = $_POST['hoten'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $payment = $_POST['payment'];
                $tensp = $_POST['tensp'];
                $hasp = $_POST['hasp'];
                $err_hoten = $err_diachi = $err_sdt = $err_payment = '';
                $num = preg_match('/^[0-9]{10}+$/', $sdt);
                if ($hoten == '') {
                    $err_hoten = "Blank name!";
                    // echo $err_hoten;
                }
                if ($sdt == '') {
                    $err_sdt = "Blank phone-number";
                    //echo $err_sdt;
                } elseif ($num != true) {
                    $err_sdt = "Invalid phone-number";
                }
                if ($payment == "0") {
                    $err_payment = "Blank payment";
                    //echo $err_payment;
                }
                if ($diachi == '') {
                    $err_diachi = "Blank address";

                }
                if (!$err_hoten && !$err_diachi && !$err_sdt && !$err_payment) {
                    bills_insert($ma_hd, $tong_tien, $tongsl, $hoten, $diachi, $sdt, $payment, $tensp, $hasp);
                    if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0)
                        unset($_SESSION['giohang']);
                    echo "
                        <script>
                        alert('Done! Direct to your bill, check it please!');
                        window.location.href='http://localhost/duan1_php/index.php?act=bill&ma_hd=$ma_hd';
                        </script>
                        ";
                }

            }
            $VIEW_NAME = 'site/checkout.php';
            break;
        case 'adm_login':
            $VIEW_NAME = 'adm_login.php';
            break;
        case 'user_login':
            $VIEW_NAME = 'user_login.php';
            break;
        case 'user_register':
            if(isset($_POST['register']) && $_POST['register']){
                $username = $_POST['username'];
                $user_mail = $_POST['user_mail'];
                $user_phone = $_POST['user_phone'];
                $user_address = $_POST['user_address'];
                $user_password = $_POST['user_password'];
                user_register($username,$user_mail, $user_phone, $user_address, $user_password);
                echo "
                <script>
                alert('Register success! Direct to your login!');
                window.location.href='http://localhost/duan1_php/index.php?act=user_login';
                </script>
                ";
            }
            $VIEW_NAME = 'user_register.php';
            break;
        case 'product':
            $page = $_GET['page'];
            $offset = ($page - 1) * $target_per_page;
            $a = sp_offset($offset);
            //$a = sp_selectAll_limit();
            $cate = cate_selectAll();
            $VIEW_NAME = 'site/product.php';
            break;
        case 'productother':
            $cate_id = $_GET['cate_id'];
            $a = sp_by_cate($cate_id);
            $coun = count($a);
            $page_count = ceil($coun / $target_per_page);
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                if ($page <= 0) {
                    $page = 1;
                }
                if ($page > $page_count) {
                    $page = $page_count;
                }
            } else {
                $page = 1;
            }
            $offset = ($page - 1) * $target_per_page;
            $d = sp_by_cate_offset($cate_id, $offset);
            $cate = cate_selectAll();
            $VIEW_NAME = 'site/productother.php';
            break;
        case 'bill':
            $ma_hd = $_GET['ma_hd'];
            $a = bills_selectone($ma_hd);
            $VIEW_NAME = 'site/bill.php';
            break;
        case 'find':
            if (isset($_POST['finding']) && $_POST['finding']) {
                $key = $_POST['key'];

                $keyword = "%$key%";
                $keylist = search($keyword);

            }

            $VIEW_NAME = 'site/find.php';
            break;

        case 'billdetail':
            $ma_hd = $_GET['ma_hd'];
            $a = bills_selectone($ma_hd);
            $VIEW_NAME = 'site/billdetail.php';
            break;
        default:
            $VIEW_NAME = 'site/home.php';
            break;
    }

}


include('layout.php');
?>