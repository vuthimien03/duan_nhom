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
</head>

<body>
    <div class="container-fluid ">
       <header>
           <div class="mx-auto my-5"> <img src="../../img/logo.png" alt="" width="50px" height="50px"></div>
       </header>
       <div>

            <ul class="nav flex-column uppercase">
                <li class="nav-item  my-4">
                    <a class="nav-link " href="index.php?act=home">Management Home</a>
                </li>
                <li class="nav-item  my-4">
                    <a class="nav-link  "  href="index.php?act=catelist">Categories</a>
                </li>
                <li class="nav-item  my-4">
                    <a class="nav-link " href="index.php?act=productlist">Products</a>
                </li>
                <li class="nav-item  my-4">
                    <a class="nav-link " href="index.php?act=billlist">Bills</a>
                </li>
                <li class="nav-item  my-4">
                    <a class="nav-link " href="index.php?act=userlist">Users</a>
                </li>
                <li class="nav-item  my-4">
                    <a class="nav-link " href="index.php?act=commentlist">Comments</a>
                </li>

                <li class="nav-item  my-4">
                    <?php require '../../loginadm.php' ?>
                </li>
            </ul>
     
            </div>
    </div>
</body>

</html>