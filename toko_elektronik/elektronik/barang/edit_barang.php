<?php
    include 'model-barang.php';
    $id = $_GET['id_barang'];
    $model = new Model();
    $data = $model->edit($id);
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
                  <li class="active"><a href="barang/home.php" class="nav-link">Home</a></li>
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
            <h3 class="text-white mb-5">Tambah Barang</h3>

            <form action="process_barang.php" method="post">
                <div class="mb-3 col-5">
                    <label class="form-label text-white">Kode Barang</label>
                    <input type="text" class="form-control" name="id_barang" value="<?php echo $data->id_barang ?>" >
                </div>

                <div class="mb-3 col-5">
                    <label class="form-label text-white">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" value="<?php echo $data->nama_barang ?>" >
                </div>

                <div class="mb-3 col-5">
                    <label class="form-label text-white">Merek</label>
                    <input type="text" class="form-control" name="merek" value="<?php echo $data->merek ?>" >
                </div>

                <div class="mb-5 col-5">
                    <label class="form-label text-white">Harga</label>
                    <input type="number" class="form-control" name="harga" value="<?php echo $data->harga ?>" >
                </div>
                    <button type="submit" name="edit_barang" class="btn btn-success">Update</button>
                    <a class="btn btn-danger" href="index.php" role="button">Cancel</a>
                
            </form>
        </div>
    </div>

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