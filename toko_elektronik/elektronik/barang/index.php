<?php
    include 'model-barang.php';
    $model = new Model();
    $index = 1;
    $result = $model->tampil_data("SELECT * FROM barang");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

    <title>Kasih Elektronik</title>
  </head>
  <body class="bg-dark">


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar site-navbar-target py-4" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ml-auto text-right order-2">
              <div class="site-logo">
                <a href="index.php" class="font-weight-bold text-white">K a s i h - E l e k t r o n i k</a>
              </div>
            </div>

            <div class="col-9 order-1 text-left mr-auto">
              

              <span class="d-inline-block d-lg-block"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="home.php" class="nav-link">Home</a></li>
                  <li><a href="index.php" class="nav-link">Barang</a></li>
                  <li><a href="../customer.php" class="nav-link">Customer</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>
      <div class="hero">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
    <div class="container-fluid">
        <div class="container">
                <br>
                <br>
                <br>
                <br>

                <a href="tambah_barang.php" class="btn btn-primary my-5">Tambah Barang</a>

                <h3 class="text-white">Tabel Daftar Barang</h3>
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">kode barang</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Merek</th>
                            <th scope="col">harga</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <?php
                        $result = $model->tampil_data(); if (!empty($result)) {
                        foreach ($result as $data) : ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $index ?></th>
                            <td scope="row"><?= $data->id_barang ?></td>
                            <td scope="row"><?= $data->nama_barang ?></td>
                            <td scope="row"><?= $data->merek?></td>
                            <td scope="row">Rp. <?= $data->harga?></td>
                            <td scope="row">
                                <a href="edit_barang.php?id_barang=<?= $data->id_barang ?>" class="btn btn-primary">Edit</a>
                                <a href="process_barang.php?id_barang=<?= $data->id_barang?>" class="btn btn-danger text-white" onclick="return confirm('Apakah Anda Yakin ? ')">Delete</a>
                            </td>
                        </tr>
                        <?php $index++ ?>
                        <?php endforeach; } else { ?>
                        <tr>
                            <td colspan="9">Belum ada data barang.</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    

                </table>
            <!-- <div class="hero" style="background-image: url('images/hero_3.jpg');"></div> -->
        </div>
    </div>
        <!-- <h3><marquee class="welcome"> Selamat Datang :) </marquee></h3> -->
    
        </div>
  </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
