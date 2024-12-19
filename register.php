<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $school = $_POST['school'];
    $college = $_POST['college'];
    $hobby = $_POST['hobby'];
    $aadhaar = $_POST['aadhaar'];
    $address = $_POST['address'];

    // Format user data
    $userData = "$name, $email, $dob, $school, $college, $hobby, $aadhaar, $address\n";

    // Save data to a file
    file_put_contents('users.txt', $userData, FILE_APPEND);

    echo 'success';
} else {
    echo 'error';
}
?>
