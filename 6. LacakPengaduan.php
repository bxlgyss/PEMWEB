<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="indexstyle.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Lacak Pengaduan - Layanan Pengaduan</title>
<style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.container {
    width: 80%;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #007bff;
    color: #fff;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>
</head>
<?php include "navbar.html" ?>
<body>
<div class="container">
    <h1>Lacak Pengaduan</h1>
    <form method="POST">
        <label for="nomor_pengaduan">Nomor Pengaduan:</label>
        <input type="text" id="nomor_pengaduan" name="nomor_pengaduan" placeholder="Masukkan nomor pengaduan...">
        <input type="submit" name="submit" value="Lacak">
    </form>
    <?php
    include "db_connect.php"; // Menghubungkan ke file db_connect.php

    if (isset($_POST["submit"])) {
        $nomor_pengaduan = $_POST["nomor_pengaduan"];

        // Prepare statement untuk mencari pengaduan berdasarkan nomor_pengaduan
        $sql = "SELECT pengaduan.id_pengaduan, pengaduan.tanggal, status_pengaduan.status 
                FROM pengaduan 
                JOIN status_pengaduan ON pengaduan.id_pengaduan = status_pengaduan.id_pengaduan
                WHERE pengaduan.id_pengaduan = ?";
        $stmt = $db->prepare($sql);

        if (!$stmt) {
            echo "Error saat menyiapkan statement: " . $db->error;
        } else {
            // Bind parameter ke statement
            $stmt->bind_param("i", $nomor_pengaduan);

            // Eksekusi statement
            if ($stmt->execute()) {
                // Ambil hasil dari statement
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    // Tampilkan data pengaduan dalam tabel
                    echo "<table>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>Nomor Pengaduan</th>";
                    echo "<th>Tanggal Pengaduan</th>";
                    echo "<th>Status</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id_pengaduan'] . "</td>";
                        echo "<td>" . $row['tanggal'] . "</td>";
                        echo "<td>" . $row['status'] . "</td>";
                        echo "</tr>";
                    }

                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "Tidak ada data pengaduan dengan nomor pengaduan tersebut.";
                }
            } else {
                echo "Error saat menjalankan statement: " . $stmt->error;
            }

            // Tutup statement
            $stmt->close();
        }
    }
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Zmi2KxmeTISw3gxy6R9W7D1bTl5V5ltzQ+Ay4b+8Qk6F9z" crossorigin="anonymous"></script>
</body>
</html>
