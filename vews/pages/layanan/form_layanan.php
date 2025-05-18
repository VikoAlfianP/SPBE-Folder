<!DOCTYPE html>
<html>
<head>
    <title>Form Layanan Publik</title>
    <style>
        /* Reset and base */
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f6fa;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        /* Navbar */
        nav {
            background-color: #2f3640;
            padding: 10px 0;
            text-align: center;
            width: 100%;
            flex-shrink: 0;
        }

        nav a {
            color: white;
            font-size: 18px;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 15px;
            display: inline-block;
        }

        nav a:hover {
            background-color: #44bd32;
            border-radius: 4px;
        }

        /* Main content wrapper to center form vertically and horizontally */
        .main-wrapper {
            flex: 1; /* take all available space */
            display: flex;
            flex-direction: column;
            justify-content: center; /* vertical center */
            align-items: center;     /* horizontal center */
            padding: 20px;
        }

        /* Heading */
        h2 {
            color: #2f3640;
            font-size: 28px;
            margin: 0 0 16px 0;
        }

        /* Form styling */
        form {
            background-color: #ffffff;
            padding: 24px 30px;
            border-radius: 12px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            box-sizing: border-box;
        }

        label {
            font-weight: bold;
            color: #2f3640;
            display: block;
            margin-top: 12px;
            margin-bottom: 6px;
            font-size: 15px;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #dcdde1;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 15px;
            font-family: Arial, sans-serif;
            resize: vertical;
        }

        textarea {
            min-height: 90px;
        }

        button[type="submit"] {
            margin-top: 20px;
            background-color: #44bd32;
            color: white;
            border: none;
            padding: 12px 0;
            font-weight: bold;
            font-size: 17px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #4cd137;
        }

        /* Back button fixed bottom right */
        .back-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #e84118;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.3);
            transition: background-color 0.3s ease;
            z-index: 101;
            width: auto;
        }

        .back-button:hover {
            background-color: #c23616;
        }

    </style>
</head>
<body>

    <!-- Navbar dengan tautan ke halaman lain -->
    <nav>
        <a href="/pemerintahan.php">Pemerintahan</a>
        <a href="/pajak.php">Pajak</a>
        <a href="/surat_menyurat.php">Surat Menyurat</a>
        <a href="/dokumentasi.php">Dokumentasi</a>
    </nav>

    <div class="main-wrapper">
        <h2>Pengajuan Layanan Publik</h2>

        <form method="POST" action="../process/save_layanan.php" autocomplete="off">
            <label for="nama">Nama Lengkap:</label>
            <input id="nama" type="text" name="nama" required>

            <label for="nik">NIK:</label>
            <input id="nik" type="text" name="nik" required>

            <label for="jenis_layanan">Jenis Layanan:</label>
            <select id="jenis_layanan" name="jenis_layanan" required>
                <option value="">-- Pilih --</option>
                <option value="Surat Domisili">Surat Domisili</option>
                <option value="Izin Usaha Mikro">Izin Usaha Mikro</option>
                <option value="SKTM">Surat Keterangan Tidak Mampu</option>
            </select>

            <label for="keperluan">Keperluan:</label>
            <textarea id="keperluan" name="keperluan" required></textarea>

            <button type="submit">Ajukan</button>
        </form>
    </div>

    <button type="button" class="back-button" onclick="window.location.href='../../index.php'">Kembali</button>

</body>
</html>

