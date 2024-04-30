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
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
    <header class="header text-center">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="index.php"><img src="../img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class=""><a class="text-decoration-none" href="index.php?act=home">Home</a></li>
                            <li class=""><a class="text-decoration-none" href="index.php?act=about">About Us</a></li>
                            <li class=""><a class="text-decoration-none" href="index.php?act=sp">Product</a></li>
                            <li class=""><a class="text-decoration-none" href="index.php?act=blog">BLog</a></li>

                        </ul>
                    </nav>
                </div>
                <div class=" col-lg-3 ">
                    <div class="header__right ">
                        <div class="header__right__widget">
                            <div class="dropdown">
                                <a class="" data-bs-toggle="dropdown">

                                    <i class="fa fa-search"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <form action="index.php?act=find" method="post" class="checkout__form">
                                        <div class="input-group">

                                            <input class="border border-secondary rounded-pill" type="text" name="key"
                                                id="" placeholder="  Input key">
                                            <input type="submit" value="Find" name="finding"
                                                class="rounded-pill w-[100px] ml-[-200px] text-white bg-success">
                                        </div>
                                    </form>
                                </ul>
                            </div>
                        </div>
                       
                        <div class="header__right__widget px-5">
                            <a href="index.php?act=cart"> <i class="fa fa-shopping-cart"></i></a>
                        </div>
                        <div class="header__right__widget ">
                            <a href="index.php?act=bill"> <i class="fa fa-fax"></i></a>
                        </div>
                        <div class="header__right__widget pl-5">
                            <?php require "../lguser.php" ?>
                        </div>
                    </div>









                </div>

            </div>

        </div>
    </header>
</body>

</html>