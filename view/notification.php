
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications (4/5)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #3b5998;
            color: white;
            padding: 10px;
            display: flex;
            align-items: center;
        }

        .sidebar {
            width: 200px;
            background-color: #f1f1f1;
            padding: 20px;
            height: 100vh;
            position: fixed;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
        }


    </style>
</head>
<body>


    <div class="navbar">
        <span>BondhuShobha</span>
        <input type="text" placeholder="Search for friends">
        <div>
            <a href="#">Notification</a>
            <a href="#">Dark Mode</a>
            <a href="#">Profile</a>
        </div>
    </div>

    <div class="sidebar">
        <button>User Feed</button>
        <button>Messages</button>
        <button>Friends</button>
    </div>

    <div class="content">
        <h2>Notifications</h2>
        <div class="notification-container">
            <div class="notification-item">
                <span>Notification 1</span>
                <button>Delete</button>
            </div>
            <div class="notification-item">
                <span>Notification 2</span>
                <button>Delete</button>
            </div>
            <div class="notification-item">
                <span>Notification 3</span>
                <button>Delete</button>
            </div>
            <div class="notification-item">
                <span>Notification 4</span>
                <button>Delete</button>
            </div>
        </div>

        <div class="all-notification-button">
            <a href="all_notification.php">All Notifications</a>
        </div>
    </div>

</body>
</html>
