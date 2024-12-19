<?php
if (file_exists('users.txt')) {
    $users = file('users.txt', FILE_IGNORE_NEW_LINES);
    echo json_encode($users);
} else {
    echo json_encode([]);
}
?>
