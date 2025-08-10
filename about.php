<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>About Us | VolunteerMS</title>
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
    <?php include 'nav.php'; ?>
    <br><br>
    <div class="about-hero w3-padding-large w3-container">
        <div class="hero-content">
            <h1 class="animate__animated animate__fadeIn">About Volunteer Management System</h1>
            <p class="animate__animated animate__fadeIn animate__delay-1s">Connecting passionate volunteers with meaningful opportunities since 2015</p>
        </div>
    </div>

    <div class="about-container w3-padding-large w3-container">
        <div class="about-section">
            <div class="about-text animate__animated animate__fadeInLeft">
                <h2>Our Story</h2>
                <p>Founded in Dhaka, Bangladesh, VolunteerMS began as a small initiative to bridge the gap between nonprofit organizations and willing volunteers. What started as a community bulletin board has grown into Bangladesh's most comprehensive volunteer management platform.</p>
                <p>Today, we support over 500 organizations and have facilitated more than 50,000 volunteer engagements across all 64 districts of Bangladesh.</p>
                <div class="stats w3-margin-top">
                    <div class="stat-item">
                        <h3>50,000+</h3>
                        <p>Volunteer Hours</p>
                    </div>
                    <div class="stat-item">
                        <h3>500+</h3>
                        <p>Partner Organizations</p>
                    </div>
                    <div class="stat-item">
                        <h3>64</h3>
                        <p>Districts Covered</p>
                    </div>
                </div>
            </div>
            <div class="about-image animate__animated animate__fadeInRight">
                <img src="images/bd.jpg" alt="Volunteers working together">
            </div>
        </div>

        <div class="mission-section w3-margin-top">
            <h2 class="w3-center">Our Mission & Values</h2>
            <div class="values-container">
                <div class="value-card animate__animated animate__fadeInUp">
                    <i class="fas fa-hands-helping"></i>
                    <h3>Community First</h3>
                    <p>We prioritize the needs of local communities and ensure our volunteers make real, measurable impacts.</p>
                </div>
                <div class="value-card animate__animated animate__fadeInUp animate__delay-1s">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Integrity</h3>
                    <p>We maintain transparency in all our operations and partnerships.</p>
                </div>
                <div class="value-card animate__animated animate__fadeInUp animate__delay-2s">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Innovation</h3>
                    <p>We continuously improve our platform to better serve volunteers and organizations.</p>
                </div>
            </div>
        </div>

        <div class="team-section w3-margin-top">
            <h2 class="w3-center">Meet Our Leadership</h2>
            <div class="team-container">
                <div class="team-card animate__animated animate__fadeIn">
                    <div class="team-image-container">
                        <img src="images/din.jpeg" alt="Team Member" class="team-member-image">
                    </div>
                    <h3>Din Mohammad</h3>
                    <p>Founder & CEO</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-card animate__animated animate__fadeIn animate__delay-1s">
                <div class="team-image-container">
                <img src="images/masud.jpeg" alt="Team Member" class="team-member-image">
                </div>
                <h3>Mahmudul Hasan Masud</h3>
                <p>Technical Director</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                </div>
            </div>
            <div class="team-card animate__animated animate__fadeIn animate__delay-2s">
               <div class="team-image-container">
                        <img src="images/emon.jpeg" alt="Team Member" class="team-member-image">
                </div>
                <h3>Ashraful Emon</h3>
                <p>Community Manager</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="w3-highway-blue w3-padding-large">
        <div class="cta-content">
            <h2>Ready to Make a Difference?</h2>
            <p>Join our community of volunteers and start creating positive change today.</p>
            <a href="register.html" class="w3-button w3-round-large w3-white w3-hover-white w3-highway-blue">Sign Up Now</a>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>