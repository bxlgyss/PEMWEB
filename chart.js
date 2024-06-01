function drawChart() {
  const jenisData = document.querySelectorAll('#jenis-table tbody tr td:nth-child(2)');
  const jenisLabels = ['Pelayanan Publik', 'Jalan & Lingkungan', 'Pendidikan', 'Kesehatan','Keamanan dan Kriminalitas', 'Lain-lain'];
  const jenisDataValues = [100, 80, 60, 40, 35 ,50];

  const jenisChart = new Chart(document.getElementById('jenis-chart'), {
    type: 'bar',
    data: {
      labels: jenisLabels,
      datasets: [{
        label: 'Jumlah Pengaduan per Jenis',
        data: jenisDataValues,
        backgroundColor: ['#6c8196', '#bdd9bf','#f5dcab',],
        borderColor: ['#6c8196', '#bdd9bf','#f5dcab',],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
}

function drawChartWaktu() {
  const waktuData = [15, 20, 10, 12, 23, 25];

  const labels = ['Pelayanan Publik', 'Jalan & Lingkungan', 'Pendidikan', 'Kesehatan','Keamanan dan Kriminalitas', 'Lain-lain'];

  const ctx = document.getElementById('waktu-chart').getContext('2d');
  const chart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [
        {
          label: 'Rata-rata Waktu Penyelesaian (Hari)',
          data: waktuData,
          backgroundColor: ['#6c8196', '#bdd9bf','#f5dcab',],
          borderColor: ['#6c8196', '#bdd9bf','#f5dcab',],
          borderWidth: 1
        }
      ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
}

function drawWilayahChart() {
  const wilayahData = {
      'Jakarta Timur': 120,
      'Jakarta Barat': 100,
      'Jakarta Selatan': 80,
      'Jakarta Utara': 50,
      'Jakarta Pusat': 30,
      'Bogor': 70,
      'Bekasi' : 55,
      'Depok' : 40,
      'Tangerang' : 65,
  };

  const labels = Object.keys(wilayahData);

  const ctx = document.getElementById('wilayah-chart').getContext('2d');

  new Chart(ctx, {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [{
            data: Object.values(wilayahData),
            backgroundColor: ['#6c8196', '#bdd9bf','#f5dcab',],
            borderColor: ['#6c8196', '#bdd9bf','#f5dcab',],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        aspectRatio: 1, // Rasio ukuran tampilan
        width: 400, // Lebar
        height: 300 // Tinggi
    }
});
}