<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>VolunteerMS - Logout</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body class="logout-page">

    <?php include 'nav1.php'; ?>

    <div class="logout-container w3-padding-large">
      <div class="logout-card w3-card-4 w3-round-large">
        <div class="w3-container w3-highway-blue logout-header">
          <h2><i class="fas fa-sign-out-alt"></i><b> Logout</b></h2>
        </div>
        
        <div class="w3-container logout-content">
          <div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue">
            <p><i class="fas fa-info-circle"></i> You are about to sign out of your VolunteerMS account.</p>
          </div>
          
          <div class="logout-message">
            <h3>Are you sure you want to logout?</h3>
            <p>You'll need to sign in again to access your volunteer dashboard and opportunities.</p>
          </div>
          
          <div class="logout-actions">
            <button class="w3-button w3-round-large w3-red w3-hover-dark-red logout-btn" onclick="performLogout()">
              <i class="fas fa-sign-out-alt"></i> Yes, Logout
            </button>
            <a href="dashboard.html" class="w3-button w3-round-large w3-highway-blue w3-hover-blue cancel-btn">
              <i class="fas fa-times"></i> Cancel
            </a>
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    
      function performLogout() {
      
        const logoutBtn = document.querySelector('.logout-btn');
        logoutBtn.disabled = true;
        logoutBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Logging out...';
    
        setTimeout(() => {
          localStorage.removeItem('authToken');
          sessionStorage.removeItem('userSession');
          
          
          window.location.href = 'login.php?logout=success';
        }, 1000);
      }
      
    </script>
  </body>
</html>