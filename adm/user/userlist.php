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
                        <span>Users</span>
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
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Phone number</th>
                                    <th>Address</th>
                                    <th>Number of Bills</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                <?php foreach ($ul as $l): ?>
                                    <tr>
                                        <td>
                                            <?= $l['username'] ?>
                                        </td>
                                        <td>
                                            <?= $l['user_mail'] ?>
                                        </td>
                                        <td>
                                        <?= $l['user_phone'] ?>
                                        </td>
                                        <td>
                                        <?= $l['user_address'] ?>
                                        </td>
                                        <td class="block">
                                        <?php 
                                         $username = $l['username'];
                                         $uc = user_bill($username);
                                         foreach ($uc as $c){
                                         echo $c.'<br>';
                                         }
                                         if($c > 0){
                                           ?>
                                         <a href="index.php?act=userbillist&username=<?= $l['username']?>">See All</a>
                                           <?php
                                         }
                                         else{
                                            echo '';
                                         }
                                        ?> 
                                        
                                        </td>
                                        <td><a href="index.php?act=user_update&username=<?= $l['username'] ?>"
                                                class="text-success">Update</a> / <a
                                                href="index.php?act=prodel&ma_sp=<?= $l['username'] ?>"
                                                onclick="return confirm('Bạn có muốn xóa không?')"
                                                class="text-danger">Delete</a></td>
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