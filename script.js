function toggleMobileNavigation() {
  const mobileNavigation = document.getElementById("mobile-sidenav");
  mobileNavigation.classList.toggle('mobile-links-active');
}


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
            
            alert('Profile picture removed.');
        }

        
        document.getElementById('password-strength').addEventListener('input', function () {
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

        
        function savePersonalInfo() {
            
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

            
            alert('Password changed successfully!');
            document.getElementById('passwordForm').reset();
        }

        function savePreferences() {
            
            alert('Preferences saved successfully!');
        }

       document.addEventListener('DOMContentLoaded', function() {
    
    document.getElementById('gender').value = 'male';
    document.getElementById('language').value = 'en';
    
  
    document.getElementById('bloodGroup').value = 'A+';
    document.getElementById('occupation').value = 'Software Engineer';
    document.getElementById('vmsRole').value = 'volunteer';
    document.getElementById('education').value = 'bachelors';
    document.getElementById('educationalDetails').value = 'B.Sc in Computer Science, XYZ University, 2015';
});




document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm-password');
    const confirmPasswordError = document.getElementById('confirm-password-error');
    
    
    if (confirmPasswordError.textContent.trim() !== '') {
        confirmPasswordError.style.display = "block";
    }
    
    function validatePasswordMatch() {
        if (passwordInput.value !== confirmPasswordInput.value) {
            confirmPasswordError.textContent = "Passwords do not match";
            confirmPasswordError.style.display = "block";
            return false;
        } else {
            confirmPasswordError.textContent = "";
            confirmPasswordError.style.display = "none";
            return true;
        }
    }
    
  
    document.getElementById('signupForm').addEventListener('submit', function(e) {
        if (!validatePasswordMatch()) {
            e.preventDefault(); 
        }
    });
    
    
    confirmPasswordInput.addEventListener('input', validatePasswordMatch);
    passwordInput.addEventListener('input', validatePasswordMatch);
});
