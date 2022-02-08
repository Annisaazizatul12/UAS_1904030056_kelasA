<?php
  require 'function.php';
  $produk = query("SELECT * FROM db_marketzul");
  
  if (isset($_POST['cari'])) {
    $produk = cari($_POST['keyword']);
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
      <div class="text-center mt-3">
        <h3 class="text-uppercase mb-5">KATEGORI PRODUK</h3>
      </div>

      <div class="row">
        <div class="col px-3">
          <form method="POST" action="">
            <div class="container">
              <div class="row">
                <div class="col-md-4 mt-1 fst-italic fw-bold">
                  <h5>Cari Produk Yang Anda Inginkan</h5>
                </div>
                <div class="col-md-8">
                  <div class="input-group">
                    <input type="text" id="keyword" name="keyword" class="form-control input-text"
                      placeholder="Cari Produk ..." autocomplete="off"><span class="input-group-addon">
                      <input type="submit" class="btn btn-dark" name="cari"></span>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <table class="table table-striped text-center mt-5">
        <thead>
          <hr>
          <tr>
            <th scope="col">No</th>
            <th scope="col">ID Produk</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga Produk</th>
            <th scope="col">Stok Produk</th>
            <th scope="col">Gambar Produk</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>

        <?php if (empty($produk)) : ?>
        <tr>
          <td colspan="4" class="alert alert-danger text-center" role="alert">
            <p>Data Produk Tidak Ditemukan</p>
          </td>
        </tr>
        <?php endif; ?>

        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($produk as $produkk) : ?>
          <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td><?php echo $produkk['id_produk']; ?></td>
            <td><?php echo $produkk['nama_produk']; ?></td>
            <td><?php echo $produkk['harga_produk']; ?></td>
            <td><?php echo $produkk['stok_produk']; ?></td>
            <td><img src="image/<?php echo $produkk['gambar_produk']; ?>" width="70px"></td>
            <td><a href="detail_product.php?id=<?= $produkk['id']; ?>" class="btn btn-info" role="button">Detail <i
                  class="fas fa-arrow-right"></i></a>
            </td>
          </tr>
          <?php $no++ ?>
          <?php endforeach ?>
        </tbody>
      </table>
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