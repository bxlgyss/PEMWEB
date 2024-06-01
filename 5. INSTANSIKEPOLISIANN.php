<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexstyle.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Website Example</title>
    <style>
        body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  background-color: #FFFFFF; /* Change the background color of the whole page */
}

header {
  background-color:  #ffc857;
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

header .logo {
  display: flex;
  align-items: center;
}

header .logo img {
  width: 100px;
}

header .logo h1 {
  font-size: 24px;
  margin-left: 10px;
  color: #000000; /* Change the color of the text in the header */
}

header .contact-info {
  text-align: right;
  color: #000000; /* Change the color of the contact info text */
}

header .contact-info p {
  margin: 0;
  margin-bottom: 5px;
}

.status {
  background-color: #E0E0E0;
  padding: 20px;
  color: #000000; /* Change the color of the text in the status section */
}

.status h2 {
  font-size: 20px;
  margin-bottom: 10px;
  color: #2E4052; /* Change the color of the title in the status section */
}

.filters {
  margin-bottom: 1rem;
}

.filter-button {
  padding: 0.5rem 1rem;
  cursor: pointer;
  border: none;
  background-color: #ffc857;
  color:#000000;
  transition: background-color 0.3s, color 0.3s;
}

.filter-button:hover {
  background-color: #ddd;
  color: #000000;
}

.filter-button.active {
  background-color: #2E4052; /* Change the background color of the active filter button */
  color: white;
}

.status .pengaduan {
  list-style: none;
  padding: 0;
}

.status .pengaduan li {
  border-bottom: 1px solid #D0D0D0;
  padding: 15px 0;
  display: flex;
  align-items: center;
  background-color: #FFFFFF; /* Change the background color of the complaint items */
  margin-bottom: 1rem;
}

.status .pengaduan li .header {
  margin-right: 1rem;
  display: flex;
  align-items: center;
}

.status .pengaduan li .header img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  object-fit: cover;
  margin-right: 1rem;
}

.status .pengaduan li .header p {
  margin: 0;
  color: #412234; /* Change the color of the text in the complaint header */
  font-weight: bold;
}

.status .pengaduan li .content {
  flex: 1;
}

.status .pengaduan li .content p {
  margin-bottom: 5px;
  color: #2E4052; /* Change the color of the complaint text */
}

.status .pengaduan li .status {
  background-color: #412234; /* Change the background color of the complaint status */
  color: white;
  padding: 5px 10px;
  border-radius: 5px;
  margin-left: 1rem;
}
    </style>
</head>
<body>
<?php include "navbar.html" ?>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo">
            <h1>Kepolisian Republik Indonesia</h1>
        </div>
        <div class="contact-info">
            <p>Jalan Trunojoyo 3. Kebayoran Baru, Jakarta Selatan</p>
            <p>021-72799343 | bagdumas_itwasum@polri.go.id</p>
        </div>
    </header>
    <main>
        <section class="status">
            <h2>Status Pengaduan</h2>
            <div class="filters">
              <button class="filter-button active" data-filter="all">Semua</button>
              <button class="filter-button" data-filter="belum-diproses">Belum Diproses</button>
              <button class="filter-button" data-filter="proses">Proses</button>
              <button class="filter-button" data-filter="selesai">Selesai</button>
            </div>
            <ul class="pengaduan">
              <li class="belum-diproses">
                <div class="header">
                  <img src="polisi-daerah-metro.png" alt="Police">
                  <p>Sukarjo</p>
                </div>
                <p>Pencurian Motor dengan No pol L 1234 ZN
                  <br>Pencurian motor terjadi di ....... </p>
                <br>
                <span class="status">Belum Diproses</span>
              </li>
              <li class="belum-diproses">
                <div class="header">
                  <img src="polisi-daerah-metro.png" alt="Police">
                  <p>Sukarjo</p>
                </div>
                <p>Pencurian Motor dengan No pol L 1234 ZN
                  <br>Pencurian motor terjadi di ....... </p>
                <br>
                <span class="status">Belum Diproses</span>
              </li>
              <li class="selesai">
                <div class="header">
                  <img src="polisi-daerah-metro.png" alt="Police">
                  <p>Sukarjo</p>
                </div>
                <p>Pencurian Motor dengan No pol L 1234 ZN
                  <br>Pencurian motor terjadi di ....... </p>
                <br>
                <span class="status">Selesai</span>
              </li>
            </ul>
            <div id="processed-complaints"></div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Zmi2KxmeTISw3gxy6R9W7D1bTl5V5ltzQ+Ay4b+8Qk6F9z" crossorigin="anonymous"></script>

    <script>
      // Get all the filter buttons and create a map of filter values to buttons
      const filterButtons = document.querySelectorAll('.filters .filter-button');
      const filterButtonMap = new Map();
      filterButtons.forEach(button => {
        const filterValue = button.dataset.filter;
        filterButtonMap.set(filterValue, button);
        button.addEventListener('click', () => filterComplaints(filterValue));
      });
    
      // Set the initial filter to "all"
      filterComplaints('all');
  
      // Filter the complaints based on the selected filter value
function filterComplaints(filterValue) {
  const complaints = document.querySelectorAll('.pengaduan li');
  complaints.forEach(complaint => {
    if (filterValue === 'all') {
      complaint.style.display = ''; // Menampilkan semua keluhan
    } else if (complaint.classList.contains(filterValue)) {
      complaint.style.display = ''; // Menampilkan keluhan yang sesuai dengan filter
    } else {
      complaint.style.display = 'none'; // Menyembunyikan keluhan yang tidak sesuai dengan filter
    }
  });

  // Highlight the selected filter button
  filterButtons.forEach(button => button.classList.remove('active'));
  filterButtonMap.get(filterValue).classList.add('active');

  // Menyembunyikan atau menampilkan keluhan yang sedang diproses
  if (filterValue === 'proses') {
    displayProcessedComplaints();
  } else {
    hideProcessedComplaints();
  }
}

// Menampilkan keluhan yang sedang diproses
function displayProcessedComplaints() {
  const processedComplaints = document.querySelectorAll('.pengaduan li.proses');
  processedComplaints.forEach(complaint => {
    complaint.style.display = ''; // Menampilkan keluhan yang sedang diproses
  });
}

// Menyembunyikan keluhan yang sedang diproses
function hideProcessedComplaints() {
  const processedComplaints = document.querySelectorAll('.pengaduan li.proses');
  processedComplaints.forEach(complaint => {
    complaint.style.display = 'none'; // Menyembunyikan keluhan yang sedang diproses
  });
}     
    </script>
</body>
</html>
