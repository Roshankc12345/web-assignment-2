<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = 'data.json'; // Path to JSON file

    // Read existing data
    $currentData = file_get_contents($file);
    $dataArray = json_decode($currentData, true);

    // Get form data
    $newUser = [
        "name" => $_POST['name'],
        "dob" => $_POST['dob'],
        "email" => $_POST['email'],
        "address" => $_POST['address'],
        "aadhar" => $_POST['aadhar']
    ];

    // Add new user to the array
    $dataArray[] = $newUser;

    // Save updated data back to the JSON file
    file_put_contents($file, json_encode($dataArray, JSON_PRETTY_PRINT));

    echo "success";
} else {
    echo "Invalid request.";
}
?>
