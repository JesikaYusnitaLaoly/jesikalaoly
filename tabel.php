<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Perkalian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            padding: 10px 20px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        h2 {
            text-align: center;
            margin-top: 30px;
        }

        table {
            border-collapse: collapse;
            margin: 30px auto;
            text-align: center;
        }

        th, td {
            border: 1px solid #000;
            padding: 10px;
        }

        th {
            background-color: #00BFFF;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <ul>
            <li><a href="index.html">Beranda</a></li>
            <li><a href="profil.html">Profil</a></li>
            <li><a href="tabel.php">Tabel</a></li>
        </ul>
    </nav>

    <!-- Judul -->
    <h2>Tabel Perkalian 10 x 10</h2>

    <!-- Tabel -->
    <table>
        <thead>
            <tr>
                <th>*</th>
                <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<th>$i</th>";
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr>";
                    echo "<th>$i</th>";
                    for ($j = 1; $j <= 10; $j++) {
                        $hasil = $i * $j;
                        echo "<td>$hasil</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>
