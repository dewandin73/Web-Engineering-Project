<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile | VolunteerMS</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="dashboard-page">
    <?php include 'nav1.php'; ?>
    
    <div class="dashboard-container">
        
        <div class="welcome-section w3-padding">
            <h1><i class="fas fa-user-circle"></i> My Profile</h1>
            <p>Manage your account information and settings</p>
        </div>

        <div class="w3-row-padding">
            
            <div class="w3-col m4">
                <div class="main-card w3-round-large">
                    <div class="card-header w3-blue w3-round-large">
                        <h2><i class="fas fa-camera"></i> Profile Picture</h2>
                    </div>
                    <div class="w3-padding" style="text-align: center;">
                        <div class="w3-margin-bottom" style="position: relative; display: inline-block;">
                            <img id="profileImage" src="https://via.placeholder.com/200" class="w3-circle"
                                style="width: 200px; height: 200px; object-fit: cover; border: 5px solid #f1f1f1;">
                            <div class="w3-padding-small"
                                style="position: absolute; bottom: 10px; right: 10px; background: #0288d1; border-radius: 50%;">
                                <label for="imageUpload" style="cursor: pointer;">
                                    <i class="fas fa-pencil-alt" style="color: white;"></i>
                                </label>
                                <input id="imageUpload" type="file" accept="image/*" style="display: none;">
                            </div>
                        </div>
                        <button class="w3-button w3-blue w3-round" onclick="uploadImage()">
                            <i class="fas fa-upload"></i> Upload Photo
                        </button>
                        <button class="w3-button w3-red w3-round w3-margin-left" onclick="removeImage()">
                            <i class="fas fa-trash"></i> Remove
                        </button>
                    </div>
                </div>

                
                <div class="main-card w3-round-large w3-margin-top">
                    <div class="card-header w3-blue w3-round-large">
                        <h2><i class="fas fa-chart-line"></i> Volunteer Stats</h2>
                    </div>
                    <div class="w3-padding">
                        <div class="impact-item">
                            <div class="impact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h3>127</h3>
                                <p>Total Hours</p>
                            </div>
                        </div>
                        <div class="impact-item">
                            <div class="impact-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div>
                                <h3>24</h3>
                                <p>Events Attended</p>
                            </div>
                        </div>
                        <div class="impact-item">
                            <div class="impact-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div>
                                <h3>3</h3>
                                <p>Badges Earned</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w3-col m8">
                <div class="main-card w3-round-large">
                    <div class="card-header w3-blue w3-round-large">
                        <h2><i class="fas fa-user-edit"></i> Personal Information</h2>
                    </div>
                    <div class="w3-padding">
                        <form id="personalInfoForm">
                            <div class="w3-row-padding">
                                <div class="w3-half w3-margin-bottom">
                                    <label><i class="fas fa-user"></i> First Name</label>
                                    <input class="w3-input w3-border" type="text" value="John" id="firstName" required>
                                </div>
                                <div class="w3-half w3-margin-bottom">
                                    <label><i class="fas fa-user"></i> Last Name</label>
                                    <input class="w3-input w3-border" type="text" value="Doe" id="lastName" required>
                                </div>
                            </div>

                            <div class="w3-row-padding">
                                <div class="w3-half w3-margin-bottom">
                                    <label><i class="fas fa-envelope"></i> Email</label>
                                    <input class="w3-input w3-border" type="email" value="john.doe@example.com"
                                        id="email" required>
                                </div>
                                <div class="w3-half w3-margin-bottom">
                                    <label><i class="fas fa-phone"></i> Phone</label>
                                    <input class="w3-input w3-border" type="tel" value="(123) 456-7890" id="phone">
                                </div>
                            </div>

                            <div class="w3-row-padding">
                                <div class="w3-half w3-margin-bottom">
                                    <label><i class="fas fa-birthday-cake"></i> Date of Birth</label>
                                    <input class="w3-input w3-border" type="date" value="1990-01-15" id="dob">
                                </div>
                                <div class="w3-half w3-margin-bottom">
                                    <label><i class="fas fa-venus-mars"></i> Gender</label>
                                    <select class="w3-select w3-border" id="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                        <option value="prefer-not-to-say">Prefer not to say</option>
                                    </select>
                                </div>
                            </div>

                            
                            <div class="w3-row-padding">
                                <div class="w3-half w3-margin-bottom">
                                    <label><i class="fas fa-tint"></i> Blood Group</label>
                                    <select class="w3-select w3-border" id="bloodGroup">
                                        <option value="">Select Blood Group</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                                <div class="w3-half w3-margin-bottom">
                                    <label><i class="fas fa-briefcase"></i> Occupation</label>
                                    <input class="w3-input w3-border" type="text" placeholder="Your profession"
                                        id="occupation">
                                </div>
                            </div>

                            <div class="w3-row-padding">
                                <div class="w3-half w3-margin-bottom">
                                    <label><i class="fas fa-user-tag"></i> Role in VMS</label>
                                    <select class="w3-select w3-border" id="vmsRole">
                                        <option value="">Select your role</option>
                                        <option value="volunteer">Volunteer</option>
                                        <option value="team-leader">Team Leader</option>
                                        <option value="event-coordinator">Event Coordinator</option>
                                        <option value="admin">Administrator</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="w3-half w3-margin-bottom">
                                    <label><i class="fas fa-graduation-cap"></i> Highest Education</label>
                                    <select class="w3-select w3-border" id="education">
                                        <option value="">Select education level</option>
                                        <option value="high-school">High School</option>
                                        <option value="diploma">Diploma</option>
                                        <option value="bachelors">Bachelor's Degree</option>
                                        <option value="masters">Master's Degree</option>
                                        <option value="phd">PhD</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="w3-margin-bottom">
                                <label><i class="fas fa-university"></i> Educational Details</label>
                                <textarea class="w3-input w3-border" id="educationalDetails" rows="3"
                                    placeholder="Degree, Institution, Year of passing, etc."></textarea>
                            </div>
                           

                            <div class="w3-margin-bottom">
                                <label><i class="fas fa-map-marker-alt"></i> Address</label>
                                <input class="w3-input w3-border" type="text" value="123 Main St" id="address1">
                                <input class="w3-input w3-border w3-margin-top" type="text"
                                    placeholder="Apartment, suite, etc." id="address2">
                            </div>

                            <div class="w3-row-padding">
                                <div class="w3-third w3-margin-bottom">
                                    <label><i class="fas fa-city"></i> City</label>
                                    <input class="w3-input w3-border" type="text" value="New York" id="city">
                                </div>
                                <div class="w3-third w3-margin-bottom">
                                    <label><i class="fas fa-flag"></i> State</label>
                                    <input class="w3-input w3-border" type="text" value="NY" id="state">
                                </div>
                                <div class="w3-third w3-margin-bottom">
                                    <label><i class="fas fa-mail-bulk"></i> ZIP Code</label>
                                    <input class="w3-input w3-border" type="text" value="10001" id="zip">
                                </div>
                            </div>

                            <div class="w3-margin-top" style="text-align: right;">
                                <button type="button" class="w3-button w3-blue w3-round" onclick="savePersonalInfo()">
                                    <i class="fas fa-save"></i> Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                
                <div class="main-card w3-round-large w3-margin-top">
                    <div class="card-header w3-blue w3-round-large">
                        <h2><i class="fas fa-lock"></i> Change Password</h2>
                    </div>
                    <div class="w3-padding">
                        <form id="passwordForm">
                            <div class="w3-margin-bottom">
                                <label><i class="fas fa-key"></i> Current Password</label>
                                <div class="input-with-icon">
                                    <i class="fas fa-lock"></i>
                                    <input class="w3-input" type="password" id="currentPassword" required>
                                    <span class="toggle-password" onclick="togglePassword('currentPassword')">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="w3-margin-bottom">
                                <label><i class="fas fa-key"></i> New Password</label>
                                <div class="input-with-icon">
                                    <i class="fas fa-lock"></i>
                                    <input class="w3-input" type="password" id="newPassword" required>
                                    <span class="toggle-password" onclick="togglePassword('newPassword')">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                                <div class="password-requirements">
                                    <p>Password Requirements:</p>
                                    <ul>
                                        <li id="length-req" class="invalid">Minimum 8 characters</li>
                                        <li id="uppercase-req" class="invalid">At least one uppercase letter</li>
                                        <li id="lowercase-req" class="invalid">At least one lowercase letter</li>
                                        <li id="number-req" class="invalid">At least one number</li>
                                        <li id="special-req" class="invalid">At least one special character</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="w3-margin-bottom">
                                <label><i class="fas fa-key"></i> Confirm New Password</label>
                                <div class="input-with-icon">
                                    <i class="fas fa-lock"></i>
                                    <input class="w3-input" type="password" id="confirmPassword" required>
                                    <span class="toggle-password" onclick="togglePassword('confirmPassword')">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                                <div id="password-match" class="error-message" style="display: none;">
                                    Passwords do not match
                                </div>
                            </div>

                            <div class="w3-margin-top" style="text-align: right;">
                                <button type="button" class="w3-button w3-blue w3-round" onclick="changePassword()">
                                    <i class="fas fa-sync-alt"></i> Update Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                
                <div class="main-card w3-round-large w3-margin-top">
                    <div class="card-header w3-blue w3-round-large">
                        <h2><i class="fas fa-cog"></i> Account Preferences</h2>
                    </div>
                    <div class="w3-padding">
                        <div class="w3-margin-bottom">
                            <label><i class="fas fa-bell"></i> Notification Preferences</label>
                            <div class="w3-checkbox">
                                <input type="checkbox" id="emailNotifications" checked>
                                <label for="emailNotifications">Email Notifications</label>
                            </div>
                            <div class="w3-checkbox">
                                <input type="checkbox" id="smsNotifications">
                                <label for="smsNotifications">SMS Notifications</label>
                            </div>
                            <div class="w3-checkbox">
                                <input type="checkbox" id="eventReminders" checked>
                                <label for="eventReminders">Event Reminders</label>
                            </div>
                        </div>

                        <div class="w3-margin-bottom">
                            <label><i class="fas fa-globe"></i> Language Preference</label>
                            <select class="w3-select w3-border" id="language">
                                <option value="en">English</option>
                                <option value="es">Español</option>
                                <option value="fr">Français</option>
                                <option value="de">Deutsch</option>
                            </select>
                        </div>

                        <div class="w3-margin-top" style="text-align: right;">
                            <button type="button" class="w3-button w3-blue w3-round" onclick="savePreferences()">
                                <i class="fas fa-save"></i> Save Preferences
                            </button>
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