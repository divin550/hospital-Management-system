<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Health Center | Professional Health Care</title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css"> -->
  <?php require_once "components/linkcss.php";?>
</head>
<body id="top">
  <div class="preloader"><span class="loader"></span></div>
  <!-- <header class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 welcome"><p>Welcome to a Professional Health Care</p></div>
        <div class="col-sm-8 contact-details">
          <span><i class="fa fa-phone"></i>010-060-0160</span>
          <span><i class="fa fa-calendar"></i>6:00 AM - 10:00 PM (Mon-Fri)</span>
          <span><i class="fa fa-envelope"></i>info@company.com</span>
        </div>
      </div>
    </div>
  </header> -->
  <?php require_once "components/sub_nav.php";?>
  <!-- <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="index.php"><span class="logo-mark">H</span>ealth Center</a>
      </div>
      <div class="collapse navbar-collapse" id="main-nav">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#home">Home</a></li><li><a href="#about">About Us</a></li><li><a href="#doctors">Doctors</a></li><li><a href="#news">News</a></li><li><a href="#contact">Contact</a></li>
          <li><a href="login.php">Login</a></li><li><a href="signup.php">Sign Up</a></li><li><a class="nav-appointment" href="#appointment">Make an appointment</a></li>
        </ul>
      </div>
    </div>
  </nav> -->
  <?php require_once "components/nav.php";?>
  <main>
    <section class="hero" id="home" aria-label="Featured health center stories">
      <div class="hero-slide active" style="background-image:url('https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=1900&q=85')"><div class="container"><div class="hero-content"><p>Let’s make your life happier</p><h1>Healthy Living</h1><a class="btn btn-green" href="#doctors">Meet Our Doctors</a></div></div></div>
      <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=1900&q=85')"><div class="container"><div class="hero-content"><p>Aenean luctus lobortis tellus</p><h1>New Lifestyle</h1><a class="btn btn-green" href="#about">More About Us</a></div></div></div>
      <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=1900&q=85')"><div class="container"><div class="hero-content"><p>Pellentesque nec libero nisi</p><h1>Your Health Benefits</h1><a class="btn btn-green" href="#news">Read Stories</a></div></div></div>
      <div class="hero-dots"><button class="active" aria-label="Show slide 1"></button><button aria-label="Show slide 2"></button><button aria-label="Show slide 3"></button></div>
    </section>
    <section class="section" id="about">
      <div class="container"><div class="row">
        <div class="col-sm-6 fade-in-up"><div class="about-copy"><h2>Welcome to Your Health Center</h2><p>We are committed to providing exceptional care with compassion, respect, and the latest medical expertise. Our team is here to support you at every step.</p><p>From preventive care to specialist treatment, we put your wellbeing first in a friendly and welcoming environment.</p><div class="about-profile"><img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=150&q=80" alt="Dr. Neil Jackson"><div><h4>Dr. Neil Jackson</h4><p>General Principal</p></div></div></div></div>
        <div class="col-sm-6"><div class="about-image" role="img" aria-label="Healthcare professional helping a patient"></div></div>
      </div></div>
    </section>
    <section class="section section-light" id="doctors">
      <div class="container"><div class="section-heading"><h2>Our Doctors</h2><p>Meet our professional and caring medical team</p></div>
        <div class="row">
          <div class="col-sm-4 fade-in-up"><article class="doctor-card"><img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&w=700&q=80" alt="Dr. Nate Baston"><div class="doctor-info"><h3>Nate Baston</h3><span class="specialty">General Principal</span><p><i class="fa fa-phone"></i> 010-020-0120<br><i class="fa fa-envelope"></i> nate@healthcenter.com</p><div class="social-links"><a href="#" aria-label="Facebook"><i class="fa fa-facebook"></i></a><a href="#" aria-label="Twitter"><i class="fa fa-twitter"></i></a><a href="#" aria-label="LinkedIn"><i class="fa fa-linkedin"></i></a></div></div></article></div>
          <div class="col-sm-4 fade-in-up"><article class="doctor-card"><img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?auto=format&fit=crop&w=700&q=80" alt="Dr. Jason Stewart"><div class="doctor-info"><h3>Jason Stewart</h3><span class="specialty">Pregnancy</span><p><i class="fa fa-phone"></i> 010-070-0170<br><i class="fa fa-envelope"></i> jason@healthcenter.com</p><div class="social-links"><a href="#" aria-label="Facebook"><i class="fa fa-facebook"></i></a><a href="#" aria-label="Twitter"><i class="fa fa-twitter"></i></a><a href="#" aria-label="LinkedIn"><i class="fa fa-linkedin"></i></a></div></div></article></div>
          <div class="col-sm-4 fade-in-up"><article class="doctor-card"><img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=700&q=80" alt="Dr. Miasha Nakahara"><div class="doctor-info"><h3>Miasha Nakahara</h3><span class="specialty">Cardiology</span><p><i class="fa fa-phone"></i> 010-040-0140<br><i class="fa fa-envelope"></i> miasha@healthcenter.com</p><div class="social-links"><a href="#" aria-label="Facebook"><i class="fa fa-facebook"></i></a><a href="#" aria-label="Twitter"><i class="fa fa-twitter"></i></a><a href="#" aria-label="LinkedIn"><i class="fa fa-linkedin"></i></a></div></div></article></div>
        </div>
      </div>
    </section>
    <section class="section" id="news">
      <div class="container"><div class="section-heading"><h2>Latest News</h2><p>News from our health center</p></div>
        <div class="row">
          <div class="col-sm-4 fade-in-up"><article class="news-card"><img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=700&q=80" alt="Medical care"><div class="news-info"><span class="date">March 08, 2025</span><h3><a href="news-detail.php">About Amazing Technology</a></h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in lorem nisl.</p><div class="author-row"><img src="images/avatar.svg" alt=""><span>By Julia Walker<small>Health Specialist</small></span></div></div></article></div>
          <div class="col-sm-4 fade-in-up"><article class="news-card"><img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=700&q=80" alt="Doctor talking with patient"><div class="news-info"><span class="date">February 20, 2025</span><h3><a href="news-detail.php">Introducing a new healing process</a></h3><p>Curabitur scelerisque, tortor nec mattis feugiat, velit purus euismod odio.</p><div class="author-row"><img src="images/avatar.svg" alt=""><span>By Linda Brown<small>Doctor</small></span></div></div></article></div>
          <div class="col-sm-4 fade-in-up"><article class="news-card"><img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=700&q=80" alt="Medical team"><div class="news-info"><span class="date">January 12, 2025</span><h3><a href="news-detail.php">Review Annual Medical Research</a></h3><p>Praesent lacinia, arcu eget consequat volutpat, lectus enim posuere nulla.</p><div class="author-row"><img src="images/avatar.svg" alt=""><span>By Bryan Wilson<small>Researcher</small></span></div></div></article></div>
        </div>
      </div>
    </section>
    <section class="section section-light" id="appointment">
      <div class="container"><div class="section-heading"><h2>Make an appointment</h2><p>We are always ready to help you and answer your questions</p></div>
        <div class="row"><div class="col-sm-5"><div class="appointment-photo" role="img" aria-label="Doctor consulting a patient"></div></div><div class="col-sm-7"><form class="appointment-form">
          <div class="row"><div class="col-sm-6 form-group"><input class="form-control" placeholder="Full Name" aria-label="Name"></div><div class="col-sm-6 form-group"><input class="form-control" type="email" placeholder="Email" aria-label="Email"></div>
          <div class="col-sm-6 form-group"><input class="form-control" type="date" aria-label="Select Date"></div><div class="col-sm-6 form-group"><select class="form-control" aria-label="Select Department"><option value="">Select Department</option><option>General Health</option><option>Cardiology</option><option>Dental</option><option>Medical Research</option></select></div>
          <div class="col-sm-12 form-group"><input class="form-control" type="tel" placeholder="Phone Number" aria-label="Phone Number"></div><div class="col-sm-12 form-group"><textarea class="form-control" placeholder="Additional Message" aria-label="Additional Message"></textarea></div><div class="col-sm-12"><button class="btn btn-green" type="submit">Submit</button></div></div>
        </form></div></div>
      </div>
    </section>
    <section id="contact"><iframe class="map-frame" title="Map showing Health Center location" src="https://maps.google.com/maps?q=New%20York%20City&t=&z=13&ie=UTF8&iwloc=&output=embed" loading="lazy"></iframe></section>
  </main>
  <footer class="footer">
    <div class="container"><div class="row">
      <div class="col-sm-4"><h3>Contact Info</h3><p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat.</p><ul class="footer-list"><li><i class="fa fa-phone"></i> 010-060-0160</li><li><i class="fa fa-envelope"></i> info@company.com</li></ul></div>
      <div class="col-sm-4"><h3>Latest News</h3><div class="footer-news"><img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=120&q=70" alt=""><div><a href="news-detail.php">Amazing Technology</a><small>March 08, 2025</small></div></div><div class="footer-news"><img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=120&q=70" alt=""><div><a href="news-detail.php">New healing process</a><small>February 20, 2025</small></div></div></div>
      <div class="col-sm-4"><h3>Opening Hours</h3><ul class="footer-list"><li>Monday - Friday <span class="pull-right">06:00 AM - 10:00 PM</span></li><li>Saturday <span class="pull-right">09:00 AM - 08:00 PM</span></li><li>Sunday <span class="pull-right">Closed</span></li></ul><div class="footer-social"><a href="#" aria-label="Facebook"><i class="fa fa-facebook"></i></a><a href="#" aria-label="Twitter"><i class="fa fa-twitter"></i></a><a href="#" aria-label="Instagram"><i class="fa fa-instagram"></i></a></div></div>
    </div>
    <div class="row footer-bottom"><div class="col-sm-6"><p>Copyright © 2025 Health Center</p></div><div class="col-sm-6 footer-links"><a href="#contact">Laboratory Tests</a><a href="#doctors">Departments</a><a href="#contact">Insurance Policy</a><a href="#contact">Careers</a></div></div></div>
  </footer>
  <a class="back-top" href="#top" aria-label="Back to top"><i class="fa fa-angle-up"></i></a>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script> -->
  <?php require_once "components/linkjs.php";?>
</body>
</html>
