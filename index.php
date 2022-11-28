<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="loginform/fonts/icomoon/style.css" />

    <link rel="stylesheet" href="loginform/css/owl.carousel.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="loginform/css/bootstrap.min.css" />

    <!-- Style -->
    <link rel="stylesheet" href="loginform/css/style.css" />

    <title>Login Vendor</title>
  </head>
  <body>

    <div class="d-lg-flex half">
      <div class="bg order-1 order-md-2" style="background-image: url('loginform/images/bg-7.webp')"></div>
      <div class="contents order-2 order-md-1">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
              <h3>Login to <strong>Vendor Database</strong></h3>
              <p class="mb-4"></p>
              <form action="login_action.php" method="post">
                <div class="form-group first">
                  <label for="email">email</label>
                  <input type="email" class="form-control" placeholder="Masukkan Email Anda" id="email" name="email" />
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Masukkan Password Anda" id="password" name="password"/>
                </div>

                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"
                    ><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="registration.php" class="forgot-pass">Register Here!</a></span>
                </div>

                <input type="submit" name="login" class="btn btn-block btn-primary" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="loginform/js/jquery-3.3.1.min.js"></script>
    <script src="loginform/js/popper.min.js"></script>
    <script src="loginform/js/bootstrap.min.js"></script>
    <script src="loginform/js/main.js"></script>
  </body>
</html>
