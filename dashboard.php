<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | Health Center</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="dashboard-layout">
  <aside class="dash-sidebar">
    <a class="dash-logo" href="index.php"><span class="logo-mark">H</span> Health Center</a>
    <ul class="dash-menu">
      <li><a class="active" href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="admin/appointments.php"><i class="fa fa-calendar"></i> Appointments</a></li>
      <li><a href="admin/patients.php"><i class="fa fa-users"></i> Patients</a></li>
      <li><a href="admin/doctors.php"><i class="fa fa-user-md"></i> Doctors</a></li>
      <li><a href="admin/reports.php"><i class="fa fa-file-text"></i> Reports</a></li>
      <li><a href="login.php"><i class="fa fa-sign-out"></i> Logout</a></li>
    </ul>
  </aside>
  <main class="dash-main">
    <header class="dash-topbar"><button class="mobile-sidebar-toggle" aria-label="Toggle sidebar"><i class="fa fa-bars"></i></button><div class="dash-user">Welcome, Admin <img src="images/avatar.svg" alt="Admin avatar"></div></header>
    <div class="dash-content">
      <h1>Dashboard Overview</h1>
      <div class="row">
        <div class="col-sm-6 col-lg-3"><div class="stat-card" id="patients"><div class="stat-icon"><i class="fa fa-users"></i></div><div><strong>1,248</strong><span>Total Patients</span></div></div></div>
        <div class="col-sm-6 col-lg-3"><div class="stat-card"><div class="stat-icon"><i class="fa fa-calendar-check-o"></i></div><div><strong>28</strong><span>Appointments Today</span></div></div></div>
        <div class="col-sm-6 col-lg-3"><div class="stat-card" id="doctors"><div class="stat-icon"><i class="fa fa-user-md"></i></div><div><strong>16</strong><span>Doctors Available</span></div></div></div>
        <div class="col-sm-6 col-lg-3"><div class="stat-card" id="reports"><div class="stat-icon"><i class="fa fa-file-text-o"></i></div><div><strong>07</strong><span>Reports Pending</span></div></div></div>
      </div>
      <section class="panel" id="appointments"><div class="panel-heading">Recent Appointments</div><div class="panel-body"><div class="table-responsive"><table class="table">
        <thead><tr><th>Patient</th><th>Doctor</th><th>Department</th><th>Date</th><th>Status</th></tr></thead>
        <tbody>
          <tr><td>Olivia Martin</td><td>Dr. Nate Baston</td><td>General Health</td><td>Oct 27, 2026</td><td><span class="status status-complete">Completed</span></td></tr>
          <tr><td>James Wilson</td><td>Dr. Miasha Nakahara</td><td>Cardiology</td><td>Oct 27, 2026</td><td><span class="status status-pending">Pending</span></td></tr>
          <tr><td>Emily Johnson</td><td>Dr. Jason Stewart</td><td>Pregnancy</td><td>Oct 28, 2026</td><td><span class="status status-complete">Confirmed</span></td></tr>
          <tr><td>Michael Brown</td><td>Dr. Nate Baston</td><td>General Health</td><td>Oct 28, 2026</td><td><span class="status status-cancelled">Cancelled</span></td></tr>
          <tr><td>Sophia Davis</td><td>Dr. Miasha Nakahara</td><td>Cardiology</td><td>Oct 29, 2026</td><td><span class="status status-pending">Pending</span></td></tr>
        </tbody>
      </table></div></div></section>
    </div>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><script src="js/custom.js"></script>
</body>
</html>
