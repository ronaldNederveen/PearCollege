<?php
if (!isset($_SESSION['naam'])) {
header('Location: login.php');
}
?>