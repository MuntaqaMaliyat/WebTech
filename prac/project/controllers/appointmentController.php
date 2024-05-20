<?php
require_once('../models/alldb.php');
require_once('../models/condb.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $appointmentData = [
        'username' => $_POST['username'],
        'fullname' => $_POST['fullname'],
        'gender' => $_POST['gender'],
        'p_number' => $_POST['p_number'],
        'email' => $_POST['email'],
        'consultant' => $_POST['consultant'],
        'preff_date' => $_POST['preff_date'],
        'preff_time' => $_POST['preff_time'],
        'brief' => $_POST['brief']

    ];

    if (insertAppointment($appointmentData)) {
        header("Location: ../views/php/download.php?fullname=" . $_POST['fullname']);
        exit();
    } else {
        echo "Error";
    }
}
