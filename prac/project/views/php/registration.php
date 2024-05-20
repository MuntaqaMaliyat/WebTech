<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration:</title>
    <link rel="stylesheet" href="../css/styleRegistration.css">
</head>

<body>
    <h2>Patient Registration:</h2>
    <form method="post" action="../../controllers/regSuccessController.php">
        <fieldset>
            <legend>
                <h3><b>Personal Information:</b></h3>
            </legend>
            <table>
                <tr>
                    <td><label for="fullName">Full Name:</label></td>
                    <td><input type="text" id="fullName" name="fullName"></td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth:</label></td>
                    <td><input type="date" id="dob" name="dob"></td>
                </tr>
                <tr>
                    <td><label>Gender:</label></td>
                    <td>
                        <input type="radio" id="male" name="gender" value="Male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="Female">
                        <label for="female">Female</label>
                        <input type="radio" id="other" name="gender" value="Other">
                        <label for="other">Other</label>
                    </td>
                </tr>
                <tr>
                    <td><label for="address">Address:</label></td>
                    <td><input type="text" id="address" name="address"></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone Number:</label></td>
                    <td><input type="text" id="phone" name="phone"></td>
                </tr>
                <tr>
                    <td><label for="email">Email Address:</label></td>
                    <td><input type="email" id="email" name="email"></td>
                </tr>
            </table>
        </fieldset>

        <br>
        <fieldset>
            <legend>
                <h3><b>Health Information:</b></h3>
            </legend>
            <table>
                <tr>
                    <td><label for="medicalHistory">Medical History:</label></td>
                    <td><textarea id="medicalHistory" name="medicalHistory" rows="4" cols="50"></textarea></td>
                </tr>

                <tr>
                    <td><label for="currentMedications">Current Medications:</label></td>
                    <td><textarea id="currentMedications" name="currentMedications" rows="4" cols="50"></textarea></td>
                </tr>
                <tr>
                    <td><label for="previousSurgeries">Previous Surgeries or Procedures:</label></td>
                    <td><textarea id="previousSurgeries" name="previousSurgeries" rows="4" cols="50"></textarea></td>
                </tr>
            </table>
        </fieldset>

        <br>
        <fieldset>
            <legend>
                <h3><b>Emergency Contact:</b></h3>
            </legend>
            <table>
                <tr>
                    <td><label for="emergencyName">Name:</label></td>
                    <td><input type="text" id="emergencyName" name="emergencyName"></td>
                </tr>
                <tr>
                    <td><label for="relationship">Relationship:</label></td>
                    <td><input type="text" id="relationship" name="relationship"></td>
                </tr>
                <tr>
                    <td><label for="emergencyPhone">Phone Number:</label></td>
                    <td><input type="text" id="emergencyPhone" name="emergencyPhone"></td>
                </tr>
            </table>
        </fieldset>

        <br>
        <fieldset>
            <legend>
                <h3><b>Additional Information:</b></h3>
            </legend>
            <table>
                <tr>
                    <td><label for="preferredLanguage">Preferred Language:</label></td>
                    <td><input type="text" id="preferredLanguage" name="preferredLanguage"></td>
                </tr>
                <tr>
                    <td><label for="ethnicity">Ethnicity:</label></td>
                    <td><input type="text" id="ethnicity" name="ethnicity"></td>
                </tr>
                <tr>
                    <td><label for="occupation">Occupation:</label></td>
                    <td><input type="text" id="occupation" name="occupation"></td>
                </tr>
            </table>
        </fieldset>
        <br>
        <fieldset>
            <legend>
                <h3><b>Security:</b></h3>
            </legend>
            <table>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>
                <tr>
                    <td><label for="r_password">Retype Password:</label></td>
                    <td><input type="password" id="r_password" name="r_password" required></td>
                </tr>
            </table>
        </fieldset>
        <br>
        <?php
        if (!empty($_SESSION['mess1'])) {
        ?>
            <h5><?php echo $_SESSION['mess1']; ?></h5>
        <?php
            // session_destroy();
        }
        ?>
        <button type="submit">Regester</button>
    </form>
</body>
</html>