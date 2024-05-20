<?php
include '../../models/alldb.php';

if (isset($_GET['fullname'])) {
    $appointment = getAppointment($_GET['fullname']);
}

if(!$appointment){
    echo "No appointment found!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Receipt</title>
    <link rel="stylesheet" href="../css/styleDownload.css">
</head>

<body>
    <div class="receipt">
        <h2>Appointment Receipt</h2>
        <table>
            <tr>
                <th>Serial</th>
                <td><?php echo htmlspecialchars($appointment['serial']); ?></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><?php echo htmlspecialchars($appointment['username']); ?></td>
            </tr>
            <tr>
                <th>Full Name</th>
                <td><?php echo htmlspecialchars($appointment['fullname']); ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo htmlspecialchars($appointment['gender']); ?></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td><?php echo htmlspecialchars($appointment['p_number']); ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo htmlspecialchars($appointment['email']); ?></td>
            </tr>
            <tr>
                <th>Consultant</th>
                <td><?php echo htmlspecialchars($appointment['consultant']); ?></td>
            </tr>
            <tr>
                <th>Preferred Date</th>
                <td><?php echo htmlspecialchars($appointment['preff_date']); ?></td>
            </tr>
            <tr>
                <th>Preferred Time</th>
                <td><?php echo htmlspecialchars($appointment['preff_time']); ?></td>
            </tr>
        </table>
        <button  onclick="window.print()">Download Receipt</button>
        <a href="homepage.php"><button>Back to Home</button></a>
    </div>
</body>
</html>
