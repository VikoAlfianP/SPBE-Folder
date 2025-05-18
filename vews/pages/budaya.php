<?php include('data.php'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budaya Daerah</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="SPBE-Folder\data\data.php">
</head>
<body>
    <header>
        <h1>Budaya Daerah</h1>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }

            header {
                text-align: center;
                margin-bottom: 20px;
            }

            .budaya-item {
                background: white;
                padding: 15px;
                margin: 10px 0;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            .budaya-item img {
                max-width: 100%;
                height: auto;
            }
        </style>
    </header>
    <main>
        <?php foreach ($budaya as $item): ?>
            <div class="budaya-item">
                <h2><?php echo $item['judul']; ?></h2>
                <p><?php echo $item['penjelasan']; ?></p>
                <img src="<?php echo $item['gambar']; ?>" alt="<?php echo $item['judul']; ?>">
                <p><strong>Kegiatan:</strong> <?php echo $item['kegiatan']; ?></p>
            </div>
        <?php endforeach; ?>
    </main>
</body>
</html>