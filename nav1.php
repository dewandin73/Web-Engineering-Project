<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <div class="navigation w3-highway-blue w3-container">
      <nav class="nav-container w3-padding-large">
        <div class="logo">
          <a href="index.php">BE A <span>VOLUNTEER</span></a>
        </div>
        <div class="mobile-button">
          <span style="float: right;" onclick="toggleMobileNavigation()">&#9776;</span>
        </div>
        <div class="nav-links">
          <a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
          <a href="opportunities.php"><i class="fas fa-hands-helping"></i> Opportunities</a>
          <a href="hours.php"><i class="fas fa-clock"></i> My Hours</a>
          <a href="profile.php"><i class="fas fa-user"></i> Profile</a>
          <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
        <div id="mobile-sidenav" class="mobile-links w3-highway-blue">
          <div class="mobile-logo" style="display: inline;">
            <a href="index.html" class="logo">BE A<span> VOLUNTEER</span></a>
            <span style="width: 100%;"></span>
            <a href="javascript:void(0)" class="closebtn" onclick="toggleMobileNavigation()">&times;</a>
          </div>
          <a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
          <a href="opportunities.php"><i class="fas fa-hands-helping"></i> Opportunities</a>
          <a href="hours.php"><i class="fas fa-clock"></i> My Hours</a>
          <a href="profile.php"><i class="fas fa-user"></i> Profile</a>
          <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
      </nav>
    </div>
</body>
</html>