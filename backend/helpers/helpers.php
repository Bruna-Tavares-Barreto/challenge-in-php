<?php
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function redirectToLogin() {
    header('Location: auth/login.php');
    exit();
}

function sanitize($data) {
    return htmlspecialchars(trim($data));
}
?>
