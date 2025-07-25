function toggleMobileNavigation() {
  const mobileNavigation = document.getElementById("mobile-sidenav");
  mobileNavigation.classList.toggle('mobile-links-active');
}

// Password visibility toggle
function togglePasswordVisibility(fieldId) {
  const password = document.getElementById(fieldId);
  const icon = document.querySelector(`#${fieldId} ~ .toggle-password`);
  if (password.type === 'password') {
    password.type = 'text';
    icon.classList.remove('fa-eye');
    icon.classList.add('fa-eye-slash');
  } else {
    password.type = 'password';
    icon.classList.remove('fa-eye-slash');
    icon.classList.add('fa-eye');
  }
}

// Mobile navigation toggle
function toggleMobileNavigation() {
  const mobileNav = document.getElementById('mobile-sidenav');
  if (mobileNav.style.width === '70%' || mobileNav.style.width === '40%' || mobileNav.style.width === '100%') {
    mobileNav.style.width = '0';
  } else {
    if (window.innerWidth <= 768) {
      if (window.innerWidth <= 480) {
        mobileNav.style.width = '100%';
      } else {
        mobileNav.style.width = '70%';
      }
    } else {
      mobileNav.style.width = '40%';
    }
  }
}

// Live validation functions
document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('fullname').addEventListener('input', function () {
    const fullname = this.value.trim();
    const errorElement = document.getElementById('fullname-error');

    if (fullname.length < 6) {
      errorElement.textContent = 'Name must be at least 6 characters';
      this.classList.add('invalid');
    } else if (!/^[a-zA-Z\s]+$/.test(fullname)) {
      errorElement.textContent = 'Name can only contain letters and spaces';
      this.classList.add('invalid');
    } else {
      errorElement.textContent = '';
      this.classList.remove('invalid');
    }
  });

  // Email validation
  document.getElementById('email').addEventListener('input', function () {
    const email = this.value.trim();
    const errorElement = document.getElementById('email-error');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
      errorElement.textContent = 'Please enter a valid email address';
      this.classList.add('invalid');
    } else {
      errorElement.textContent = '';
      this.classList.remove('invalid');
    }
  });

  // Phone number validation (10 digits with country code)
  document.getElementById('phone').addEventListener('input', function () {
    const phone = this.value.trim();
    const errorElement = document.getElementById('phone-error');
    const phoneRegex = /^\+8801[3-9]\d{8}$/;

    if (phone && !phoneRegex.test(phone)) {
      errorElement.textContent = 'Must be +880 followed by 10 digits (e.g., +8801712345678)';
      this.classList.add('invalid');
    } else {
      errorElement.textContent = '';
      this.classList.remove('invalid');
    }
  });

  // Update password requirements list
const reqLength = document.getElementById('req-length');
const reqLower = document.getElementById('req-lower');
const reqUpper = document.getElementById('req-upper');
const reqNumber = document.getElementById('req-number');
const reqSpecial = document.getElementById('req-special');

// Inside the password event listener:
reqLength.classList.toggle('valid', isLongEnough);
reqLower.classList.toggle('valid', hasLower);
reqUpper.classList.toggle('valid', hasUpper);
reqNumber.classList.toggle('valid', hasNumber);
reqSpecial.classList.toggle('valid', hasSpecial);

  // Password validation
  document.getElementById('password').addEventListener('input', function () {
    const password = this.value;
    const errorElement = document.getElementById('password-error');
    const strengthBars = document.querySelectorAll('.strength-bar');
    const strengthText = document.querySelector('.strength-text');

    // Reset all bars
    strengthBars.forEach(bar => {
      bar.style.backgroundColor = '#ddd';
    });

    // Check requirements
    const hasLower = /[a-z]/.test(password);
    const hasUpper = /[A-Z]/.test(password);
    const hasNumber = /[0-9]/.test(password);
    const hasSpecial = /[^A-Za-z0-9]/.test(password);
    const isLongEnough = password.length >= 8;

    // Very weak (less than 6 characters)
    if (password.length > 0) {
      strengthBars[0].style.backgroundColor = '#ff4d4d';
      strengthText.textContent = 'Very weak';
    }

    // Weak (6+ characters)
    if (password.length >= 6) {
      strengthBars[1].style.backgroundColor = '#ff9a4d';
      strengthText.textContent = 'Weak';
    }

    // Medium (6+ chars with numbers)
    if (password.length >= 6 && hasNumber) {
      strengthBars[2].style.backgroundColor = '#4d88ff';
      strengthText.textContent = 'Medium';
    }

    // Strong (8+ chars with mixed case and symbols)
    if (isLongEnough && hasLower && hasUpper && hasNumber && hasSpecial) {
      strengthBars[0].style.backgroundColor = '#4CAF50';
      strengthBars[1].style.backgroundColor = '#4CAF50';
      strengthBars[2].style.backgroundColor = '#4CAF50';
      strengthText.textContent = 'Strong';
    }

    // Hide if empty
    if (password.length === 0) {
      strengthText.textContent = 'Password strength';
    }

    // Validation messages
    let errorMessages = [];
    if (!isLongEnough && password.length > 0) errorMessages.push('at least 8 characters');
    if (!hasLower) errorMessages.push('one lowercase letter');
    if (!hasUpper) errorMessages.push('one uppercase letter');
    if (!hasNumber) errorMessages.push('one number');
    if (!hasSpecial) errorMessages.push('one special character');

    if (errorMessages.length > 0 && password.length > 0) {
      errorElement.textContent = 'Password requires: ' + errorMessages.join(', ');
      this.classList.add('invalid');
    } else if (password.length > 0) {
      errorElement.textContent = '';
      this.classList.remove('invalid');
    } else {
      errorElement.textContent = '';
    }
  });

  // Confirm Password validation
  document.getElementById('confirm-password').addEventListener('input', function () {
    const password = document.getElementById('password').value;
    const confirmPassword = this.value;
    const errorElement = document.getElementById('confirm-password-error');

    if (confirmPassword && password !== confirmPassword) {
      errorElement.textContent = 'Passwords do not match';
      this.classList.add('invalid');
    } else {
      errorElement.textContent = '';
      this.classList.remove('invalid');
    }
  });

  // Form submission
  document.getElementById('signupForm').addEventListener('submit', function (e) {
    e.preventDefault();

    // Trigger all validations
    document.getElementById('fullname').dispatchEvent(new Event('input'));
    document.getElementById('email').dispatchEvent(new Event('input'));
    document.getElementById('phone').dispatchEvent(new Event('input'));
    document.getElementById('password').dispatchEvent(new Event('input'));
    document.getElementById('confirm-password').dispatchEvent(new Event('input'));

    // Check if any fields are invalid
    const invalidFields = document.querySelectorAll('.invalid');
    const errorMessages = document.querySelectorAll('.error-message');
    let hasErrors = false;

    errorMessages.forEach(message => {
      if (message.textContent !== '') {
        hasErrors = true;
      }
    });

    if (invalidFields.length > 0 || hasErrors) {
      alert('Please fix the errors in the form before submitting.');
      return;
    }

    // Check terms checkbox
    if (!document.querySelector('input[name="terms"]').checked) {
      alert('You must agree to the Terms of Service and Privacy Policy');
      return;
    }

    // If all validations pass
    alert('Account created successfully! Redirecting to your dashboard...');
    // In a real application, you would submit the form here
    // window.location.href = 'dashboard.html';
  });
});


// Password strength indicator
document.getElementById('password').addEventListener('input', function () {
  const password = this.value;
  const strengthBars = document.querySelectorAll('.strength-bar');
  const strengthText = document.querySelector('.strength-text');

  // Reset all bars
  strengthBars.forEach(bar => {
    bar.style.backgroundColor = '#ddd';
  });

  // Very weak (less than 6 characters)
  if (password.length > 0) {
    strengthBars[0].style.backgroundColor = '#ff4d4d';
    strengthText.textContent = 'Very weak';
  }

  // Weak (6+ characters)
  if (password.length >= 6) {
    strengthBars[1].style.backgroundColor = '#ff9a4d';
    strengthText.textContent = 'Weak';
  }

  // Medium (6+ chars with numbers/symbols)
  if (password.length >= 6 && /[0-9]/.test(password)) {
    strengthBars[2].style.backgroundColor = '#4d88ff';
    strengthText.textContent = 'Medium';
  }

  // Strong (8+ chars with mixed case and symbols)
  if (password.length >= 8 && /[0-9]/.test(password) && /[A-Z]/.test(password) && /[^A-Za-z0-9]/.test(password)) {
    strengthBars[0].style.backgroundColor = '#4CAF50';
    strengthBars[1].style.backgroundColor = '#4CAF50';
    strengthBars[2].style.backgroundColor = '#4CAF50';
    strengthText.textContent = 'Strong';
  }

  // Hide if empty
  if (password.length === 0) {
    strengthText.textContent = 'Password strength';
  }
});

// Form validation
document.getElementById('signupForm').addEventListener('submit', function (e) {
  e.preventDefault();

  // Check password match
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirm-password').value;

  if (password !== confirmPassword) {
    alert('Passwords do not match!');
    return;
  }

  // If all validations pass
  alert('Account created successfully! Redirecting to your dashboard...');
  // In a real application, you would submit the form here
  // window.location.href = 'dashboard.html';
});

// Live validation for login form
document.addEventListener('DOMContentLoaded', function () {
  const loginForm = document.getElementById('loginForm');
  const emailInput = document.getElementById('email');
  const passwordInput = document.getElementById('password');
  const emailError = document.getElementById('email-error');
  const passwordError = document.getElementById('password-error');

  // Email validation
  emailInput.addEventListener('input', function () {
    const email = this.value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
      emailError.textContent = 'Please enter a valid email address';
      this.classList.add('invalid');
    } else {
      emailError.textContent = '';
      this.classList.remove('invalid');
    }
  });

  // Password validation
  passwordInput.addEventListener('input', function () {
    const password = this.value;

    if (password.length === 0) {
      passwordError.textContent = '';
      this.classList.remove('invalid');
    } else if (password.length < 8) {
      passwordError.textContent = 'Password must be at least 8 characters';
      this.classList.add('invalid');
    } else {
      passwordError.textContent = '';
      this.classList.remove('invalid');
    }
  });
});

 // Update the form submission handler in your existing script
document.getElementById('loginForm').addEventListener('submit', async function(e) {
  e.preventDefault();
  
  // Get form values
  const email = document.getElementById('email').value.trim();
  const password = document.getElementById('password').value;
  
  // Trigger validation
  document.getElementById('email').dispatchEvent(new Event('input'));
  document.getElementById('password').dispatchEvent(new Event('input'));
  
  // Check for errors
  const errors = document.querySelectorAll('.error-message');
  let hasErrors = false;
  
  errors.forEach(error => {
    if (error.textContent !== '') {
      hasErrors = true;
    }
  });
  
  if (hasErrors) {
    return;
  }
  
  // Show loading state
  const submitBtn = document.querySelector('.login-btn');
  submitBtn.disabled = true;
  submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Signing In...';
  
  try {
    // Simulate API call (replace with actual authentication)
    const response = await authenticateUser(email, password);
    
    if (response.success) {
      // Store authentication token (in a real app)
      localStorage.setItem('authToken', response.token);
      
      // Redirect to dashboard
      window.location.href = 'dashboard.html';
    } else {
      // Show error message
      document.getElementById('password-error').textContent = 'Invalid email or password';
      document.getElementById('password').classList.add('invalid');
    }
  } catch (error) {
    console.error('Login error:', error);
    alert('An error occurred during login. Please try again.');
  } finally {
    // Reset button state
    submitBtn.disabled = false;
    submitBtn.textContent = 'Sign In';
  }
  });


// Simulated authentication function (replace with real API call)
async function authenticateUser(email, password) {
  // Simulate network delay
  await new Promise(resolve => setTimeout(resolve, 1000));
  
  // Get stored users from localStorage (from registration)
  const storedUsers = JSON.parse(localStorage.getItem('volunteerUsers')) || [];
  
  // Find matching user
  const user = storedUsers.find(u => u.email === email && u.password === password);
  
  return {
    success: !!user,
    token: user ? 'simulated_jwt_token_' + Math.random().toString(36).substr(2) : null,
    user: user || null
  };
};

// Get existing users or create empty array
const existingUsers = JSON.parse(localStorage.getItem('volunteerUsers')) || [];

// Check if user already exists
const userExists = existingUsers.some(user => user.email === formData.email);

if (userExists) {
  alert('This email is already registered. Please log in instead.');
  window.location.href = 'login.html';
} else {
  // Add new user (in real app, you'd hash the password first)
  existingUsers.push(formData);
  localStorage.setItem('volunteerUsers', JSON.stringify(existingUsers));
  
  alert('Account created successfully! Redirecting to login...');
  window.location.href = 'login.html';
}

// Initialize Facebook SDK
window.fbAsyncInit = function() {
    FB.init({
      appId: 'YOUR_FACEBOOK_APP_ID',  // Replace with your actual app ID
      cookie: true,
      xfbml: true,
      version: 'v18.0'
    });
    
    // This forces the button to render after SDK loads
    FB.XFBML.parse(); 
  };

  (function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

// Check Facebook login state
function checkFacebookLoginState() {
  FB.getLoginStatus(function (response) {
    if (response.status === 'connected') {
      // User is logged in and authenticated
      handleFacebookSignIn(response.authResponse);
    }
  });
}

// Handle Facebook sign-in
function handleFacebookSignIn(authResponse) {
  FB.api('/me', { fields: 'name,email' }, function (response) {
    const userData = {
      provider: 'facebook',
      id: authResponse.userID,
      name: response.name,
      email: response.email,
      accessToken: authResponse.accessToken
    };

    // Send to your backend for verification
    authenticateWithBackend(userData);
  });
}

// Handle Google sign-in
function handleGoogleSignIn(response) {
  const userData = {
    provider: 'google',
    id: response.credential,
    name: response.name,
    email: response.email
  };

  // Decode the credential to get detailed user info
  const decodedToken = parseJwt(response.credential);
  userData.details = decodedToken;

  // Send to your backend for verification
  authenticateWithBackend(userData);
}

// Helper function to parse JWT
function parseJwt(token) {
  try {
    return JSON.parse(atob(token.split('.')[1]));
  } catch (e) {
    return null;
  }
}

// Send social login data to your backend
function authenticateWithBackend(userData) {
  // Show loading state
  const submitBtn = document.querySelector('.login-btn');
  submitBtn.disabled = true;
  submitBtn.innerHTML = '<span class="loading"></span> Authenticating...';

  // In a real app, this would be an API call to your backend
  fetch('/api/social-auth', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(userData)
  })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        // Store token and redirect
        localStorage.setItem('authToken', data.token);
        window.location.href = 'dashboard.html';
      } else {
        alert('Authentication failed: ' + data.message);
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('An error occurred during authentication');
    })
    .finally(() => {
      submitBtn.disabled = false;
      submitBtn.textContent = 'Sign In';
    });
}

// server.js
const express = require('express');
const jwt = require('jsonwebtoken');
const { OAuth2Client } = require('google-auth-library');
const axios = require('axios');

const app = express();
app.use(express.json());

const GOOGLE_CLIENT_ID = 'YOUR_GOOGLE_CLIENT_ID';
const FACEBOOK_APP_ID = 'YOUR_FACEBOOK_APP_ID';
const FACEBOOK_APP_SECRET = 'YOUR_FACEBOOK_APP_SECRET';
const JWT_SECRET = 'YOUR_JWT_SECRET';

const googleClient = new OAuth2Client(GOOGLE_CLIENT_ID);

// Social authentication endpoint
app.post('/api/social-auth', async (req, res) => {
  try {
    const { provider, id, accessToken, email } = req.body;
    let user;
    
    if (provider === 'google') {
      // Verify Google token
      const ticket = await googleClient.verifyIdToken({
        idToken: id,
        audience: GOOGLE_CLIENT_ID
      });
      const payload = ticket.getPayload();
      user = {
        id: payload.sub,
        name: payload.name,
        email: payload.email,
        picture: payload.picture
      };
    } 
    else if (provider === 'facebook') {
      // Verify Facebook token
      const response = await axios.get(
        `https://graph.facebook.com/v18.0/me?fields=id,name,email&access_token=${accessToken}`
      );
      user = response.data;
    }
    
    // Check if user exists in your database
    // const dbUser = await User.findOrCreate(user);
    
    // Create JWT token
    const token = jwt.sign(
      { userId: user.id, email: user.email },
      JWT_SECRET,
      { expiresIn: '1d' }
    );
    
    res.json({ success: true, token, user });
  } catch (error) {
    console.error('Social auth error:', error);
    res.status(401).json({ success: false, message: 'Authentication failed' });
  }
});

app.listen(3000, () => console.log('Server running on port 3000'));

 // Profile Image Handling
        function uploadImage() {
            const fileInput = document.getElementById('imageUpload');
            const file = fileInput.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('profileImage').src = e.target.result;
                    // Here you would typically upload the image to your server
                    alert('Profile picture updated successfully!');
                };
                reader.readAsDataURL(file);
            } else {
                alert('Please select an image file first.');
            }
        }

        function removeImage() {
            document.getElementById('profileImage').src = 'https://via.placeholder.com/200';
            // Here you would typically remove the image from your server
            alert('Profile picture removed.');
        }

        // Password Visibility Toggle
        function togglePassword(id) {
            const input = document.getElementById(id);
            const icon = input.nextElementSibling.querySelector('i');

            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        // Password Strength Checker
        document.getElementById('newPassword').addEventListener('input', function () {
            const password = this.value;
            const requirements = {
                length: password.length >= 8,
                uppercase: /[A-Z]/.test(password),
                lowercase: /[a-z]/.test(password),
                number: /[0-9]/.test(password),
                special: /[^A-Za-z0-9]/.test(password)
            };

            document.getElementById('length-req').className = requirements.length ? 'valid' : 'invalid';
            document.getElementById('uppercase-req').className = requirements.uppercase ? 'valid' : 'invalid';
            document.getElementById('lowercase-req').className = requirements.lowercase ? 'valid' : 'invalid';
            document.getElementById('number-req').className = requirements.number ? 'valid' : 'invalid';
            document.getElementById('special-req').className = requirements.special ? 'valid' : 'invalid';

            // Check password match if confirm password is not empty
            const confirmPassword = document.getElementById('confirmPassword').value;
            if (confirmPassword !== '') {
                checkPasswordMatch();
            }
        });

        document.getElementById('confirmPassword').addEventListener('input', checkPasswordMatch);

        function checkPasswordMatch() {
            const password = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const matchElement = document.getElementById('password-match');

            if (confirmPassword === '') {
                matchElement.style.display = 'none';
            } else if (password !== confirmPassword) {
                matchElement.style.display = 'block';
            } else {
                matchElement.style.display = 'none';
            }
        }

        // Form Submission Handlers
        function savePersonalInfo() {
            // Here you would typically send the data to your server
            alert('Personal information saved successfully!');
        }

        function changePassword() {
            const currentPassword = document.getElementById('currentPassword').value;
            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (newPassword !== confirmPassword) {
                alert('Passwords do not match!');
                return;
            }

            // Here you would typically send the data to your server
            alert('Password changed successfully!');
            document.getElementById('passwordForm').reset();
        }

        function savePreferences() {
            // Here you would typically send the data to your server
            alert('Preferences saved successfully!');
        }

       document.addEventListener('DOMContentLoaded', function() {
    // Existing initialization
    document.getElementById('gender').value = 'male';
    document.getElementById('language').value = 'en';
    
    // New fields initialization
    document.getElementById('bloodGroup').value = 'A+';
    document.getElementById('occupation').value = 'Software Engineer';
    document.getElementById('vmsRole').value = 'volunteer';
    document.getElementById('education').value = 'bachelors';
    document.getElementById('educationalDetails').value = 'B.Sc in Computer Science, XYZ University, 2015';
});
