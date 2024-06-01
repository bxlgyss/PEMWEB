
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="indexstyle.css"/>
<title>Ruang Berita - Layanan Pengaduan</title>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #fff;
    }

    header {
        margin-top:60px; 
        background-color: #760504;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }

    h1 {
        margin: 0;
    }

    .news-container {
        display: flex;
        overflow-x: auto;
    }

    .news-item {
        flex: 0 0 auto;
        margin-right: 20px;
        background-color: #ffc857;
        color: #412234;
    }

    @media (max-width: 800px) {
        .news-container {
            flex-wrap: wrap;
        }

        .news-item {
            width: 100%;
            margin-right: 0;
        }
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 0 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .card {
        width: 100%;
        max-width: 320px;
        background-color: #f3e8d2;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        overflow: hidden;
        transition: transform 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card img {
        width: 100%;
        height: auto;
    }

    .card h2 {
        margin-top: 0;
        padding: 15px;
        background-color: #ffc857;
        color: #412234;
    }

    .card .card-body {
        padding: 15px;
    }

    .card .card-text {
        margin-bottom: 10px;
    }

    .card .btn {
        background-color: #760504;
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .card .btn:hover {
        background-color: #b12b24;
    }

    .news-item {
        margin-bottom: 20px;
    }

    .news-item h2 {
        margin-top: 0;
    }

    .news-item p {
        margin-top: 5px;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto; /* Menambahkan overflow:auto agar modal dapat di-scroll */
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 800px;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .modal-img {
        max-width: 100%; /* Menyesuaikan lebar gambar dengan lebar modal */
        height: auto; /* Menghindari distorsi gambar */
    }


    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
</head>
<body>
    <?php include "navbar.html" ?>
<header>
    <h1>Layanan Pengaduan - Ruang Berita</h1>
</header>
<div class="container news-container">
    <div class="card news-item">
        <img src="img/news1.jpeg" alt="News 1">
        <h2>Perubahan Layanan Pengaduan Online</h2>
        <div class="card-body">
            <p class="card-text">Pada tanggal 1 Maret 2024, Layanan Pengaduan Online kami mengalami perubahan besar. Kami telah memperbarui antarmuka pengguna untuk meningkatkan kemudahan penggunaan dan meningkatkan efisiensi dalam penanganan pengaduan. Dengan perubahan ini, pengguna akan mengalami proses yang lebih cepat dan responsif dalam menangani masalah mereka.</p>
            <button class="btn" data-target="#modal1" data-article="#news1">Baca Selengkapnya</button>
        </div>
    </div>
    <div class="card news-item" id="news2">
        <img src="news2.png" alt="News 2">
        <h2>Fitur Baru di Layanan Pengaduan Online</h2>
        <div class="card-body">
            <p class="card-text">Kami telah menambahkan beberapa fitur baru di Layanan Pengaduan Online kami. Kami senang mengumumkan bahwa Layanan Pengaduan Online kami telah melakukan pembaruan besar. Kami telah memperbaiki beberapa bug dan menambahkan beberapa fitur baru yang akan mempermudah penggunaan layanan ini.</p>
            <button class="btn" data-target="#modal2" data-article="#news2">Baca Selengkapnya</button>
        </div>
    </div>
    <div class="card news-item" id="news3">
        <img src="news3.png" alt="News 3">
        <h2>Informasi Layanan Pengaduan Online</h2>
        <div class="card-body">
            <p class="card-text">Kami ingin menginformasikan bahwa Layanan Pengaduan Online kami telah tersedia untuk umum. Kami menyediakan layanan ini untuk mempermudah pengguna dalam mengajukan pengaduan terkait masalah yang dialami. Kami akan melakukan tindak lanjut terhadap setiap pengaduan yang masuk dan akan memberikan respon secepat mungkin.</p>
            <button class="btn" data-target="#modal3" data-article="#news3">Baca Selengkapnya</button>
        </div>
    </div>
    <div class="card news-item" id="news4">
        <img src="news4.png" alt="News 4">
        <h2>Perubahan Layanan Pengaduan Online</h2>
        <div class="card-body">
            <p class="card-text">Pada tanggal 1 Maret 2024, Layanan Pengaduan Online kami mengalami perubahan besar. Kami telah memperbarui antarmuka pengguna untuk meningkatkan kemudahan penggunaan dan meningkatkan efisiensi dalam penanganan pengaduan. Dengan perubahan ini, pengguna akan mengalami proses yang lebih cepat dan responsif dalam menangani masalah mereka.</p>
            <button class="btn" data-target="#modal4" data-article="#news4">Baca Selengkapnya</button>
        </div>
    </div>
</div>

<div id="modal1" class="modal">
    <div class="modal-content">
        <img src="news1.jpeg" alt="News 1" class="modal-img">
        <h2>Perubahan Layanan Pengaduan Online</h2>
        <p class="card-text">Pada tanggal 1 Maret 2024, Layanan Pengaduan Online kami mengalami perubahan besar. Kami telah memperbarui antarmuka pengguna untuk meningkatkan kemudahan penggunaan dan meningkatkan efisiensi dalam penanganan pengaduan. Dengan perubahan ini, pengguna akan mengalami proses yang lebih cepat dan responsif dalam menangani masalah mereka.</p>
    </div>
</div>

<div id="modal2" class="modal">
    <div class="modal-content">
        <img src="news2.png" alt="News 2" class="modal-img">
        <h2>Fitur Baru di Layanan Pengaduan Online</h2>
        <p class="card-text">Kami telah menambahkan beberapa fitur baru di Layanan Pengaduan Online kami. Kami senang mengumumkan bahwa Layanan Pengaduan Online kami telah melakukan pembaruan besar. Kami telah memperbaiki beberapa bug dan menambahkan beberapa fitur baru yang akan mempermudah penggunaan layanan ini.</p>
    </div>
</div>

<div id="modal3" class="modal">
    <div class="modal-content">
        <img src="news3.png" alt="News 3" class="modal-img">
        <h2>Informasi Layanan Pengaduan Online</h2>
        <p class="card-text">Kami ingin menginformasikan bahwa Layanan Pengaduan Online kami telah tersedia untuk umum. Kami menyediakan layanan ini untuk mempermudah pengguna dalam mengajukan pengaduan terkait masalah yang dialami. Kami akan melakukan tindak lanjut terhadap setiap pengaduan yang masuk dan akan memberikan respon secepat mungkin.</p>
    </div>
</div>

<div id="modal4" class="modal">
    <div class="modal-content">
        <img src="news4.png" alt="News 4" class="modal-img">
        <h2>Perubahan Layanan Pengaduan Online</h2>
        <div class="card-body">
            <p class="card-text">Pada tanggal 1 Maret 2024, Layanan Pengaduan Online kami mengalami perubahan besar. Kami telah memperbarui antarmuka pengguna untuk meningkatkan kemudahan penggunaan dan meningkatkan efisiensi dalam penanganan pengaduan. Dengan perubahan ini, pengguna akan mengalami proses yang lebih cepat dan responsif dalam menangani masalah mereka.</p>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Zmi2KxmeTISw3gxy6R9W7D1bTl5V5ltzQ+Ay4b+8Qk6F9z" crossorigin="anonymous"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btns = document.querySelectorAll('.btn');
        const modals = document.querySelectorAll('.modal');

        btns.forEach(btn => {
            btn.addEventListener('click', () => {
                const targetModal = document.querySelector(btn.getAttribute('data-target'));
                targetModal.style.display = 'block';
            });
        });

        modals.forEach(modal => {
            modal.addEventListener('click', (e) => {
                if (e.target.classList.contains('modal')) {
                    modal.style.display = 'none';
                }
            });
        });
    });
</script>
</body>
</html>
