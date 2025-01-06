<?php
    session_start();
    if (!isset($_SESSION['status'])) {
        header('location: login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BondhuShobha</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f5f5f5;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #3b5998;
            color: white;
        }
        .main {
            display: flex;
            height: calc(100vh - 60px);
        }

    

    </style>



</head>
<body>
    <div class="header">
        <div class="logo">BondhuShobha</div>
        <input type="text" placeholder="Search for friends">
        <div class="options">
            <div>Dark Mode</div>
            <div><a href ="notification.php">Notification</a></div>
            <div>Profile</div>
            <div><a href="../controller/logout.php"> Logout </a></div>
        </div>
    </div>
    
    <div class="main">
        <div class="sidebar">
            <h2><a href ="userfeed.php">Feeds</a></h2>
            <h3>Chats</h3>
            <p>username</p>
            <p>username</p>
        </div>
        <div class="chat">
            <div class="chat-display" style="flex-grow: 1; background-color: #e0e0e0; border-radius: 5px; padding: 10px;"></div>
            <div class="upload-send">
                <input type="file" id="upload">
                <textarea placeholder="Text"></textarea>
                <button type="submit">Send</button>
            </div>
        </div>
        <div class="profile">
            <img src="" alt="User Photo">
            <h3>username</h3>
            <button>Settings</button>
            <button>Block</button>
        </div>
    </div>
</body>
</html>
