<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="px-5">
        <h1 class="text-center text-danger fw-bold">Sign up for Users</h1>
<form action="index.php?act=user_register" method="post">
    <div class="mb-3 mt-3">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="" placeholder="Enter username" name="username">
    </div>
    <div class="mb-3 ">
      <label for="">Email:</label>
      <input type="email" class="form-control" id="" placeholder="Enter Email" name="user_mail">
    </div>
    <div class="mb-3 mt-3">
      <label for="username">Phone number:</label>
      <input type="text" class="form-control" id="" placeholder="Enter phone number" name="user_phone">
    </div>
    <div class="mb-3 mt-3">
      <label for="username">Address:</label>
      <input type="text" class="form-control" id="" placeholder="Enter address" name="user_address">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="" placeholder="Enter password" name="user_password">
    </div>
    
   <input type="submit" class="btn btn-primary" value="Register" name="register">
  </form>

  </div>
</body>

</html>