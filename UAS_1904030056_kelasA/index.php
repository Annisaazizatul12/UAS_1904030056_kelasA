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
          <li class="nav-item"><a class="nav-link" href="#page-top">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Address</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Comment</a></li>
          <li class="nav-item"><a class="nav-link" href="product.php">Product</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navigation -->

  <!-- Masthead-->
  <header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
      <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-8 align-self-end">
          <h1 class="text-white text-uppercase fw-bold">Marketzul Shop</h1>
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 mb-5">Menjual Berbagai Macam T-Shirt & Accessories</p>
          <a class="btn btn-primary btn-xl" href="#services">Lihat Alamat Toko <i
              class="fas fa-arrow-circle-down"></i></a>
        </div>
      </div>
    </div>
  </header>
  <!-- End Masthead -->

  <!-- Services-->
  <section class="page-section bg-info" id="services">
    <div class="container px-3">
      <h2 class="text-center fw-bold">Marketzul Shop Address</h2>
      <hr class="divider mb-5" />
      <div class="row gx-4 gx-lg-5">
        <div class="col-md-6">
          <div class="text">
            <p style="text-align:justify"><b>TENTANG MARKETZUL SHOP : <br><br>
                MARKETZUL SHOP Ialah Toko Yang Menjual Berbagai Macam T-Shirt & Accessories
              </b>
            </p>
            <hr>
            <p style="text-align:justify"><b>ALAMAT : <br><br>
                Rajeg, Tangerang, Banten - Indonesia.
              </b>
            </p>
            <hr>
          </div>
        </div>
        <div class="col-md-6">
          <img class="rounded mt-3" src="image/brand-shop.jpg" width="500" alt="brand-shop">
        </div>
      </div>
      <div class="col">
        <a class="btn btn-warning btn-xl" href="product.php">Produk Selengkapnya <i
            class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </section>
  <!-- End Services -->

  <!-- Contact-->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col text-center">
          <h2 class="mt-0 fw-bold">Comment</h2>
          <hr class="divider" />
          <p class="text-muted fw-bold mb-5">Berikan Komentar Pengalaman Berbelanja</p>
        </div>
      </div>
      <div class="row justify-content-center mb-5">
        <div class="col-lg-6">
          <!-- * * * * * * * * * * * * * * *-->
          <!-- * * SB Forms Contact Form * *-->
          <!-- * * * * * * * * * * * * * * *-->
          <!-- This form is pre-integrated with SB Forms.-->
          <!-- To make this form functional, sign up at-->
          <!-- https://startbootstrap.com/solution/contact-forms-->
          <!-- to get an API token!-->
          <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <!-- Name input-->
            <div class="form-floating mb-3">
              <input class="form-control" id="name" type="text" autocomplete="off" placeholder="Enter your name..."
                data-sb-validations="required" />
              <label for="name">Full name</label>
              <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
            </div>
            <!-- Email address input-->
            <div class="form-floating mb-3">
              <input class="form-control" id="email" type="email" autocomplete="off" placeholder="name@example.com"
                data-sb-validations="required,email" />
              <label for="email">Email address</label>
              <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
            </div>
            <!-- Phone number input-->
            <div class="form-floating mb-3">
              <input class="form-control" id="phone" type="tel" autocomplete="off" placeholder="(123) 456-7890"
                data-sb-validations="required" />
              <label for="phone">Phone number</label>
              <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
            </div>
            <!-- Message input-->
            <div class="form-floating mb-3">
              <textarea class="form-control" id="message" type="text" autocomplete="off"
                placeholder="Enter your message here..." style="height: 10rem"
                data-sb-validations="required"></textarea>
              <label for="message">Message</label>
              <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
              <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                To activate this form, sign up at
                <br />
                <a
                  href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
              </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage">
              <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>
            <!-- Submit Button-->
            <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton"
                type="submit">Submit</button></div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact -->

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