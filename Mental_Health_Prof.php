<!DOCTYPE html>
<html>
<head>
    <title>MENTAL HEALTH PROFESSIONAL</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="top_navbar">
        <h1 class="logo">Mental Health Support System</h1>
        <div class="welcome">
            <span>Welcome, <span id="usernamePlaceholder"></span></span>
        </div>
        <div class="icons">
           <img src="icons/mail.png" class="mail">
           <img src="icons/settings.png" class="settings_icon">
           <a href="login.php"><img src="icons/logout.png" class="logout"></a>
        </div>
    </div>

<?php
    // setting the test username dynamically
    $username = "Rezwan Ahamd";
    echo "<script>document.getElementById('usernamePlaceholder').textContent = '$username';</script>";
?>

    <div class="main_content">
    <div class="sidebar">
        <ul class="navigation">
            <h2>Menu</h2>
            <li><a href="#"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="#"><i class="fas fa-user"></i> Patients</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Appointment</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Resource Library</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="rectangle">
            <div class="top_navbar_rectangle">
                <div class="navbar">
                    <div class="dropdown">
                        <button class="dropbtn">Outcome Measurement</button>
                        <div class="dropdown-content">
                            <a href="#">Client Progress</a>
                            <a href="#">Evaluate Treatment Efficiency</a>
                            <a href="#">Inform Client Decisions</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Client Engagement</button>
                        <div class="dropdown-content">
                            <a href="#">Chat with Client</a>
                            <a href="#">Give Recommendations</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Case Management</button>
                        <div class="dropdown-content">
                            <a href="#">Client Case</a>
                            <a href="#">Urgent Cases</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Development Hub</button>
                        <div class="dropdown-content">
                            <a href="#">Create New Session</a>
                            <a href="#">Call for Recommendations</a>
                            <a href="#">Staff Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
</html>
