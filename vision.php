<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Our Vision | VolunteerMS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <?php include 'nav.php';?>
    <br><br>

    <div class="vision-hero w3-padding-large w3-container">
      <div class="hero-content">
        <h1 class="animate__animated animate__fadeIn">Our Vision for Volunteerism</h1>
        <p class="animate__animated animate__fadeIn animate__delay-1s">Building a future where everyone has the opportunity to make a difference</p>
      </div>
    </div>

    <div class="vision-container w3-padding-large w3-container">
      <div class="vision-statement">
        <h2 class="w3-center animate__animated animate__fadeIn">Enabling Transformative Change</h2>
        <p class="w3-center animate__animated animate__fadeIn animate__delay-1s" style="max-width: 800px; margin: 0 auto 3rem auto;">
          We envision a world where volunteerism is accessible, meaningful, and transformative for both volunteers 
          and the communities they serve. By 2030, we aim to become the leading platform connecting 1 million 
          volunteers with impactful opportunities across Bangladesh.
        </p>
      </div>

      <div class="vision-pillars">
        <div class="pillar animate__animated animate__fadeIn">
          <div class="pillar-icon">
            <i class="fas fa-globe-asia"></i>
          </div>
          <div class="pillar-content">
            <h3>National Impact</h3>
            <p>Establish volunteer hubs in all 64 districts of Bangladesh, ensuring even remote communities can benefit from volunteer support.</p>
          </div>
        </div>

        <div class="pillar animate__animated animate__fadeIn animate__delay-1s">
          <div class="pillar-icon">
            <i class="fas fa-hands-helping"></i>
          </div>
          <div class="pillar-content">
            <h3>Community Empowerment</h3>
            <p>Develop locally-led volunteer programs that address each community's unique needs and priorities.</p>
          </div>
        </div>

        <div class="pillar animate__animated animate__fadeIn animate__delay-2s">
          <div class="pillar-icon">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <div class="pillar-content">
            <h3>Digital Innovation</h3>
            <p>Leverage technology to make volunteer opportunities accessible to anyone with a mobile device.</p>
          </div>
        </div>
      </div>

      <div class="vision-timeline w3-margin-top">
        <h2 class="w3-center">Our Roadmap to 2030</h2>
        <div class="timeline-container">
          <div class="timeline-item animate__animated animate__fadeIn">
            <div class="timeline-year">2025</div>
            <div class="timeline-content">
              <h3>National Network Expansion</h3>
              <p>Establish partnerships with 200+ new organizations across all divisions</p>
            </div>
          </div>

          <div class="timeline-item animate__animated animate__fadeIn animate__delay-1s">
            <div class="timeline-year">2027</div>
            <div class="timeline-content">
              <h3>Mobile Platform Launch</h3>
              <p>Release native apps with offline capabilities for rural volunteers</p>
            </div>
          </div>

          <div class="timeline-item animate__animated animate__fadeIn animate__delay-2s">
            <div class="timeline-year">2030</div>
            <div class="timeline-content">
              <h3>Million Volunteers Initiative</h3>
              <p>Activate 1 million volunteers through our platform annually</p>
            </div>
          </div>
        </div>
      </div>

      <div class="vision-testimonials w3-margin-top">
        <h2 class="w3-center">Voices of Change</h2>
        <div class="testimonial-container">
          <div class="testimonial animate__animated animate__fadeIn">
            <div class="testimonial-content">
              <p>"This platform helped our village access skilled volunteers who trained 50 women in digital literacy."</p>
            </div>
            <div class="testimonial-author">
              <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Community Leader">
              <div>
                <h4>Rashida Begum</h4>
                <p>Community Leader, Rangpur</p>
              </div>
            </div>
          </div>

          <div class="testimonial animate__animated animate__fadeIn animate__delay-1s">
            <div class="testimonial-content">
              <p>"As a student, I've found meaningful opportunities that align with my studies in environmental science."</p>
            </div>
            <div class="testimonial-author">
              <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Volunteer">
              <div>
                <h4>Arif Hasan</h4>
                <p>University Volunteer, Dhaka</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="cta-section w3-highway-blue w3-padding-large">
      <div class="cta-content">
        <h2>Join Our Movement</h2>
        <p>Be part of realizing this vision for transformative volunteerism in Bangladesh</p>
        <div class="cta-buttons">
          <a href="signup.html" class="w3-button w3-round-large w3-white w3-hover-white w3-highway-blue">Become a Volunteer</a>
          <a href="partners.html" class="w3-button w3-round-large w3-highway-blue w3-hover-white w3-border w3-border-white">Partner With Us</a>
        </div>
      </div>
    </div>

    <?php include 'footer.php';?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>