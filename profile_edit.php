<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NIK = htmlspecialchars($_POST['NIK']);
    $nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $no_telp = htmlspecialchars($_POST['no_telp']);
    $email_pengguna = htmlspecialchars($_POST['email_pengguna']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);

    // Validasi data
    if (empty($NIK) || empty($nama_lengkap) || empty($tanggal_lahir) || empty($alamat) || empty($no_telp) || empty($email_pengguna) || empty($jenis_kelamin)) {
        $error_message = "Semua field harus diisi.";
    } else {
        // Query untuk memasukkan data ke tabel profile
        $sql = "INSERT INTO profile (NIK, nama_lengkap, tanggal_lahir, alamat, no_telp, email_pengguna, jenis_kelamin)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        // Mempersiapkan statement
        if ($stmt = $db->prepare($sql)) {
            $stmt->bind_param("sssssss", $NIK, $nama_lengkap, $tanggal_lahir, $alamat, $no_telp, $email_pengguna, $jenis_kelamin);

            // Menjalankan statement
            if ($stmt->execute()) {
                $success_message = "Profil berhasil disimpan.";
            } else {
                $error_message = "Kesalahan: " . $stmt->error;
            }

            $stmt->close();
        } else {
            $error_message = "Kesalahan: " . $db->error;
        }

        $db->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Layanan Aspirasi Pengaduan Online Tuban</title>
  <link rel="icon" href="img/LOGO LAPOR.png">
  <link rel="stylesheet" href="indexstyle.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Website Example</title>
  <style>
    body {
      background: #750504;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #BA68C8
    }

    .profile-button {
      background: #b12b24;
      box-shadow: none;
      border: none
    }

    .container {
      width: 800px;
      /* Change the width of the container here */
      max-width: 100%;
      /* Ensure the container is responsive */
    }

    .profile-button:hover {
      background: #750504
    }

    .profile-button:focus {
      background: #750504;
      box-shadow: none
    }

    .profile-button:active {
      background: #b12b24;
      box-shadow: none
    }

    .back:hover {
      color: #b12b24;
      cursor: pointer
    }

    .labels {
      font-size: 11px
    }
  </style>
</head>

<body>
  <?php include "navbar.html" ?>
  
  <section>
    <div class="container rounded bg-white mt-4 mb-4">
      <div class="row">
        <div class="col-md-5 ">
          <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <img class="rounded-circle mt-5" width="100px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            <span class="font-weight-bold">Edogaru</span>
            <span class="text-black-50">edogaru@mail.com.my</span>
          </div>
        </div>
        <div class="col-md-5 ">
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="text-right">Pengaturan Profil</h4>
            </div>
            <?php if (!empty($success_message)) : ?>
              <div class="alert alert-success">
                <?php echo $success_message; ?>
              </div>
            <?php endif; ?>
            <?php if (!empty($error_message)) : ?>
              <div class="alert alert-danger">
                <?php echo $error_message; ?>
              </div>
            <?php endif; ?>
            <form action="" method="POST">
              <div class="row mt-3">
                <div class="col-md-12">
                  <label class="labels">Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div class="col-md-12">
                  <label class="labels">Nomor Telefon</label>
                  <input type="text" name="no_telp" class="form-control" placeholder="Masukkan Nomor Telefon" required>
                </div>
                <div class="col-md-12">
                  <label class="labels">Alamat Rumah</label>
                  <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Rumah" required>
                </div>
                <div class="col-md-12">
                  <label class="labels">Email</label>
                  <input type="email" name="email_pengguna" class="form-control" placeholder="Masukkan Email" required>
                </div>
                <div class="col-md-12">
                  <label class="labels">NIK</label>
                  <input type="text" name="NIK" class="form-control" placeholder="Masukkan NIK" required>
                </div>
                <div class="col-md-12">
                  <label class="labels">Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" class="form-control" required>
                </div>
                <div class="col-md-12">
                  <label class="labels">Jenis Kelamin</label>
                  <input type="text" name="jenis_kelamin" class="form-control" placeholder="Masukkan Jenis Kelamin" required>
                </div>
              </div>
              <div class="mt-5 text-center">
                <button class="btn btn-primary profile-button" type="submit">Simpan Profile</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Zmi2KxmeTISw3gxy6R9W7D1bTl5V5ltzQ+Ay4b+8Qk6F9z"
        crossorigin="anonymous"></script>
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