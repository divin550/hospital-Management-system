<?php
require_once "components/connection.php";
$query = "SELECT DISTINCT specialty FROM doctor_table WHERE specialty IS NOT NULL AND specialty != ''";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Health Center | Professional Health Care</title>

  <?php require_once "components/linkcss.php"; ?>
</head>
<body id="top">
  <div class="preloader">
    <span class="loader"></span>
  </div>

  <?php require_once "components/sub_nav.php"; ?>

  <?php require_once "components/nav.php"; ?>

  <main>
    <section class="hero" id="home" aria-label="Featured health center stories">
      <div class="hero-slide active" style="background-image:url('https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&amp;fit=crop&amp;w=1900&amp;q=85')">
        <div class="container">
          <div class="hero-content">
            <p>Let’s make your life happier</p>
            <h1>Healthy Living</h1>
            <a class="btn btn-green" href="#doctors">Meet Our Doctors</a>
          </div>
        </div>
      </div>
      <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&amp;fit=crop&amp;w=1900&amp;q=85')">
        <div class="container">
          <div class="hero-content">
            <p>Aenean luctus lobortis tellus</p>
            <h1>New Lifestyle</h1>
            <a class="btn btn-green" href="#about">More About Us</a>
          </div>
        </div>
      </div>
      <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&amp;fit=crop&amp;w=1900&amp;q=85')">
        <div class="container">
          <div class="hero-content">
            <p>Pellentesque nec libero nisi</p>
            <h1>Your Health Benefits</h1>
            <a class="btn btn-green" href="#news">Read Stories</a>
          </div>
        </div>
      </div>
      <div class="hero-dots">
        <button class="active" aria-label="Show slide 1"></button>
        <button aria-label="Show slide 2"></button>
        <button aria-label="Show slide 3"></button>
      </div>
    </section>

    <section class="section" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 fade-in-up">
            <div class="about-copy">
              <h2>Welcome to Your Health Center</h2>
              <p>We are committed to providing exceptional care with compassion, respect, and the latest medical expertise. Our team is here to support you at every step.</p>
              <p>From preventive care to specialist treatment, we put your wellbeing first in a friendly and welcoming environment.</p>
              <div class="about-profile">
                <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&amp;fit=crop&amp;w=150&amp;q=80" alt="Dr. Neil Jackson">
                <div>
                  <h4>Dr. Neil Jackson</h4>
                  <p>General Principal</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="about-image" role="img" aria-label="Healthcare professional helping a patient"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-light" id="doctors">
      <div class="container">
        <div class="section-heading">
          <h2>Our Doctors</h2>
          <p>Meet our professional and caring medical team</p>
        </div>
        <div class="row">
          <div class="col-sm-4 fade-in-up">
            <article class="doctor-card">
              <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&amp;fit=crop&amp;w=700&amp;q=80" alt="Dr. Nate Baston">
              <div class="doctor-info">
                <h3>Nate Baston</h3>
                <span class="specialty">General Principal</span>
                <p>
                  <i class="fa fa-phone"></i> 010-020-0120<br>
                  <i class="fa fa-envelope"></i> nate@healthcenter.com
                </p>
                <div class="social-links">
                  <a href="#" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" aria-label="Twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" aria-label="LinkedIn"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-4 fade-in-up">
            <article class="doctor-card">
              <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?auto=format&amp;fit=crop&amp;w=700&amp;q=80" alt="Dr. Jason Stewart">
              <div class="doctor-info">
                <h3>Jason Stewart</h3>
                <span class="specialty">Pregnancy</span>
                <p>
                  <i class="fa fa-phone"></i> 010-070-0170<br>
                  <i class="fa fa-envelope"></i> jason@healthcenter.com
                </p>
                <div class="social-links">
                  <a href="#" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" aria-label="Twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" aria-label="LinkedIn"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-4 fade-in-up">
            <article class="doctor-card">
              <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&amp;fit=crop&amp;w=700&amp;q=80" alt="Dr. Miasha Nakahara">
              <div class="doctor-info">
                <h3>Miasha Nakahara</h3>
                <span class="specialty">Cardiology</span>
                <p>
                  <i class="fa fa-phone"></i> 010-040-0140<br>
                  <i class="fa fa-envelope"></i> miasha@healthcenter.com
                </p>
                <div class="social-links">
                  <a href="#" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" aria-label="Twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" aria-label="LinkedIn"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="news">
      <div class="container">
        <div class="section-heading">
          <h2>Latest News</h2>
          <p>News from our health center</p>
        </div>
        <div class="row">
          <div class="col-sm-4 fade-in-up">
            <article class="news-card">
              <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&amp;fit=crop&amp;w=700&amp;q=80" alt="Medical care">
              <div class="news-info">
                <span class="date">March 08, 2025</span>
                <h3><a href="news-detail.php">About Amazing Technology</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in lorem nisl.</p>
                <div class="author-row">
                  <img src="images/avatar.svg" alt="">
                  <span>By Julia Walker<small>Health Specialist</small></span>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-4 fade-in-up">
            <article class="news-card">
              <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&amp;fit=crop&amp;w=700&amp;q=80" alt="Doctor talking with patient">
              <div class="news-info">
                <span class="date">February 20, 2025</span>
                <h3><a href="news-detail.php">Introducing a new healing process</a></h3>
                <p>Curabitur scelerisque, tortor nec mattis feugiat, velit purus euismod odio.</p>
                <div class="author-row">
                  <img src="images/avatar.svg" alt="">
                  <span>By Linda Brown<small>Doctor</small></span>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-4 fade-in-up">
            <article class="news-card">
              <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&amp;fit=crop&amp;w=700&amp;q=80" alt="Medical team">
              <div class="news-info">
                <span class="date">January 12, 2025</span>
                <h3><a href="news-detail.php">Review Annual Medical Research</a></h3>
                <p>Praesent lacinia, arcu eget consequat volutpat, lectus enim posuere nulla.</p>
                <div class="author-row">
                  <img src="images/avatar.svg" alt="">
                  <span>By Bryan Wilson<small>Researcher</small></span>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-light" id="appointment">
      <div class="container">
        <div class="section-heading">
          <h2>Make an appointment</h2>
          <p>We are always ready to help you and answer your questions</p>
        </div>
        <div class="row">
          <div class="col-sm-5">
            <div class="appointment-photo" role="img" aria-label="Doctor consulting a patient"></div>
          </div>
          <div class="col-sm-7">
            <form class="appointment-form">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input class="form-control" placeholder="Full Name" aria-label="Name">
                </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" type="date" aria-label="Select Date">
                </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" type="time" aria-label="Select Time">
                </div>
                <div class="col-sm-6 form-group">
                  <select class="form-control" aria-label="Select Department">
                    <?php while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <option value="<?php echo htmlspecialchars($row['specialty']);?>"><?php echo htmlspecialchars($row['specialty']);?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="col-sm-12 form-group">
                  <input class="form-control" type="tel" placeholder="Phone Number" aria-label="Phone Number">
                </div>
                <div class="col-sm-12">
                  <button class="btn btn-green" type="submit">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <iframe class="map-frame" title="Map showing Health Center location" src="https://maps.google.com/maps?q=New%20York%20City&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" loading="lazy"></iframe>
    </section>
  </main>

  <?php require_once "components/footer.php"; ?>

  <?php require_once "components/backdrop.php"; ?>

  <?php require_once "components/linkjs.php"; ?>
</body>
</html>
