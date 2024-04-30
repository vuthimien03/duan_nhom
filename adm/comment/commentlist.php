<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.html"><i class="fa fa-home"></i>Management</a>
                        <span>Comment</span>
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
                        <div class="cart__total__procced">
                           
                        </div>
                        <table class="text-center">
                            <thead>
                                <tr>
                                    <th>Comment ID</th>
                                    <th>Name of product</th>
                                    <th>Date</th>
                                    <th>Comment people</th>
                                    <th>Content</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                <?php foreach ($cmt as $cm): ?>
                                    <tr>
                                        <td>
                                            <?= $cm['cmt_id'] ?>
                                        </td>
                                        <td>
                                            <?php 
                                            $ma_sp = $cm['cmt_masp'];
                                            $sp = sp_selectone( $ma_sp);
                                            echo $sp['ten_sp']
                                            ?>
                                        </td>
                                        <td>
                                        <?= $cm['cmt_date'] ?>
                                        </td>
                                        <td class="text-success font-weight-bold">
                                        <?= $cm['cmter'] ?>
                                        </td>
                                        <td class="block">
                                        <?= $cm['cmt_content']     ?> 
                                        
                                        </td>
                                        <td> <a
                                                href="index.php?act=commentdel&cmt_id=<?= $cm['cmt_id'] ?>"
                                                onclick="return confirm('Bạn có muốn xóa không?')"
                                                class="text-danger">Hide</a></td>
                                    </tr>


                                <?php endforeach ?>
                            </tbody>
                        </table>



                    </div>

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