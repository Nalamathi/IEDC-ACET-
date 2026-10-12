<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Discover the Innovation and Entrepreneurship Development Centre at Akshaya College of Engineering and Technology.">
  <meta name="theme-color" content="#0b1830">
  <title><?= htmlspecialchars($pageTitle ?? 'Home', ENT_QUOTES, 'UTF-8') ?> | IEDC - ACET</title>
  <link rel="icon" href="assets/images/iedc-logo.svg" type="image/svg+xml">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/main.js" defer></script>
</head>
<body>
<a class="skip-link" href="#main-content">Skip to content</a>
<header class="site-header">
  <div class="container nav-container">
    <a class="brand" href="index.php" aria-label="IEDC ACET home">
      <img src="assets/images/iedc-logo.svg" alt="" width="46" height="46">
      <span class="brand-text"><strong>IEDC <span>ACET</span></strong><small>Innovation & Entrepreneurship</small></span>
    </a>
    <button class="menu-toggle" id="menuToggle" type="button" aria-label="Open navigation menu" aria-expanded="false" aria-controls="primaryNav">
      <span></span><span></span><span></span>
    </button>
    <nav class="primary-nav" id="primaryNav" aria-label="Main navigation">
      <a class="nav-link <?= ($activePage ?? '') === 'home' ? 'active' : '' ?>" href="index.php">Home</a>
      <a class="nav-link" href="index.php#about">About</a>
      <a class="nav-link" href="index.php#focus">Our Focus</a>
      <a class="nav-link" href="index.php#events">Activities</a>
      <a class="nav-link" href="index.php#contact">Contact</a>
      <a class="nav-cta" href="index.php#contact">Connect with us <span aria-hidden="true">↗</span></a>
    </nav>
  </div>
</header>
<div id="main-content"></div>