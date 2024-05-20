<?php
session_start();

if(isset($_SESSION['username'])) {
    $welcomeMessage = "Welcome, " . $_SESSION['username'];
    $logoutLink = "<a href='../../controllers/logoutController.php' class='logout'>Logout</a>";
} else {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/styleDashboard.css">
</head>
<body>
    <header class="header">
        <a href="homepage.php"><h1>Mental Health Support System</h1></a>
        <div class="user-info">
            <span><?php echo $welcomeMessage; ?></span>
            <a href="#" class="settings">Settings</a>
            <?php echo $logoutLink; ?>
        </div>
    </header>
    <div class="container">
        <aside class="sidebar">
            <nav>
                <ul>
                    <li><a href="#" data-target="dashboard.html">Dashboard</a></li>
                    <li><a href="#" data-target="emergency.php">Emergency Support</a></li>
                    <li><a href="#" data-target="status.php">Status</a></li>
                    <li><a href="#" data-target="search.php">Search Consultant</a></li>
                    <li><a href="#" data-target="appointment.php">Appointments</a></li>
                    <li><a href="#" data-target="writing.php">Write Story</a></li>
                </ul>
            </nav>
        </aside>

        <main class="main-content" id="main-content">
        </main>
        
    </div>

    <script src="../js/scriptDashboardd.js"></script>
</body>
</html>
