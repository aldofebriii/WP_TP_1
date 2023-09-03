<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Jasa Belajar Mengemudi</title>
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

        .service {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
        }

        .service h2 {
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
        <div class="service">
            <h2>Paket Dasar</h2>
            <p>Ini adalah paket dasar yang mencakup:</p>
            <ul>
                <li>10 jam pelatihan mengemudi</li>
                <li>Instruktur berlisensi</li>
                <li>Kendaraan pelatihan</li>
                <li>Sertifikat kelulusan</li>
            </ul>
            <p>Harga: $300</p>
        </div>

        <div class="service">
            <h2>Paket Lanjutan</h2>
            <p>Ini adalah paket lanjutan yang mencakup:</p>
            <ul>
                <li>20 jam pelatihan mengemudi</li>
                <li>Instruktur berlisensi</li>
                <li>Kendaraan pelatihan</li>
                <li>Sertifikat kelulusan</li>
                <li>Simulasi ujian praktik</li>
            </ul>
            <p>Harga: $500</p>
        </div>

        <div class="service">
            <h2>Paket Premium</h2>
            <p>Ini adalah paket premium yang mencakup:</p>
            <ul>
                <li>30 jam pelatihan mengemudi</li>
                <li>Instruktur berlisensi</li>
                <li>Kendaraan pelatihan</li>
                <li>Sertifikat kelulusan</li>
                <li>Simulasi ujian praktik</li>
                <li>Pelayanan antar-jemput</li>
            </ul>
            <p>Harga: $800</p>
        </div>
    </div>
    <footer>
        &copy; 2023 Paket Jasa Belajar Mengemudi
    </footer>
</body>
</html>
