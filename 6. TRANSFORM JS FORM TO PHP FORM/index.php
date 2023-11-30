<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    if ($password === '1234') {
        $_SESSION['authenticated'] = true;
    }
}

if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
    echo '<div>This is sensitive data visible only if the user knows the correct password</div>';
    // Additional code to display protected content
} else {
    echo '
    <form method="POST">
        <input type="password" name="password" id="password" placeholder="Password">
        <button type="submit" id="login_btn">Log in</button>
    </form>';
}
?>