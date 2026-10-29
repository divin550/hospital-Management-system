<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up | Health Center</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body id="top">
  <div class="preloader"><span class="loader"></span></div>
  <header class="topbar"><div class="container"><div class="row"><div class="col-sm-4 welcome"><p>Welcome to a Professional Health Care</p></div><div class="col-sm-8 contact-details"><span><i class="fa fa-phone"></i>010-060-0160</span><span><i class="fa fa-calendar"></i>6:00 AM - 10:00 PM (Mon-Fri)</span><span><i class="fa fa-envelope"></i>info@company.com</span></div></div></div></header>
  <nav class="navbar navbar-default"><div class="container"><div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php"><span class="logo-mark">H</span>ealth Center</a></div><div class="collapse navbar-collapse" id="main-nav"><ul class="nav navbar-nav navbar-right"><li><a href="index.php#home">Home</a></li><li><a href="index.php#about">About Us</a></li><li><a href="index.php#doctors">Doctors</a></li><li><a href="index.php#news">News</a></li><li><a href="index.php#contact">Contact</a></li><li><a href="login.php">Login</a></li><li><a href="signup.php">Sign Up</a></li><li><a class="nav-appointment" href="index.php#appointment">Make an appointment</a></li></ul></div></div></nav>
  <main><section class="auth-section"><div class="auth-card"><h1>Create an Account</h1>
  <form action="patient_register.php" method="POST" id="signup-form" novalidate><div class="form-group"><label for="signup-name">Full Name</label><input id="signup-name" class="form-control" placeholder="Enter your full name"></div><div class="form-group"><label for="signup-email">Email</label><input id="signup-email" class="form-control" type="email" placeholder="Enter your email"></div><div class="form-group"><label for="signup-phone">Phone</label><input id="signup-phone" class="form-control" type="tel" placeholder="Enter your phone number"></div><div class="form-group"><label for="signup-dob">Date of Birth</label><input id="signup-dob" class="form-control" type="date"></div><div class="form-group"><label for="signup-gender">Gender</label><select id="signup-gender" class="form-control"><option value="">Select gender</option><option>Female</option><option>Male</option><option>Other</option><option>Prefer not to say</option></select></div><div class="form-group"><label for="signup-password">Password</label><input id="signup-password" class="form-control" type="password" placeholder="Create a password"></div><div class="form-group"><label for="signup-confirm">Confirm Password</label><input id="signup-confirm" class="form-control" type="password" placeholder="Confirm your password"></div>
      <div class="checkbox"><label><input type="checkbox"> I agree to the Terms and Conditions</label></div><button class="btn btn-green" type="submit">Sign Up</button>
    </form><div class="auth-links"><p>Already have an account? <a href="login.php">Login</a></p></div>
  </div></section></main>
  <footer class="footer"><div class="container"><div class="row">
    <div class="col-sm-4"><h3>Contact Info</h3><p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat.</p><ul class="footer-list"><li><i class="fa fa-phone"></i> 010-060-0160</li><li><i class="fa fa-envelope"></i> info@company.com</li></ul></div>
    <div class="col-sm-4"><h3>Latest News</h3><div class="footer-news"><img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=120&q=70" alt=""><div><a href="news-detail.php">Amazing Technology</a><small>March 08, 2025</small></div></div><div class="footer-news"><img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=120&q=70" alt=""><div><a href="news-detail.php">New healing process</a><small>February 20, 2025</small></div></div></div>
    <div class="col-sm-4"><h3>Opening Hours</h3><ul class="footer-list"><li>Monday - Friday <span class="pull-right">06:00 AM - 10:00 PM</span></li><li>Saturday <span class="pull-right">09:00 AM - 08:00 PM</span></li><li>Sunday <span class="pull-right">Closed</span></li></ul><div class="footer-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div></div>
  </div><div class="row footer-bottom"><div class="col-sm-6"><p>Copyright © 2025 Health Center</p></div><div class="col-sm-6 footer-links"><a href="index.php#contact">Laboratory Tests</a><a href="index.php#doctors">Departments</a><a href="index.php#contact">Insurance Policy</a><a href="index.php#contact">Careers</a></div></div></div></footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <script src="js/custom.js">

  </script>
</body>
</html>
