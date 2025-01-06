<?php
session_start();
require_once '../view/login.php';
if (!isset($_SESSION['user_email'])) {
    header("Location: report.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BondhuShobha - Report System</title>
   
</head>
<body>
    <div class="header">
        <div class="logo">BondhuShobha</div>
        <input type="text" placeholder="Search for friends">
        <div class="options">
            <div>Dark Mode</div>
            <div>Notification</div>
            <div>Profile</div>
        </div>
    </div>
    
    <div class="main">
        <div class="sidebar">
            <button><a href ="userfeed.php">Feeds</a></button>
            <button><a href="message.php">Message</a></button>
            <button><a href="friends.php">Friends</a></button>
        </div>
        
        <div class="content">
            <h3>Add user to Report</h3>
            <div class="report-form">
                <input type="text" placeholder="Username">
                <select>
                    <option>Purpose</option>
                    <option>Spam</option>
                    <option>Harassment</option>
                    <option>Inappropriate Content</option>
                </select>
                <button>Report</button>
            </div>
            
            <h3>Reports List</h3>
            <div class="report-list">
                <div class="report-item">
                    <span>Username</span>
                    <span>Reason</span>
                    <span>Reported</span>

                </div>
                <div class="report-item">
                    <span>Username</span>
                    <span>Reason</span>
                    <span>Reported</span>
                </div>
                <div class="report-item">
                    <span>Username</span>
                    <span>Reason</span>
                    <span>Reported</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
