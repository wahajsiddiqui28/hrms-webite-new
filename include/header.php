
  
<?php
// Start the session to handle messages
session_start();

if (isset($_SESSION['message'])):
  // Determine the message type (success or danger)
  $toastClass = isset($_SESSION['message_type']) && $_SESSION['message_type'] === 'success'
    ? 'text-bg-success'
    : 'text-bg-danger';
  ?>
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div class="toast align-items-center <?php echo $toastClass; ?> border-0 show" role="alert" aria-live="assertive"
      aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
          <?php echo $_SESSION['message']; ?>
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
          aria-label="Close"></button>
      </div>
    </div>
  </div>
  <?php
  unset($_SESSION['message']);
  unset($_SESSION['message_type']);
endif;
?>




<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fasterpsystems</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Metrophobic&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/fontawesome.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
  <!-- Slick Slider CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
</head>
<body>
  <!-- Header start  -->
  <header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="color: var(--yellow-text) !important;">
          <strong>Fasterpsystems</strong> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-us.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portfolio.php">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="features.php">Features</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#features-cards">Benefits</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="pricing.php">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonials.php">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <div class="buttons" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <button class="btn" style="background: #faaf40;"> <a class="text-black" href="#">Request a Demo</a>
            </button>
            <!-- <button class="btn" style="border: 1px solid #faaf40; background: none;" data-bs-toggle="modal"
              data-bs-target="#signUpmodal"> <a href="#"> Sign Up </a> </button> -->
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- Header end -->


<div class="loading-overlay" id="formOverlay" style="display: none;">
  <div class="loader" id="formLoader"></div>
</div>
