<?php 
session_start();

if(!$_SESSION['email']) {
  header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Database User</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="database.css" />
  </head>
  <body>

    <!-- Header start -->
    <section class="jumbotron">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-6">
            <h1 class="display-4" style="color: #ffff">Vendor</h1>
            <h1 class="display-4" style="color: #ffff">User Database</h1>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#d3d3d3"
          fill-opacity="1"
          d="M0,128L40,128C80,128,160,128,240,144C320,160,400,192,480,176C560,160,640,96,720,74.7C800,53,880,75,960,112C1040,149,1120,203,1200,197.3C1280,192,1360,128,1400,96L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Header end -->

    <!-- college subject start -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col mb-5 text-center">
            <h2>Table data_user</h2>
            <!-- <h4 class="text-muted">My college subject schedule</h4> -->
          </div>
        </div>
        <div class="table-responsive-md">
          <table class="content-table table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">tipe_Vendor</th>
                <th scope="col">kewarganegaraan</th>
                <th scope="col">tipe_instansi</th>
                <th scope="col">profesi</th>
                <th scope="col">email</th>
                <th scope="col">phone_number</th>
                <th scope="col">tax_id</th>
                <th scope="col">password</th>
                <th scope="col">tax_id_doc</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php $dec = json_decode($_COOKIE['user'], true); ?>
                <th scope="row">01</th>
                <td><?= $dec['tipe_vendor'];?></td>
                <td><?= $dec['kewarganegaraan'];?></td>
                <td><?= $dec['tipe_instansi'];?></td>
                <td><?= $dec['profesi'];?></td>
                <td><?= $dec['email'];?></td>
                <td><?= $dec['phone_number'];?></td>
                <td><?= $dec['tax_id'];?></td>
                <td><?= $dec['password'];?></td>
                <td><?= $dec['tax_id_doc'];?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="col">
            <input type="hidden" name="logout" value="1">
            <a href="logout.php">
              <button type="submit" class="btn btn-lg ms-2" style="background-color: #fb8633">Logout</button>
            </a>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fb8633" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,128C384,107,480,85,576,112C672,139,768,213,864,218.7C960,224,1056,160,1152,128C1248,96,1344,96,1392,96L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- college subject end -->

    <!-- Footer start -->
    <footer class="footer-web">
        <p>©2022 Muhammad Fadhil Rizki Perdana | All Right Reserved</p>
      </footer>
      <!-- Footer end -->
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
