<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "jrodri27@nd.edu"; // School administrator's email address
    $subject = "Contact from School Website";
    $message = "Relation to School: " . $_POST["relation"] . "\n";
    $message .= "Name: " . $_POST["name"] . "\n";
    $message .= "Email: " . $_POST["email"];

    if (mail($to, $subject, $message)) {
        echo "Email sent successfully!";
    } else {
        echo "Email could not be sent.";
    }
}
?>
