<?php
session_start();
// Add this at the top of your login.php file
if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>VolunteerMS - Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://accounts.google.com/gsi/client" async defer></script>

</head>

<body class="login-page">
  <?php include 'nav.php'; ?>

  <div class="login-container w3-padding-large">
    <div class="login-card animate__animated animate__fadeIn">
      <div class="login-header">
        <h2>Welcome Back!</h2>
        <p>Sign in to your VolunteerMS account</p>
      </div>

      <div class="social-login">
        <div id="g_id_onload" data-client_id="YOUR_GOOGLE_CLIENT_ID.apps.googleusercontent.com" data-context="signin"
          data-ux_mode="popup" data-callback="handleGoogleSignIn" data-auto_prompt="true">
        </div>

        <div class="g_id_signin" data-type="standard" data-shape="rectangular" data-theme="filled_blue"
          data-text="signin_with" data-size="large" data-logo_alignment="left" data-width="300">
        </div>
      </div>

      <div class="divider">
        <span>or</span>
      </div>

      <form class="login-form" id="loginForm" action="code.php" method="post">
        <div class="form-group">
          <label for="email">Email Address</label>
          <div class="input-with-icon">
            <i class="fas fa-envelope"></i>
            <input type="email" id="email" name="email" placeholder="your@email.com" required>
          </div>
          <span class="error-message" id="email-error"></span>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-with-icon">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" name="password" placeholder="••••••••" required>
            <i class="fas fa-eye toggle-password" onclick="togglePasswordVisibility()"></i>
          </div>
          <span class="error-message" id="password-error"></span>
        </div>

        <div class="form-options">
          <label class="remember-me">
            <input type="checkbox"> Remember me
          </label>
          <a href="forgot-password.html" class="forgot-password">Forgot password?</a>
        </div>

        <button type="submit" class="w3-button w3-round-large w3-indigo w3-hover-blue login-btn" name="login">
          Sign In
        </button>
      </form>
      <?php
      
      if (isset($_SESSION['login_error'])) {
          echo '<div class="w3-panel w3-red w3-round">'.$_SESSION['login_error'].'</div>';
          unset($_SESSION['login_error']);
      }
      ?>

      <div class="register-link">
        Don't have an account? <a href="register.php">Sign up</a>
      </div>
    </div>

    <div class="login-hero animate__animated animate__fadeInRight">
      <div class="hero-content">
        <h3>Join Our Volunteer Community</h3>
        <p>Make a difference in people's lives and gain valuable experience</p>
        <div class="benefits">
          <div class="benefit-item">
            <i class="fas fa-hands-helping"></i>
            <span>Help those in need</span>
          </div>
          <div class="benefit-item">
            <i class="fas fa-users"></i>
            <span>Join a supportive community</span>
          </div>
          <div class="benefit-item">
            <i class="fas fa-award"></i>
            <span>Earn recognition</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="script.js"></script>


</body>

</html>