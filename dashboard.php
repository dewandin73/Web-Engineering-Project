<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>VolunteerMS - Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body class="dashboard-page">

    <?php include 'nav1.php'; ?>

    <div class="dashboard-container w3-padding-large">
      <div class="welcome-section w3-padding-large">
        <h1>Welcome Back, <span class="user-name">Devon!</span></h1>
        <p>Here's what's happening with your volunteer activities</p>
      </div>

      <div class="stats-cards w3-row-padding w3-margin-top">
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-card-4 w3-round-large stat-card">
            <div class="stat-icon w3-circle w3-highway-blue">
              <i class="fas fa-clock"></i>
            </div>
            <div class="stat-content">
              <h3>Total Hours</h3>
              <p class="stat-number">127</p>
              <p class="stat-change positive">+12% from last month</p>
            </div>
          </div>
        </div>
        
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-card-4 w3-round-large stat-card">
            <div class="stat-icon w3-circle w3-highway-blue">
              <i class="fas fa-calendar-check"></i>
            </div>
            <div class="stat-content">
              <h3>Upcoming Shifts</h3>
              <p class="stat-number">3</p>
              <p class="stat-change">Next: Tomorrow at 10AM</p>
            </div>
          </div>
        </div>
        
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-card-4 w3-round-large stat-card">
            <div class="stat-icon w3-circle w3-highway-blue">
              <i class="fas fa-trophy"></i>
            </div>
            <div class="stat-content">
              <h3>Achievements</h3>
              <p class="stat-number">8</p>
              <p class="stat-change positive">2 new badges earned</p>
            </div>
          </div>
        </div>
        
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-card-4 w3-round-large stat-card">
            <div class="stat-icon w3-circle w3-highway-blue">
              <i class="fas fa-users"></i>
            </div>
            <div class="stat-content">
              <h3>Community</h3>
              <p class="stat-number">24</p>
              <p class="stat-change">Volunteers in your network</p>
            </div>
          </div>
        </div>
      </div>

      <div class="dashboard-main w3-row-padding w3-margin-top">
        <div class="w3-col l8 m12 w3-margin-bottom">
          <div class="w3-card-4 w3-round-large main-card">
            <div class="w3-container card-header w3-highway-blue">
              <h2>Recent Activities</h2>
            </div>
            <div class="w3-container activities-list">
              <div class="activity-item">
                <div class="activity-icon">
                  <i class="fas fa-check-circle w3-text-green"></i>
                </div>
                <div class="activity-content">
                  <h3>Completed: Community Food Drive</h3>
                  <p>Yesterday • 4 hours • 120 meals served</p>
                </div>
              </div>
              
              <div class="activity-item">
                <div class="activity-icon">
                  <i class="fas fa-calendar-alt w3-text-blue"></i>
                </div>
                <div class="activity-content">
                  <h3>Upcoming: Park Cleanup</h3>
                  <p>Tomorrow at 10AM • Central Park • 3 hours</p>
                </div>
              </div>
              
              <div class="activity-item">
                <div class="activity-icon">
                  <i class="fas fa-award w3-text-orange"></i>
                </div>
                <div class="activity-content">
                  <h3>New Achievement: 100 Hours Milestone</h3>
                  <p>2 days ago • Bronze Level Reached</p>
                </div>
              </div>
              
              <div class="activity-item">
                <div class="activity-icon">
                  <i class="fas fa-envelope w3-text-indigo"></i>
                </div>
                <div class="activity-content">
                  <h3>New Message from Coordinator</h3>
                  <p>3 days ago • "Great work at the food drive!"</p>
                </div>
              </div>
            </div>
            <div class="w3-container w3-center w3-padding">
              <button class="w3-button w3-round-large w3-highway-blue">View All Activities</button>
            </div>
          </div>
        </div>
        
        <div class="w3-col l4 m12 w3-margin-bottom">
          <div class="w3-card-4 w3-round-large main-card">
            <div class="w3-container card-header w3-highway-blue">
              <h2>Quick Actions</h2>
            </div>
            <div class="w3-container quick-actions">
              <button class="w3-button w3-round-large action-btn">
                <i class="fas fa-search"></i> Find New Opportunities
              </button>
              <button class="w3-button w3-round-large action-btn">
                <i class="fas fa-clock"></i> Log Volunteer Hours
              </button>
              <button class="w3-button w3-round-large action-btn">
                <i class="fas fa-certificate"></i> Request Certificate
              </button>
              <button class="w3-button w3-round-large action-btn">
                <i class="fas fa-calendar-plus"></i> Schedule Availability
              </button>
              <button class="w3-button w3-round-large action-btn">
                <i class="fas fa-user-friends"></i> Invite Friends
              </button>
            </div>
          </div>
          
          <div class="w3-card-4 w3-round-large main-card w3-margin-top">
            <div class="w3-container card-header w3-highway-blue">
              <h2>Your Impact</h2>
            </div>
            <div class="w3-container impact-stats">
              <div class="impact-item">
                <i class="fas fa-utensils impact-icon"></i>
                <div>
                  <h3>480</h3>
                  <p>Meals Served</p>
                </div>
              </div>
              <div class="impact-item">
                <i class="fas fa-tree impact-icon"></i>
                <div>
                  <h3>24</h3>
                  <p>Park Cleanups</p>
                </div>
              </div>
              <div class="impact-item">
                <i class="fas fa-book impact-icon"></i>
                <div>
                  <h3>36</h3>
                  <p>Students Tutored</p>
                </div>
              </div>
              <div class="impact-item">
                <i class="fas fa-hand-holding-heart impact-icon"></i>
                <div>
                  <h3>127</h3>
                  <p>Hours Volunteered</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>
    <script src="script.js"></script>
  </body>
</html>