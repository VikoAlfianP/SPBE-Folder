<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPBE Kecamatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #ffffff;
        }
        .banner {
            background-color: #e55b2c;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .banner h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        .banner p {
            font-size: 1.25rem;
        }
        .search-bar {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Pemerintah Kecamatan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="integrasi.php">Integrasi</a></li>
                <li class="nav-item"><a class="nav-link" href="perencanaan.php">Perencanaan</a></li>
                <li class="nav-item"><a class="nav-link" href="ekonomi.php">Ekonomi</a></li>
                <li class="nav-item"><a class="nav-link" href="sosial.php">Sosial</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/budaya.php">Budaya</a></li>
                <li class="nav-item"><a class="nav-link" href="infrastruktur.php">Infrastruktur</a></li>
                <li class="nav-item"><a class="nav-link text-danger" href="logout.php">logout</a></li>
                <!-- <li class="nav-item"><a class="nav-link text-danger" onclick="window.location.href='../../login.php'">Logout</a> -->
                <!-- <li class="nav-item"><a class="nav-link" href="#">Metaverse</a></li> -->
            </ul>
        </div>
    </nav>

    <!-- Banner Section -->
    <div class="banner">
        <h1>Selamat Datang di SPBE</h1>
        <p>Sistem Pemerintahan Berbasis Elektronik Kecamatan</p>
    </div>

    <!-- Search Bar -->
    <div class="search-bar text-center">
        <input type="text" class="form-control" placeholder="Telusuri kebutuhanmu disini..." aria-label="Search">
        <button><a class="nav-link" href="pages\layanan\form_layanan.php">Layanan</a></button>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-5">
        <div class="container">
            <p>&copy; 2025 Pemerintah Kecamatan. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>