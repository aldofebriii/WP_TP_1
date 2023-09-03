<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kendaraan yang Tersedia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
        }

        .vehicle {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
        }

        .vehicle h2 {
            margin-top: 0;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    @include('include.header')
    @include('nav')
    <div class="container">
        <div class="vehicle">
            <h2>Mobil Manual</h2>
            <p>Kami menyediakan berbagai jenis mobil manual untuk pelatihan mengemudi. Mobil-mobil ini dilengkapi dengan transmisi manual untuk membantu siswa belajar mengemudi manual.</p>
        </div>

        <div class="vehicle">
            <h2>Mobil Otomatis</h2>
            <p>Jika Anda lebih nyaman dengan mobil otomatis, kami juga menyediakan berbagai jenis mobil otomatis yang dapat digunakan untuk pelatihan mengemudi.</p>
        </div>

        <div class="vehicle">
            <h2>Mobil Mini</h2>
            <p>Kami juga memiliki mobil mini yang cocok untuk pemula dan siswa yang ingin belajar mengemudi dengan mobil kecil dan mudah dikendalikan.</p>
        </div>
    </div>
    <footer>
        &copy; 2023 Kendaraan yang Tersedia
    </footer>
</body>
</html>
