<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Opportunities</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'nav1.php'; ?>
    <div class="dashboard-container">
        <div class="welcome-section">
            <h1>Volunteer Opportunities</h1>
            <p>Find meaningful ways to contribute to your community</p>
        </div>
        
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search opportunities...">
            <button class="search-btn">
                <i class="fas fa-search"></i> Search
            </button>
        </div>
        
        <div class="opportunities-grid">
            <div class="opportunity-card">
                <h3>After-School Tutoring</h3>
                <p class="org-name">City Youth Foundation</p>
                <p class="description">Help elementary students with homework and reading skills twice a week at our downtown center.</p>
                <div class="details">
                    <span class="detail-item"><i class="fas fa-map-marker-alt"></i> Downtown Center</span>
                    <span class="detail-item"><i class="fas fa-clock"></i> Mon/Wed 3-5pm</span>
                </div>
                <div class="action-buttons">
                    <a href="#" class="btn btn-details"><i class="fas fa-info-circle"></i> Details</a>
                    <a href="#" class="btn btn-apply"><i class="fas fa-check"></i> Apply</a>
                </div>
            </div>
            
            <div class="opportunity-card">
                <h3>Beach Cleanup</h3>
                <p class="org-name">Coastal Conservation</p>
                <p class="description">Monthly beach cleanup to remove debris and protect marine life at Sunset Beach.</p>
                <div class="details">
                    <span class="detail-item"><i class="fas fa-map-marker-alt"></i> Sunset Beach</span>
                    <span class="detail-item"><i class="fas fa-clock"></i> 1st Saturday/month</span>
                </div>
                <div class="action-buttons">
                    <a href="#" class="btn btn-details"><i class="fas fa-info-circle"></i> Details</a>
                    <a href="#" class="btn btn-apply"><i class="fas fa-check"></i> Apply</a>
                </div>
            </div>
            
            <div class="opportunity-card">
                <h3>Food Bank Assistant</h3>
                <p class="org-name">Community Food Share</p>
                <p class="description">Help sort and package food donations for distribution to families in need.</p>
                <div class="details">
                    <span class="detail-item"><i class="fas fa-map-marker-alt"></i> Warehouse District</span>
                    <span class="detail-item"><i class="fas fa-clock"></i> Tue/Thu 9am-12pm</span>
                </div>
                <div class="action-buttons">
                    <a href="#" class="btn btn-details"><i class="fas fa-info-circle"></i> Details</a>
                    <a href="#" class="btn btn-apply"><i class="fas fa-check"></i> Apply</a>
                </div>
            </div>
            
            <div class="opportunity-card">
                <h3>Animal Shelter Helper</h3>
                <p class="org-name">Paws & Care Shelter</p>
                <p class="description">Walk dogs, socialize cats, and help with general shelter operations.</p>
                <div class="details">
                    <span class="detail-item"><i class="fas fa-map-marker-alt"></i> Northside Shelter</span>
                    <span class="detail-item"><i class="fas fa-clock"></i> Weekends 10am-4pm</span>
                </div>
                <div class="action-buttons">
                    <a href="#" class="btn btn-details"><i class="fas fa-info-circle"></i> Details</a>
                    <a href="#" class="btn btn-apply"><i class="fas fa-check"></i> Apply</a>
                </div>
            </div>
            
            <div class="opportunity-card">
                <h3>Hospital Volunteer</h3>
                <p class="org-name">City General Hospital</p>
                <p class="description">Assist patients and visitors with wayfinding and provide comfort to patients.</p>
                <div class="details">
                    <span class="detail-item"><i class="fas fa-map-marker-alt"></i> Main Hospital</span>
                    <span class="detail-item"><i class="fas fa-clock"></i> Flexible shifts</span>
                </div>
                <div class="action-buttons">
                    <a href="#" class="btn btn-details"><i class="fas fa-info-circle"></i> Details</a>
                    <a href="#" class="btn btn-apply"><i class="fas fa-check"></i> Apply</a>
                </div>
            </div>
            
            <div class="opportunity-card">
                <h3>Virtual Tutoring</h3>
                <p class="org-name">Online Learning Initiative</p>
                <p class="description">Provide virtual tutoring in math or science to middle school students.</p>
                <div class="details">
                    <span class="detail-item"><i class="fas fa-laptop"></i> Remote</span>
                    <span class="detail-item"><i class="fas fa-clock"></i> Flexible hours</span>
                </div>
                <div class="action-buttons">
                    <a href="#" class="btn btn-details"><i class="fas fa-info-circle"></i> Details</a>
                    <a href="#" class="btn btn-apply"><i class="fas fa-check"></i> Apply</a>
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="logo">© 2025 · Volunteer<span>Management</span>System · All rights reserved</div>
    </footer>
</body>
</html>