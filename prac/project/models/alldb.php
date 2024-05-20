<?php
require_once('condb.php');


function auth($username, $pass)
{
    $query = "select * from user_auth where username='$username' and password='$pass'";
    $conn = conn();
    $result = mysqli_query($conn, $query);

    $row = mysqli_num_rows($result);
    if ($row == 1) {
        return true;
    } else {
        return false;
    }
}

function prevStatus($username)
{
    $conn = conn();
    $query = "SELECT * FROM status WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_assoc($result);
}

function updateStatus($username, $score, $date)
{
    $conn = conn();
    // $query = "INSERT INTO status (username, prev_score, prev_date) VALUES ('$username', '$score', '$date')";
    $query = "UPDATE status SET prev_score='$score', prev_date='$date' WHERE username='$username'";

    $result = mysqli_query($conn, $query);
    return $result;
}

function addUserToStatus($username)
{
    $conn = conn();
    $query = "INSERT INTO status (username) VALUES ('$username')";

    $result = mysqli_query($conn, $query);
    return $result;
}

function addUser($username, $pass) {
    $conn = conn();

    $query = "INSERT INTO user_auth (username, password) VALUES ('$username', '$pass')";

    $result = mysqli_query($conn, $query);
    if($result)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function insertAppointment($data)
{
    $conn = conn();
    $query = "INSERT INTO appointment (username, fullname, gender, p_number, email, consultant, preff_date, preff_time, brief) VALUES ('" . $data['username'] . "', '" . $data['fullname'] . "', '" . $data['gender'] . "', '" . $data['p_number'] . "', '" . $data['email'] . "', '" . $data['consultant'] . "', '" . $data['preff_date'] . "', '" . $data['preff_time'] . "', '" . $data['brief'] . "')";

    $result = mysqli_query($conn, $query);
    return $result;
}

function getAppointment($fullname)
{
    $conn = conn();
    $query = "SELECT * FROM appointment WHERE fullname = '$fullname'";

    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);
}


