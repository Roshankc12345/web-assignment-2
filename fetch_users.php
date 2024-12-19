<?php
$file = 'data.json'; // Path to JSON file

// Read and return the contents of the JSON file
if (file_exists($file)) {
    $data = file_get_contents($file);
    echo $data;
} else {
    echo json_encode([]);
}
?>
