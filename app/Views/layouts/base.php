<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Lindsay Papers</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/styles/styles.css') ?>"/>
  
</head>
<body>
   <!-- Navbar -->
<nav class="navbar">
  <div class="navbar-container">
    <!-- Logo -->
    <div class="logo">
      <img src="<?= base_url('public/images/logo.png') ?>" alt="Logo">
      <span class="star-rating">
        <span class="material-symbols-outlined">star</span>
        <span class="material-symbols-outlined">star</span>
        <span class="material-symbols-outlined">star</span>
        <span class="material-symbols-outlined">star</span>
        <span class="material-symbols-outlined">star_half</span>
      </span>
    </div>

    <!-- Get Started Button -->
    <a href="#" class="cta-btn">Get Started</a>

    <!-- Hamburger Menu -->
    <div class="menu-toggle" id="menu-toggle">
      <span class="material-symbols-outlined menu">menu</span>
    </div>
  </div>
</nav>

<!-- Modal for Navigation Links -->
<div class="modal" id="navbar-modal">
  <div class="modal-content">
    <div class="close-btn" id="close-modal">
      <span class="material-symbols-outlined">close</span>
    </div>
    <div class="navbar-links">
      <a href="<?= base_url('/') ?>">Features</a>
      <a href="<?= base_url('fees') ?>">Fees</a>
      <a href="<?= base_url('services') ?>">Services</a>
      <a href="<?= base_url('about') ?>">About</a>
    </div>
  </div>
</div>


     <!-- nav end -->
     <?= $this->renderSection('content') ?>

        <!-- footer -->
        <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="<?= base_url('public/images/logo.png') ?>" alt="Company Logo">
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/get_a_quote">Get a Quote</a></li>
                
                </ul>
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="#home">Address</a></li>
                    <li><a href="#about">Phone Number</a></li>
                    <li><a href="#services">contact@lindsaythetutor.com</a></li>
                   
                </ul>
            </div>
            <div class="footer-social">
                <p>Let's Connect:</p>
                <a href="https://facebook.com" target="_blank" class="social-icon"><img src="<?= base_url('public/images/icons/fb.png') ?>"/></a>
                <a href="https://twitter.com" target="_blank" class="social-icon"><img src="<?= base_url('public/images/icons/ig.png') ?>"/></a>
                <a href="https://instagram.com" target="_blank" class="social-icon"><img src="<?= base_url('public/images/icons/x.png') ?>"/></a>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Your Company Name. All Rights Reserved. |     <a href="#terms">Terms of Service</a> |  <a href="#terms">Privacy Policy</a> </p>
            </div>
        </div>
    </footer>
    
       <!-- footer end -->
<script src="<?= base_url('public/scripts/scripts.js') ?>"></script>
<script>
 document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const navbarModal = document.getElementById('navbar-modal');
    const closeModal = document.getElementById('close-modal');

    menuToggle.addEventListener('click', function() {
        navbarModal.style.display = 'block';
    });

    closeModal.addEventListener('click', function() {
        navbarModal.style.display = 'none';
    });

    // Close modal if clicked outside of modal content
    window.addEventListener('click', function(event) {
        if (event.target == navbarModal) {
            navbarModal.style.display = 'none';
        }
    });
});

</script>

</body>
</html>