<?php
require_once("../../models/extradb.php");
$option = selectConsultants();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
    <link rel="stylesheet" href="../css/styleAppointment.css">
</head>

<body>
    <div class="container">
        <header>Book Appointment</header>
        <form action="../../controllers/appointmentController.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <div class="fields">
                        <div class="input-field">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" placeholder="Enter username (if any)">
                        </div>

                        <div class="input-field">
                            <label for="full-name">Full Name</label>
                            <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
                        </div>

                        <div class="input-field">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" required>
                                <option value="">Select gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="phone-number">Phone Number</label>
                            <input type="tel" id="p_number" name="p_number" placeholder="Enter your phone number" required>
                        </div>

                        <div class="input-field">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label for="consultant-list">Consultant List</label>
                            <select id="consultant" name="consultant" required>
                                <option value="" disabled selected>Select consultant</option>
                                <?php echo $option; ?>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="preferred-date">Preferred Date</label>
                            <input type="date" id="preff_date" name="preff_date" required>
                        </div>

                        <div class="input-field">
                            <label for="preferred-time">Preferred Time</label>
                            <input type="time" id="preff_time" name="preff_time" required>
                        </div>

                        <div class="input-field">
                            <label for="brief">Brief</label>
                            <textarea id="brief" name="brief" placeholder="Enter brief details" rows="4" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="button-container">
                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
