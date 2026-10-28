<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Patient Portal | Health Center</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="dashboard-layout">
  <aside class="dash-sidebar">
    <a class="dash-logo" href="index.php"><span class="logo-mark">H</span> Health Center</a>
    <ul class="dash-menu">
      <li><a class="active" href="#profile"><i class="fa fa-user"></i> My Profile</a></li>
      <li><a href="#upcoming"><i class="fa fa-calendar"></i> My Appointments</a></li>
      <li><a href="#records"><i class="fa fa-folder-open"></i> Medical Records</a></li>
      <li><a href="#prescriptions"><i class="fa fa-medkit"></i> Prescriptions</a></li>
      <li><a href="#billing"><i class="fa fa-credit-card"></i> Billing</a></li>
      <li><a href="login.php"><i class="fa fa-sign-out"></i> Logout</a></li>
    </ul>
  </aside>
  <main class="dash-main">
    <header class="dash-topbar"><button class="mobile-sidebar-toggle" aria-label="Toggle sidebar"><i class="fa fa-bars"></i></button><div class="dash-user">Welcome, Olivia <img src="images/avatar.svg" alt="Olivia Martin avatar"></div></header>
    <div class="dash-content">
      <h1>Patient Portal</h1>
      <section class="patient-profile" id="profile"><img src="images/avatar.svg" alt="Olivia Martin"><div><h2 style="margin:0 0 10px;font-size:21px;">Olivia Martin</h2><div class="profile-details"><span><strong>Age:</strong> 32 years</span><span><strong>Blood Group:</strong> O+</span><span><strong>Phone:</strong> 010-060-0160</span><span><strong>Email:</strong> olivia.martin@email.com</span></div></div></section>
      <ul class="nav nav-tabs portal-tabs" role="tablist">
        <li class="active"><a href="#upcoming" role="tab" data-toggle="tab">Upcoming Appointments</a></li>
        <li><a href="#records" role="tab" data-toggle="tab">Medical Records</a></li>
        <li><a href="#prescriptions" role="tab" data-toggle="tab">Prescriptions</a></li>
        <li><a href="#billing" role="tab" data-toggle="tab">Billing</a></li>
      </ul>
      <div class="tab-content portal-content">
        <div class="tab-pane active" id="upcoming"><div class="clearfix" style="margin-bottom:15px;"><h3 style="float:left;margin:7px 0;font-size:17px;">Upcoming Appointments</h3><a href="index.php#appointment" class="btn btn-green pull-right">Book Appointment</a></div><div class="table-responsive"><table class="table"><thead><tr><th>Date</th><th>Time</th><th>Doctor</th><th>Department</th><th>Status</th></tr></thead><tbody><tr><td>Nov 02, 2026</td><td>09:30 AM</td><td>Dr. Nate Baston</td><td>General Health</td><td><span class="status status-complete">Confirmed</span></td></tr><tr><td>Nov 18, 2026</td><td>11:00 AM</td><td>Dr. Miasha Nakahara</td><td>Cardiology</td><td><span class="status status-pending">Pending</span></td></tr></tbody></table></div></div>
        <div class="tab-pane" id="records"><h3 style="font-size:17px;">Medical Records</h3><div class="table-responsive"><table class="table"><thead><tr><th>Record</th><th>Provider</th><th>Date</th><th>Notes</th></tr></thead><tbody><tr><td>Annual Physical Examination</td><td>Dr. Nate Baston</td><td>Sep 14, 2026</td><td>Routine check-up</td></tr><tr><td>Blood Test Results</td><td>Health Center Lab</td><td>Sep 14, 2026</td><td>All values within range</td></tr><tr><td>Cardiology Consultation</td><td>Dr. Miasha Nakahara</td><td>Jun 21, 2026</td><td>Follow-up recommended</td></tr></tbody></table></div></div>
        <div class="tab-pane" id="prescriptions"><h3 style="font-size:17px;">Prescriptions</h3><div class="prescription-item"><h4>Vitamin D3 — 1 tablet daily</h4><p>Prescribed by Dr. Nate Baston · Refills: 2 · Through Dec 14, 2026</p></div><div class="prescription-item"><h4>Omega-3 — 1 capsule daily with food</h4><p>Prescribed by Dr. Nate Baston · Refills: 1 · Through Nov 14, 2026</p></div><div class="prescription-item"><h4>Allergy Relief — As needed</h4><p>Prescribed by Dr. Nate Baston · Refills: 0 · Expires Oct 30, 2026</p></div></div>
        <div class="tab-pane" id="billing"><h3 style="font-size:17px;">Billing</h3><div class="table-responsive"><table class="table"><thead><tr><th>Invoice</th><th>Description</th><th>Date</th><th>Amount</th><th>Status</th></tr></thead><tbody><tr><td>INV-2026-1042</td><td>Annual Physical Examination</td><td>Sep 14, 2026</td><td>$120.00</td><td><span class="status status-paid">Paid</span></td></tr><tr><td>INV-2026-0988</td><td>Blood Test</td><td>Aug 03, 2026</td><td>$65.00</td><td><span class="status status-unpaid">Unpaid</span></td></tr><tr><td>INV-2026-0873</td><td>Cardiology Consultation</td><td>Jun 21, 2026</td><td>$95.00</td><td><span class="status status-paid">Paid</span></td></tr></tbody></table></div></div>
      </div>
    </div>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><script src="js/custom.js"></script>
</body>
</html>
