<?php
if (file_exists('users.json')) {
    $users = file('users.json', FILE_IGNORE_NEW_LINES);
    echo json_encode($users);
} else {
    echo json_encode([]);
}
?>
