<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha384-Za2dTLzhCf+j9LtKQOzW+3//yKY3QzqGSPJkStNC5w3N1QZCaG52fNk7Aw5gDKXa" crossorigin="anonymous" />
  <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="indexstyle.css" />
  <title>Galeri Pengaduan</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fff;
    }

    .title {
      margin-top: 60px;
      background-color: #760504;
      padding: 20px;
      text-align: center;
      color: white;
      font-size: 2em;
      margin-bottom: 20px;
    }

    .complaint {
      border: 2px solid #b12b24;
      border-radius: 5px;
      padding: 20px;
      margin: 20px auto;
      width: 70%;
      background-color: white;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .complaint h3 {
      margin-top: 0;
      color: #412234;
    }

    .complaint p {
      margin-bottom: 10px;
    }

    .status {
      padding: 5px 10px;
      border-radius: 5px;
      display: inline-block;
      font-size: 12px;
      margin-top: 10px;

    }

    .pending .status {
      background-color: #b12b24;
    }

    .processing .status {
      background-color: #b12b24;
    }

    .completed .status {
      background-color: #b12b24;
    }

    .date {
      font-size: 12px;
      color: #888888;
      margin-bottom: 10px;
      display: flex;
      align-items: center;
    }

    .type {
      font-size: 14px;
      font-weight: bold;
      margin-left: 10px;
    }

    .features {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 20px;
    }

    .feature {
      display: flex;
      align-items: center;
    }

    .feature i {
      font-size: 20px;
      margin-right: 10px;
    }

    .feature span {
      font-size: 12px;
    }

    .evidence {
      display: flex;
      align-items: center;
    }

    .evidence a {
      font-size: 10px;
    }

    .evidence p {
      margin: 0 0 0 120px;
    }

    .evidence img {
      margin-bottom: 10px;
      width: 200px;
      height: 100px;
    }

    .evidence div {
      margin-top: 10px;
    }

    .evidence img.inline {
      display: inline-block;
      width: 200px;
      height: 100px;
      margin-right: 10px;
    }

    .like-image {
      width: 20px;
      height: 20px;
      vertical-align: middle;
    }

    .share-image {
      width: 20px;
      height: 20px;
      vertical-align: middle;
    }

    .komen-image {
      width: 20px;
      height: 20px;
      vertical-align: middle;
    }

    .large-image {
      width: 300px;
      height: 200px;
    }
  </style>
</head>
<?php include "navbar.html" ?>

<body style="background: radial-gradient(circle at center, #ff7eb3, #760504);">
  <h2 class="title">Galeri Pengaduan</h2>
  <p style="text-align:center;padding-bottom:20px;color:white;">Di sini, Anda dapat melihat pengaduan-pengaduan
    sebelumnya yang telah diatasi atau masih dalam proses penanganan.</p>
  <?php
  include ("db_connect.php");
  $sql = "SELECT * FROM pengaduan";
  $hasil = mysqli_query($db, $sql);

  $jmlArtikel = mysqli_num_rows($hasil);
  if ($jmlArtikel > 0) {
    while ($row = mysqli_fetch_assoc($hasil)) {

      ?>
      <div class="container">
        <div class="row">
          <div class="complaint pending">
            <p class="date"><span><?=$row["tanggal"];?></span> <span class="type">Kondisi Fisik Lingkungan</span></p>
            <h3>Pohon Tumbang di Taman Kota</h3>
            <p><?= $row["pesan"];?> </p>
            <div class="evidence">
              <img src="https://cdn.antaranews.com/cache/730x487/2019/12/10/pohon-tumbang.jpeg" class="inline">
            </div>
            <div>Evidence images<br>
              <a href="path/to/document.pdf" download>Download document</a>
            </div>
            <div class="status pending" style="color: white;">Belum Diproses</div>
            <div class="features">
              <div class="feature">
                <i class="fa fa-comments"></i>
                <button id="komenButton1" onclick="" style="background-color:transparent; border:none;">
                  <img src="img/komen.png" alt="Komen" class="komen-image"><br>
                  Komentar
                </button>
              </div>
              <div class="feature">
                <i class="fa fa-thumbs-o-up"></i>
                <button id="likeButton1" onclick="likeComplaint(1, this)"
                  style="background-color:transparent; border:none;">
                  <img src="img/like.png" alt="Like" class="like-image"><br>
                  Suka
                </button>
              </div>
              <div class="feature">
                <i class="fa fa-share-alt"></i>
                <button id="shareButton1" onclick="shareComplaint(1)" style="background-color:transparent; border:none;">
                  <img src="img/share.png" alt="Share" class="share-image"><br>
                  Bagikan</button>
              </div>
            </div>
          </div>
        </div>
        <?php
    }
  }
  ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-KyZXEAg3QhqLMpG8r+Zmi2KxmeTISw3gxy6R9W7D1bTl5V5ltzQ+Ay4b+8Qk6F9z"
      crossorigin="anonymous"></script>

    <script>
      function likeComplaint(complaintId, button) {
        // Tambahkan logika untuk menambahkan suka pada pengaduan dengan ID tertentu
        alert("Pengaduan dengan ID " + complaintId + " disukai!");

        // Ubah gambar like menjadi likeaktif
        var likeImage = button.querySelector('.like-image');
        likeImage.src = 'img/likeaktif (3).png';
      }

      function shareComplaint(complaintId) {
        // Tambahkan logika untuk membagikan pengaduan kepada teman
        alert("Pengaduan dengan ID " + complaintId + " dibagikan!");
      }

    </script>
    <script>
        var myCarousel = document.querySelector('#carouselExampleCaptions')
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 2000,
            wrap: true
        })

        document.addEventListener("DOMContentLoaded", function () {
            const dropdownItems = document.querySelectorAll('.dropdown-item');

            dropdownItems.forEach(item => {
                item.addEventListener('mouseover', function () {
                    this.classList.add('bg-info');
                    this.classList.add('text-white');
                });

                item.addEventListener('mouseleave', function () {
                    this.classList.remove('bg-info');
                    this.classList.remove('text-white');
                });
            });
        });
        document.addEventListener("DOMContentLoaded", function () {
            const infoBoxes = document.querySelectorAll('.card');

            infoBoxes.forEach(box => {
                box.addEventListener('mouseover', function () {
                    this.classList.add('bg-info');
                    this.classList.add('text-white');
                });

                box.addEventListener('mouseleave', function () {
                    this.classList.remove('bg-info');
                    this.classList.remove('text-white');
                });
            });
        });

        window.onscroll = function () {
            var navbar = document.querySelector('.navbar');
            if (window.pageYOffset > 0) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        };
    </script>
</body>

</html>