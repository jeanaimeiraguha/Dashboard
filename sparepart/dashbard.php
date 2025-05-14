<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PayDo Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f2f6f9;
    }
    .sidebar {
      height: 100vh;
      background-color: #1064ee;
      color: white;
      padding-top: 20px;
    }
    .sidebar .nav-link {
      color: white;
      margin-bottom: 10px;
    }
    .sidebar .nav-link:hover {
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 10px;
    }
    .chart-box {
      background: white;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-2 sidebar d-flex flex-column">
        <div class="mb-4 text-center">
          <h4><i class="fas fa-wallet"></i> <span style="color: yellow">Pay</span>Do</h4>
        </div>
        <nav class="nav flex-column">
          <a class="nav-link" href="dashbard.php">home</a>
          <a class="nav-link" href="#">stockout</a>
          <a class="nav-link" href="#"></a>
          <a class="nav-link" href="display.php">admin</a>
          <a class="nav-link" href="#">stockin</a>
          <a class="nav-link" href="display.php">sparepart</a>
          <a class="nav-link" href="#">Reports</a>
        </nav>
        <div class="mt-auto">
          <a class="nav-link text-white" href="#"><i class="fas fa-user-circle"></i> Profile</a>
          <a class="nav-link text-danger" href="#"><i class="fas fa-cog"></i> Settings</a>
        </div>
      </div>

      <!-- Main Content -->
      <div class="col-md-10 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3>Dashboard</h3>
          <div class="d-flex">
            <input type="text" class="form-control me-2" placeholder="Search anything..." />
            <button class="btn btn-primary">+ Create account</button>
          </div>
        </div>

        <!-- Doughnut Charts -->
        <div class="row">
          <div class="col-md-3">
            <div class="chart-box text-center">
              <h6>Youtube</h6>
              <canvas id="chartYoutube"></canvas>
            </div>
          </div>
          <div class="col-md-3">
            <div class="chart-box text-center">
              <h6>Website</h6>
              <canvas id="chartWebsite"></canvas>
            </div>
          </div>
          <div class="col-md-3">
            <div class="chart-box text-center">
              <h6>Facebook</h6>
              <canvas id="chartFacebook"></canvas>
            </div>
          </div>
          <div class="col-md-3">
            <div class="chart-box text-center">
              <h6>Instagram</h6>
              <canvas id="chartInstagram"></canvas>
            </div>
          </div>
        </div>

        <!-- Line Chart -->
        <div class="chart-box">
          <h6>Revenue last 28 days</h6>
          <canvas id="lineChart"></canvas>
        </div>
      </div>
    </div>
  </div>

  <!-- JS Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const doughnutConfig = {
      type: 'doughnut',
      data: {
        labels: ['Used', 'Unused'],
        datasets: [{
          data: [80, 20],
          backgroundColor: ['#1976d2', '#e0e0e0']
        }]
      },
      options: {
        cutout: '70%',
        responsive: true,
        plugins: {
          legend: { display: false }
        }
      }
    };
    new Chart(document.getElementById('chartYoutube'), doughnutConfig);
    new Chart(document.getElementById('chartWebsite'), doughnutConfig);
    new Chart(document.getElementById('chartFacebook'), doughnutConfig);
    new Chart(document.getElementById('chartInstagram'), doughnutConfig);

    // Line Chart
    new Chart(document.getElementById('lineChart'), {
      type: 'line',
      data: {
        labels: Array.from({ length: 28 }, (_, i) => `Day ${i + 1}`),
        datasets: [{
          label: 'Revenue',
          data: Array.from({ length: 28 }, () => Math.floor(Math.random() * 20)),
          borderColor: '#1976d2',
          tension: 0.4,
          fill: false
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { display: false } }
      }
    });
  </script>
</body>
</html>
