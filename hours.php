<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VolunteerMS - My Hours</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'nav1.php'; ?>
    
    <div class="dashboard-container">
        <div class="welcome-section">
            <h1>My Volunteer Hours</h1>
            <p>Track and manage your volunteer hours and contributions</p>
        </div>
        
        <div class="hours-stats-cards">
            <div class="hours-stat-card">
                <div class="hours-stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="hours-stat-value">127</div>
                <div class="hours-stat-label">Total Hours</div>
            </div>
            
            <div class="hours-stat-card">
                <div class="hours-stat-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div class="hours-stat-value">3</div>
                <div class="hours-stat-label">Upcoming Shifts</div>
            </div>
            
            <div class="hours-stat-card">
                <div class="hours-stat-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="hours-stat-value">24</div>
                <div class="hours-stat-label">Completed Shifts</div>
            </div>
            
            <div class="hours-stat-card">
                <div class="hours-stat-icon">
                    <i class="fas fa-hourglass-half"></i>
                </div>
                <div class="hours-stat-value">5</div>
                <div class="hours-stat-label">Pending Approval</div>
            </div>
        </div>
        
        <button class="add-hours-btn">
            <i class="fas fa-plus"></i> Log New Hours
        </button>
        
        <div class="hours-table-container">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Opportunity</th>
                        <th>Organization</th>
                        <th>Hours</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jun 15, 2023</td>
                        <td>Beach Cleanup</td>
                        <td>Coastal Conservation</td>
                        <td>4.0</td>
                        <td class="status-approved">Approved</td>
                        <td>
                            <button class="action-btn btn-edit">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Jun 22, 2023</td>
                        <td>Food Bank Assistant</td>
                        <td>Community Food Share</td>
                        <td>3.5</td>
                        <td class="status-approved">Approved</td>
                        <td>
                            <button class="action-btn btn-edit">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Jun 29, 2023</td>
                        <td>After-School Tutoring</td>
                        <td>City Youth Foundation</td>
                        <td>2.0</td>
                        <td class="status-approved">Approved</td>
                        <td>
                            <button class="action-btn btn-edit">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Jul 6, 2023</td>
                        <td>Hospital Volunteer</td>
                        <td>City General Hospital</td>
                        <td>5.0</td>
                        <td class="status-approved">Approved</td>
                        <td>
                            <button class="action-btn btn-edit">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Jul 13, 2023</td>
                        <td>Animal Shelter Helper</td>
                        <td>Paws & Care Shelter</td>
                        <td>4.0</td>
                        <td class="status-pending">Pending</td>
                        <td>
                            <button class="action-btn btn-edit">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="action-btn btn-delete">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>