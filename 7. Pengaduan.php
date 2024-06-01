<?php
include "db_connect.php";
if (isset($_POST["submit"])) {
    $category = $_POST["category"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $image = $_FILES["image"]["name"];
    $vidio = $_FILES["vidio"]["name"];

    $target_dir = "uploads/";
    $target_image = $target_dir . basename($_FILES["image"]["name"]);
    $target_vidio = $target_dir . basename($_FILES["vidio"]["name"]);

    move_uploaded_file($_FILES["image"]["tmp_name"], $target_image);
    move_uploaded_file($_FILES["vidio"]["tmp_name"], $target_vidio);
    $sql = "INSERT INTO pengaduan (kategori_pengaduan, nama, email, pesan, gambar, vidio)
            VALUES ('$category', '$name', '$email', '$message', '$target_image', '$target_vidio')";

    if ($db->query($sql)) {
        echo "Pengaduan berhasil dikirim!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexstyle.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Web Layanan Pengaduan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: radial-gradient(circle at center, #ff7eb3, #760504);
            color: #2e4052;
        }

        .main-wrapper {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 60px auto;
        }

        .container {
            max-width: 800px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            margin: 20px;
        }

        .user,
        .instansiterhangat {
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 400px;
            padding: 20px;
            margin: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .user-status-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-left: 25px;
        }

        .user-status {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px;
        }


        .user-status span {
            font-weight: bold;
        }


        h1 {
            text-align: center;
            color: #2e4052;
        }

        h3 {

            color: #2e4052;
            font-size: 20px;
        }

        .category h2 {
            margin-bottom: 10px;
            font-size: 20px;
            color: #2e4052;
        }

        label {
            display: block;
            font-weight: bold;
            color: #2e4052;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #2e4052;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #F3E8D2;
            color: #2e4052;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #b12b24;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #760504;
        }

        .instansi-info {
            text-align: left;
            width: 100%;
        }

        .instansi-info ul {
            list-style-type: none;
            padding: 0;
        }

        .instansi-info li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .instansi-info li img {
            margin-right: 10px;
            margin-left: 30px;
            width: 40px;
            height: 40px;
        }
    </style>
</head>
<?php include "navbar.html" ?>

<body>
    <div class="main-wrapper">
        <div class="container">
            <h1>Layanan Pengaduan</h1>

            <div class="category">
                <h2>Pengaduan</h2>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <?php
                    $sql_kategori = "SELECT kategori FROM kategori_pengaduan";
                    $result_kategori = $db->query($sql_kategori);
                    $sql_wilayah = "SELECT kecamatan FROM wilayah";
                    $result_wilayah = $db->query($sql_wilayah);
                    $sql_intansi = "SELECT nama_intansi FROM intansi_negara";
                    $result_intansi = $db->query($sql_intansi);
                    if ($result_kategori->num_rows > 0) {
                        echo '<div class="form-group">
                                <label for="category">Kategori Pengaduan:</label>
                                <select name="category" required>';
                        while ($row = $result_kategori->fetch_assoc()) {
                            echo '<option value="' . $row["kategori"] . '">' . $row["kategori"] . '</option>';
                        }

                        echo '</select>
                            </div>';
                    } else {
                        echo "Tidak ada data kategori pengaduan.";
                    }

                    if ($result_wilayah->num_rows > 0) {
                        echo '<div class="form-group">
                                <label for="wilayah">Wilayah:</label>
                                <select name="wilayah" required>';
                        while ($row = $result_wilayah->fetch_assoc()) {
                            echo '<option value="' . $row["kecamatan"] . '">' . $row["kecamatan"] . '</option>';
                        }

                        echo '</select>
                            </div>';
                    } else {
                        echo "Tidak ada data wilayah.";
                    }
                    if ($result_intansi->num_rows > 0) {
                        echo '<div class="form-group">
                                <label for="intansi">intansi:</label>
                                <select name="intansi" required>';
                        while ($row = $result_intansi->fetch_assoc()) {
                            echo '<option value="' . $row["nama_intansi"] . '">' . $row["nama_intansi"] . '</option>';
                        }

                        echo '</select>
                            </div>';
                    } else {
                        echo "Tidak ada data intansi.";
                    }
                    ?>
                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan:</label>
                        <textarea name="message" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Gambar:</label>
                        <input type="file" name="image">
                    </div>
                    <div class="form-group">
                        <label for="video">Upload Video:</label>
                        <input type="file" name="vidio">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Kirim Pengaduan">
                    </div>
                </form>
            </div>

            <!-- Tombol Kembali -->
            <button id="kembaliButton">Kembali</button>
        </div>

        <div class="sidebar">
            <div class="user">
                <div class="user-info">
                    <h3>Cintha Hafrida Putri</h3>
                    <p>cintha22059@mhs.unesa.ac.id</p>
                    <div class="user-status-container">
                        <div class="user-status">
                            <span>Terverifikasi</span> 0
                        </div>
                        <div class="user-status">
                            <span>Diproses</span> 0
                        </div>
                        <div class="user-status">
                            <span>Selesai</span> 0
                        </div>
                    </div>
                </div>
            </div>
            <div class="instansiterhangat">
                <div class="instansi-info">
                    <h1>Instansi Terhangat</h1>
                    <ul class="instansi-terhangat">
                        <li>
                            <img src="img/instansi.png" alt="">
                            <p>Kepolisian Negara Republik Indonesia</p>
                            <img src="img/dokumen.png" alt="">
                            <p>20k</p>
                        </li>
                        <li>
                            <img src="img/instansi.png" alt="">
                            <p>Kementrian Pendidikan, Kebudayaan, Riset dan Teknologi</p>
                            <img src="img/dokumen.png" alt="">
                            <p>10k</p>
                        </li>
                        <li>
                            <img src="img/instansi.png" alt="">
                            <p>Kementrian Sosial</p>
                            <img src="img/dokumen.png" alt="">
                            <p>8k</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Zmi2KxmeTISw3gxy6R9W7D1bTl5V5ltzQ+Ay4b+8Qk6F9z"
        crossorigin="anonymous"></script>

    <script>
        document.getElementById("kembaliButton").addEventListener("click", function () {
            history.back();
        });
    </script>

</body>

</html>