<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Trainer dan Pengurus</title>
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

        .person {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
        }

        .person h2 {
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
        <div class="person">
            <h2>John Doe</h2>
            <p>Trainer</p>
            <p>John Doe adalah seorang instruktur berlisensi dengan pengalaman bertahun-tahun dalam mengajar belajar mengemudi. Ia ahli dalam mengajarkan teknik mengemudi yang aman dan efisien.</p>
        </div>

        <div class="person">
            <h2>Jane Smith</h2>
            <p>Pengurus</p>
            <p>Jane Smith adalah pengurus di pusat pelatihan kami. Ia bertanggung jawab atas administrasi dan koordinasi program pelatihan.</p>
        </div>

        <div class="person">
            <h2>David Brown</h2>
            <p>Trainer</p>
            <p>David Brown adalah instruktur berlisensi yang berfokus pada pengajaran teknik mengemudi defensif. Ia telah membantu banyak siswa mencapai kepercayaan diri dalam mengemudi.</p>
        </div>
    </div>
    <footer>
        &copy; 2023 Nama Trainer dan Pengurus
    </footer>
</body>
</html>
