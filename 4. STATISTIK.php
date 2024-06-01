<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="indexstyle.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Statistik dan Analisis - Layanan Pengaduan</title>
<style>
/* CSS */
body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
        }
        h1 {
        font-size: 2.5rem;
    }

    h2 {
        font-size: 1.75rem;
        margin-bottom: 2rem;
        border-bottom: 5px solid #ffc857;
        padding-bottom: 0.5rem;
    }
        .header {
            margin-top: 60px;
            background-color: #760504;
            color: #412234;
            padding: 1rem;
            text-align: center;
        }

        .chart-header{
            margin-bottom: 1.5rem;
        }
        .header h1 {
        color: white;
        } 

        .container {
            padding: 3rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 0.5rem;
        }

        .header h2 {
            color: #000000;
        }

        .chart-header {
            margin-bottom: 1.5rem;
        }

        .chart {
            border: 1px solid #ddd;
            border-radius: 0.5rem;
            padding: 1rem;
            box-shadow: 0 0.2rem 0.5rem rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        h2.chart-label {
        color: #000000;
        background-color: #ffc857;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .chart-container-inner {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    padding: 1rem;
    box-sizing: border-box;
    }

    .chart-container-inner table {
        flex: 1;
        margin-right: 1rem;
    }

    .chart-container-inner .chart {
        flex: 1;
        margin-left: 1rem;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }

    th {
        background-color: #760504;
        color: #FFFFFF;
    }

    tr:nth-child(even) {
        background-color: #f3e8d2;
    }
    </style>
</head>
<?php include "navbar.html" ?>
<body>
    <body onload="drawChart()">
    <div class="header">
        <h1>Statistik dan Analisis</h1>
    </div>
    <div class="chart-container">
        <div class="chart-header">
          <h2>Jumlah Pengaduan per Jenis</h2>
        </div>
        <div class="chart-container-inner">
            <table>
                   <thead>
                    <tr>
                        <th>Jenis Pengaduan</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                 <tbody>
                    <tr>
                        <td>Pelayanan Publik</td>
                        <td>100</td>
                    </tr>
                        <tr>
                            <td>Jalan &amp; Lingkungan</td>
                            <td>80</td>
                        </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>Kesehatan</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>Keamanan dan Kriminalitas</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td>Lain-lain</td>
                        <td>50</td>
                    </tr>
                 </tbody>
            </table>
            <div class="chart" id="jenis-chart-container">
                <canvas id="jenis-chart" width="400" height="100"></canvas>
            </div>
        </div>
    <body onload="drawChartWaktu()">
    </div>
        <div class="chart-container card card-body">
            <div class="chart-header">
                <h2>Rata-rata Waktu Penyelesaian Pengaduan (Hari)</h2>
            </div>
            <div class="chart-container-inner">
                <table>
                    <thead>
                        <tr>
                            <th>Jenis Pengaduan</th>
                            <th>Rata-rata Waktu Penyelesaian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pelayanan Publik</td>
                            <td>15 hari</td>
                        </tr>
                        <tr>
                            <td>Jalan & Lingkungan</td>
                            <td>20 hari</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>10 hari</td>
                        </tr>
                        <tr>
                            <td>Kesehatan</td>
                            <td>12 hari</td>
                        </tr>
                        <tr>
                            <td>Keamanan dan Kriminalitas</td>
                            <td>23 hari</td>
                        </tr>
                        <tr>
                            <td>Lain-lain</td>
                            <td>25 hari</td>
                        </tr>
                    </tbody>
                </table>    
                <div class="chart" id="waktu-chart-container">
                    <canvas id="waktu-chart" width="600" height="200"></canvas>
                </div>           
            </div>
        </div>
    <body onload="drawWilayahChart()">
    <div class="chart-container">
            <div class="chart-header">
                <h2>Pengaduan Terbanyak dari Wilayah</h2>
            </div>
            <div class="chart-container-inner">
                <table>
                    <thead>
                        <tr>
                            <th>Wilayah</th>
                            <th>Jumlah Pengaduan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jakarta Timur</td>
                            <td>120</td>
                        </tr>
                        <tr>
                            <td>Jakarta Barat</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Jakarta Selatan</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>Jakarta Utara</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Jakarta Pusat</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>Bogor</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <td>Bekasi</td>
                            <td>55</td>
                        </tr>
                        <tr>
                            <td>Depok</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td>tanggerang</td>
                            <td>65</td>
                        </tr>
                    </tbody>
                </table>
                <div class="chart" id="wilayah-chart-container">
                    <canvas id="wilayah-chart" width="400" height="300"></canvas>
                </div>
            </div>
        </div>
        <h2 class="chart-label">10 Pengaduan Terbaru</h2>
        <table>
            <thead>
                <tr>
                    <th>Nomor Pengaduan</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#001</td>
                    <td>01-01-2022</td>
                    <td>Sedang Diproses</td>
                </tr>
                <tr>
                    <td>#002</td>
                    <td>02-01-2022</td>
                    <td>Selesai</td>
                </tr>
                <tr>
                    <td>#003</td>
                    <td>03-01-2022</td>
                    <td>Belum Diproses</td>
                </tr>
                <tr>
                    <td>#004</td>
                    <td>04-01-2022</td>
                    <td>Sedang Diproses</td>
                </tr>
                <tr>
                    <td>#005</td>
                    <td>05-01-2022</td>
                    <td>Selesai</td>
                </tr>
                <tr>
                    <td>#006</td>
                    <td>06-01-2022</td>
                    <td>Belum Diproses</td>
                </tr>
                <tr>
                    <td>#007</td>
                    <td>07-01-2022</td>
                    <td>Sedang Diproses</td>
                </tr>
                <tr>
                    <td>#008</td>
                    <td>08-01-2022</td>
                    <td>Selesai</td>
                </tr>
                <tr>
                    <td>#009</td>
                    <td>09-01-2022</td>
                    <td>Belum Diproses</td>
                </tr>
                <tr>
                    <td>#010</td>
                    <td>10-01-2022</td>
                    <td>Sedang Diproses</td>
                </tr>
            </tbody>
        </table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Zmi2KxmeTISw3gxy6R9W7D1bTl5V5ltzQ+Ay4b+8Qk6F9z" crossorigin="anonymous"></script>
<script src="chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      drawChartWaktu();
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        drawWilayahChart();
    });
</script>
</body>
</html>
