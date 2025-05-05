<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SPBE Kota Semarang</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .navbar-brand {
      font-weight: bold;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SPBE Semarang</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="integrasi.php">Integrasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perencanaan.php">Perencanaan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ekonomi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sosial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Budaya</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Infrastruktur</a>
        </li>

      </ul>
    </div>
  </div>
</nav>


<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include 'header.php'; ?>

<div class="container mt-5">
  <h2 class="text-center mb-4">Tentang SPBE Kota Semarang</h2>

  <div class="card mb-4">
    <div class="card-body">
      <h5 class="card-title">Apa itu SPBE?</h5>
      <p class="card-text">
        Sistem Pemerintahan Berbasis Elektronik (SPBE) adalah penyelenggaraan pemerintahan
        yang memanfaatkan teknologi informasi dan komunikasi untuk memberikan layanan
        kepada masyarakat secara efektif, efisien, dan transparan.
      </p>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-body">
      <h5 class="card-title">Tujuan SPBE Kota Semarang</h5>
      <ul>
        <li>Meningkatkan kualitas layanan publik yang terintegrasi.</li>
        <li>Mendorong efisiensi proses birokrasi dan pengambilan keputusan.</li>
        <li>Mendukung transparansi dan akuntabilitas pemerintahan.</li>
        <li>Menyediakan akses informasi yang terbuka dan mudah bagi masyarakat.</li>
      </ul>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-body">
      <h5 class="card-title">Komponen Utama SPBE</h5>
      <ol>
        <li>Arsitektur SPBE – Struktur sistem, data, dan layanan yang saling terhubung.</li>
        <li>Layanan SPBE – Berbagai layanan digital seperti e-layanan perizinan, pelaporan, dan konsultasi publik.</li>
        <li>Integrasi Data – Kolaborasi antar instansi dalam berbagi data dan informasi.</li>
        <li>Keamanan Informasi – Perlindungan data dan sistem dari ancaman siber.</li>
      </ol>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-body">
      <h5 class="card-title">Komitmen Kami</h5>
      <p class="card-text">
        Pemerintah Kota Semarang berkomitmen untuk terus mengembangkan SPBE sebagai bentuk transformasi digital pemerintahan, demi menciptakan tata kelola yang bersih, efisien, dan partisipatif.
      </p>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>

<!-- Footer -->
<footer class="bg-light text-center text-muted py-3 mt-5">
  <div>© 2025 Pemerintah Kota Semarang. All rights reserved.</div>
</footer>