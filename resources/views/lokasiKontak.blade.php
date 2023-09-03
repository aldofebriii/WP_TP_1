<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi dan Kontak Perusahaan</title>
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

        .contact-info {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
        }

        .contact-info h2 {
            margin-top: 0;
        }

        .contact-info p {
            margin: 0;
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
        <div class="contact-info">
            <h2>Alamat</h2>
            <p>Jl. Contoh No. 123</p>
            <p>Kota Contoh</p>
            <p>Kode Pos: 12345</p>
        </div>

        <div class="contact-info">
            <h2>Nomor Telepon</h2>
            <p>(123) 456-7890</p>
        </div>

        <div class="contact-info">
            <h2>Email</h2>
            <p>info@perusahaancontoh.com</p>
        </div>

        <div class="contact-info">
            <h2>Peta Lokasi</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12345.678910111213!2d0.000000!3d0.000000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMDDCsDA2JzQwLjEiTiAwMcKwMzknNTMuNyJF!5e0!3m2!1sen!2sus!4v1561525750525!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <footer>
        &copy; 2023 Lokasi dan Kontak Perusahaan
    </footer>
</body>
</html>
