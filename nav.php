
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
        <div class="links">
            <a href="about.php">About</a>
            <a href="index.php#services">Services</a>
            <a href="careers.php">Careers</a>
            <a href="index.php#contact">Contact</a>
            <a href="login.html">Login</a>
        </div>
        <div id="mobile-sidenav" class="mobile-links w3-highway-blue">
            <div class="mobile-logo" style="display: inline;">
                <a href="index.html" class="logo">BE A<span> VOLUNTEER</span></a>
                <span style="width: 100%;"></span>
                <a href="javascript:void(0)" class="closebtn" onclick="toggleMobileNavigation()">&times;</a>
            </div>
            <a href="about.php" onclick="toggleMobileNavigation()">About Us</a>
            <a href="index.php#services" onclick="toggleMobileNavigation()">Services</a>
            <a href="careers.php" onclick="toggleMobileNavigation()">Careers</a>
            <a href="index.php#contact" onclick="toggleMobileNavigation()">Contact</a>
            <a href="login.html" onclick="toggleMobileNavigation()">Login</a>
        </div>
    </nav>
</div>
</body>
</html>
