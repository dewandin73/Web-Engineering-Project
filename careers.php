<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Careers | VolunteerMS</title>
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
    <div class="careers-hero w3-padding-large w3-container">
        <div class="hero-content">
            <h1 class="animate__animated animate__fadeIn">Build Your Career While Making an Impact</h1>
            <p class="animate__animated animate__fadeIn animate__delay-1s">Join our team of changemakers working to transform volunteerism in Bangladesh</p>
        </div>
    </div>

   
    <div class="careers-container w3-padding-large w3-container">
        <div class="benefits-section">
            <h2 class="w3-center animate__animated animate__fadeIn">Why Work With Us?</h2>
            <div class="benefits-grid">
                <div class="benefit-card animate__animated animate__fadeIn">
                    <i class="fas fa-heart"></i>
                    <h3>Meaningful Work</h3>
                    <p>Every role contributes directly to social impact and community development</p>
                </div>
                <div class="benefit-card animate__animated animate__fadeIn animate__delay-1s">
                    <i class="fas fa-chart-line"></i>
                    <h3>Professional Growth</h3>
                    <p>Training programs and leadership opportunities to advance your career</p>
                </div>
                <div class="benefit-card animate__animated animate__fadeIn animate__delay-2s">
                    <i class="fas fa-users"></i>
                    <h3>Collaborative Culture</h3>
                    <p>Work with passionate professionals from diverse backgrounds</p>
                </div>
            </div>
        </div>

        
        <div class="openings-section w3-margin-top">
            <h2 class="w3-center animate__animated animate__fadeIn">Current Opportunities</h2>
            
            <div class="job-card animate__animated animate__fadeIn">
                <div class="job-header">
                    <h3>Volunteer Coordinator</h3>
                    <span class="job-location">Dhaka, Bangladesh</span>
                    <span class="job-type">Full-time</span>
                </div>
                <div class="job-details">
                    <p>Manage volunteer programs and build relationships with community partners to maximize social impact.</p>
                    <ul class="job-responsibilities">
                        <li>Recruit and train volunteers</li>
                        <li>Coordinate volunteer schedules</li>
                        <li>Monitor program effectiveness</li>
                    </ul>
                </div>
                <a href="apply.html?position=volunteer-coordinator" class="w3-button w3-round-large w3-highway-blue">Apply Now</a>
            </div>

            <div class="job-card animate__animated animate__fadeIn animate__delay-1s">
                <div class="job-header">
                    <h3>Community Outreach Specialist</h3>
                    <span class="job-location">Remote</span>
                    <span class="job-type">Full-time</span>
                </div>
                <div class="job-details">
                    <p>Connect with communities across Bangladesh to identify volunteer needs and opportunities.</p>
                    <ul class="job-responsibilities">
                        <li>Conduct community needs assessments</li>
                        <li>Develop partnership agreements</li>
                        <li>Organize awareness campaigns</li>
                    </ul>
                </div>
                <a href="apply.html?position=community-outreach" class="w3-button w3-round-large w3-highway-blue">Apply Now</a>
            </div>

            <div class="job-card animate__animated animate__fadeIn animate__delay-2s">
                <div class="job-header">
                    <h3>Software Developer</h3>
                    <span class="job-location">Dhaka or Remote</span>
                    <span class="job-type">Full-time</span>
                </div>
                <div class="job-details">
                    <p>Enhance our volunteer management platform with new features and improvements.</p>
                    <ul class="job-responsibilities">
                        <li>Develop and maintain web applications</li>
                        <li>Implement new features</li>
                        <li>Ensure system reliability</li>
                    </ul>
                </div>
                <a href="apply.html?position=software-developer" class="w3-button w3-round-large w3-highway-blue">Apply Now</a>
            </div>
        </div>

        
        <div class="internship-section w3-margin-top">
            <div class="internship-content">
                <div class="internship-text">
                    <h2 class="animate__animated animate__fadeIn">Internship Program</h2>
                    <p class="animate__animated animate__fadeIn animate__delay-1s">Gain hands-on experience while contributing to meaningful social change. Our internships provide real responsibilities and mentorship.</p>
                    <ul class="internship-benefits">
                        <li class="animate__animated animate__fadeIn">3-6 month placements</li>
                        <li class="animate__animated animate__fadeIn animate__delay-1s">Academic credit available</li>
                        <li class="animate__animated animate__fadeIn animate__delay-2s">Potential for full-time roles</li>
                    </ul>
                    <a href="internships.html" class="w3-button w3-round-large w3-highway-blue animate__animated animate__fadeIn">Explore Internships</a>
                </div>
                <br>
                <div class="internship-image animate__animated animate__fadeIn animate__delay-2s">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Interns working together">
                </div>
            </div>
        </div>
    </div>

  
    <div class="careers-cta w3-highway-blue w3-padding-large">
        <div class="cta-content">
            <h2>Can't Find Your Perfect Role?</h2>
            <p>We're always looking for talented individuals. Send us your resume and we'll contact you when matching positions open.</p>
            <a href="talent-pool.html" class="w3-button w3-round-large w3-white w3-hover-white w3-highway-blue">Join Our Talent Pool</a>
        </div>
    </div>

    
    <?php include 'footer.php';?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
