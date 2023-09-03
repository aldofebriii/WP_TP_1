<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Belajar Stir Mobil</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
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
        <table>
            <tr>
                <th>Hari</th>
                <th>Jam</th>
                <th>Instruktur</th>
            </tr>
            <tr>
                <td>Senin</td>
                <td>09:00 - 11:00</td>
                <td>John Doe</td>
            </tr>
            <tr>
                <td>Selasa</td>
                <td>14:00 - 16:00</td>
                <td>Jane Smith</td>
            </tr>
            <tr>
                <td>Rabu</td>
                <td>10:00 - 12:00</td>
                <td>David Brown</td>
            </tr>
            <tr>
                <td>Kamis</td>
                <td>15:00 - 17:00</td>
                <td>Lisa Davis</td>
            </tr>
            <tr>
                <td>Jumat</td>
                <td>08:00 - 10:00</td>
                <td>Michael Wilson</td>
            </tr>
        </table>
    </div>
    <footer>
        &copy; 2023 Jadwal Belajar Stir Mobil
    </footer>
</body>
</html>
