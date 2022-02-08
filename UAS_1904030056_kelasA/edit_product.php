<?php
  require 'function.php';

  $id = $_GET['id'];
  $produk = query("SELECT * FROM db_marketzul WHERE id = $id");
  if (isset($_POST['edit'])) {
    if (edit($_POST) > 0) {
      echo "
      <script>
        alert('Data Berhasil di Edit..!');
        document.location.href='detail_product.php'
        </script>
        ";
    } else {
      echo "
      <script>
        alert('Data Gagal di Edit..!');
        </script>
        ";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>MARKETZUL SHOP</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap Icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
    rel="stylesheet" type="text/css" />
  <!-- SimpleLightbox plugin CSS-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="font-awesome.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="#page-top">MARKETZUL SHOP</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto my-2 my-lg-0">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#services">Address</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#contact">Comment</a></li>
          <li class="nav-item"><a class="nav-link" href="product.php">Product</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navigation -->

  <!-- Portfolio-->
  <section class="page-section" id="portfolio">
    <div class="container justify-content-center">
      <div class="text-center mt-5">
        <h3 class="section-heading text-uppercase mb-5">EDIT DATA PRODUK</h3>
      </div>

      <div class="row">
        <div class="col px-3">
          <form method="POST" action="">
            <input type="hidden" class="form-control" value="<?= $produk['id'] ?>" name="id">
            <div class="form-group">
              <label for="id_produk" class="form-label mt-2">ID Produk : </label>
              <input type="text" class="form-control" id="id_produk" value="<?= $produk['id_produk'] ?>"
                placeholder="ID Produk" name="id_produk" autofocus required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="nama_produk" class="form-label mt-2">Nama Produk : </label>
              <input type="text" class="form-control" id="nama_produk" value="<?= $produk['nama_produk'] ?>"
                placeholder="Nama Produk" name="nama_produk" required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="harga_produk" class="form-label mt-2">Harga Produk : </label>
              <input type="text" class="form-control" id="harga_produk" value="<?= $produk['harga_produk'] ?>"
                placeholder="Harga Produk" name="harga_produk" required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="stok_produk" class="form-label mt-2">Stok Produk : </label>
              <input type="text" class="form-control" id="stok_produk" value="<?= $produk['stok_produk'] ?>"
                placeholder="Stok Produk" name="stok_produk" required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="gambar_produk" class="form-label mt-2">Upload Gambar Produk :</label>
              <input class="form-control" type="file" id="gambar_produk" value="<?= $produk['gambar_produk'] ?>"
                placeholder="Gambar Produk" name="gambar_produk" required autocomplete="off">
            </div>
            <button type="tambah" class="btn btn-warning mt-3" name="edit">Simpan</button>
            <a href="detail_product.php" class="btn btn-info mt-3" role="button">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Portfolio -->

  <!-- Footer-->
  <footer class="bg-info py-4">
    <div class="container px-lg-5">
      <div class="small text-center text-muted">Copyright &copy; 2022 - Marketzul Shop</div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- SimpleLightbox plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>