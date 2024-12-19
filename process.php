<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"]);
    $dob = trim($_POST["dob"]);
    $email = trim($_POST["email"]);
    $address = trim($_POST["address"]);
    $aadhar = trim($_POST["aadhar"]);

    // Basic Validation
    if (!empty($name) && !empty($dob) && !empty($email) && !empty($address) && !empty($aadhar)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^\d{12}$/", $aadhar)) {
            echo "success";
        } else {
            echo "Invalid email or Aadhar number.";
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request.";
}
?>
