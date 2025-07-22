<?php
// कुनै session वा db connection चाहिएको भए यहाँ राख्नुहोस् (अथवा include header.php गरेमा राख्न सक्नुहुन्छ)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Us - Nepali Innovation Hub</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    body {
      background: #f9fafb;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .about-header {
      background: linear-gradient(90deg, #6a11cb, #2575fc);
      color: white;
      padding: 60px 0;
      text-align: center;
    }
    .contact-info i {
      color: #2575fc;
      margin-right: 10px;
    }
    .social-icons a {
      color: #2575fc;
      margin: 0 10px;
      font-size: 1.4rem;
      transition: color 0.3s ease;
    }
    .social-icons a:hover {
      color: #6a11cb;
    }
  </style>
</head>
<body>

 <?php include 'includes/public_header.php'; ?>

<section class="about-header">
  <div class="container">
    <h1>About Nepali Innovation Hub</h1>
    <p class="lead mt-3">Connecting Innovators, Empowering Ideas</p>
  </div>
</section>
<section class="py-5">
  <div class="container">
    <div class="row align-items-center gy-4">
      <div class="col-md-5 text-center">
        <img src="uploads/profile/profile_photo.jpg" alt="Dipak Regmi" class="img-fluid rounded shadow" style="max-width: 250px;" />
      </div>
      <div class="col-md-7">
        <h2 class="mb-3" style="font-weight: 700; font-size: 2.5rem; color: #2575fc;">Dipak Regmi</h2>
        <p class="fs-5 text-secondary" style="line-height: 1.6;">
          I am Dipak Regmi, a passionate computer engineer and innovator.  
          My goal is to connect Nepal’s youth with technology and innovation.  
          Through this platform, we aim to share knowledge, collaborate, and build new ideas together.
        </p>

        <h4 class="mt-4 mb-3" style="color: #2575fc; font-weight: 600;">Contact Information</h4>
        <ul class="list-unstyled contact-info fs-5" style="color: #555;">
          <li><i class="fas fa-envelope me-2 text-primary"></i> dipak.regmi@example.com</li>
          <li><i class="fas fa-phone me-2 text-primary"></i> +977 9800000000</li>
          <li><i class="fas fa-map-marker-alt me-2 text-primary"></i> Kathmandu, Nepal</li>
        </ul>

        <h4 class="mt-4 mb-3" style="color: #2575fc; font-weight: 600;">Follow Me</h4>
        <div class="social-icons fs-3">
          <a href="https://www.facebook.com/dipak.regmi.95138" target="_blank" rel="noopener" class="me-4 text-primary" title="Facebook">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="https://www.youtube.com/@InnoDipak" target="_blank" rel="noopener" class="text-danger" title="YouTube">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="text-center py-4 bg-dark text-white" style="font-size: 0.9rem;">
  <div class="container">
    &copy; 2025 Nepali Innovation Hub. All rights reserved.
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
