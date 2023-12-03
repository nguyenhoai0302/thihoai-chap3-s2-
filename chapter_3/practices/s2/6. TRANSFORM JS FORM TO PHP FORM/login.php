<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $password = $_POST["password"];

    if ($password === "1234") {
        echo '<div id="hidden" style="display:none">This is sensitive data visible only if the user knows the correct password</div>';
    } else {
        echo "Invalid password";
    }
}
?>