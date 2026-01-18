<?php if(!isset($pageTitle)) $pageTitle="LLAMA TECHNOLOGY"; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="x-icon" href="assets/img/logo/logo.png">
  <title>LLAMA Technology</title>
  <title><?php echo htmlspecialchars($pageTitle); ?></title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

  <!-- Animations -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- Lightbox (gallery) -->
  <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">

  <!-- Your CSS -->
  <link rel="stylesheet" href="/llama-site/assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark nav-glass sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="/llama-site/">
  <img src="/llama-site/assets/img/logo/logo.png"
       alt="LLAMA TECHNOLOGY"
       class="site-logo">
  <span class="brand-text">LLAMA TECHNOLOGY</span>
</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
        <li class="nav-item"><a class="nav-link" href="/llama-site/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/llama-site/about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/llama-site/team.php">Team</a></li>
        <li class="nav-item"><a class="nav-link" href="/llama-site/courses.php">Internships</a></li>
        <li class="nav-item"><a class="nav-link" href="/llama-site/gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="/llama-site/career.php">Careers</a></li>
        <li class="nav-item">
  <a class="nav-link" href="/llama-site/admin/login.php">
    <i class="bi bi-shield-lock"></i> Admin
  </a>
</li>
        <li class="nav-item">
          <a class="btn btn-glow ms-lg-2" href="/llama-site/register.php">
            Register <i class="bi bi-arrow-right"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
