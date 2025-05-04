<!DOCTYPE html>
<html>
<head>
    <title>Form Layanan Publik</title>
    <style>
        /* Setel Body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f6fa;
            padding: 40px;
            margin: 0;
        }

        /* Navbar */
        nav {
            background-color: #2f3640;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: white;
            font-size: 18px;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 15px;
        }

        nav a:hover {
            background-color: #44bd32;
            border-radius: 4px;
        }

        /* Judul di atas Form */
        h2 {
            color: #2f3640;
            font-size: 24px;
            text-align: center;
            margin-top: 20px;
        }

        /* Styling Form */
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
            margin-top: 20px;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #dcdde1;
            border-radius: 6px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #44bd32;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #4cd137;
        }
    </style>
</head>
<body>

    <!-- Navbar dengan tautan ke halaman lain -->
    <nav>
        <a href="pemerintahan.php">Pemerintahan</a>
        <a href="pajak.php">Pajak</a>
        <a href="surat_menyurat.php">Surat Menyurat</a>
        <a href="dokumentasi.php">Dokumentasi</a>
    </nav>

    <h2>Pengajuan Layanan Publik</h2>

    <form method="POST" action="../process/save_layanan.php">
        Nama Lengkap: <br>
        <input type="text" name="nama" required><br><br>

        NIK: <br>
        <input type="text" name="nik" required><br><br>

        Jenis Layanan: <br>
        <select name="jenis_layanan" required>
            <option value="">-- Pilih --</option>
            <option value="Surat Domisili">Surat Domisili</option>
            <option value="Izin Usaha Mikro">Izin Usaha Mikro</option>
            <option value="SKTM">Surat Keterangan Tidak Mampu</option>
        </select><br><br>

        Keperluan: <br>
        <textarea name="keperluan" required></textarea><br><br>

        <button type="submit">Ajukan</button>
    </form>

</body>
</html>
