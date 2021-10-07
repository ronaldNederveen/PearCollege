<?php
$users = [
    "joe" => "123456",
    "jon" => "123456"
];

session_start();

if (isset($_POST['user']) && !isset($_SESSION['user'])) {
    if ($users[$_POST['user']] == $_POST['password']) {
        $_SESSION['user'] = $_POST['user'];
    }
    if (!isset($_SESSION['user'])) { $failed = true;}
}

if (isset($_SESSION['user'])) {
    header("Location: testindex.php");
    exit();
}