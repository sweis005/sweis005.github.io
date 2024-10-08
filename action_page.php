<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $quadrant = htmlspecialchars($_POST['quadrant']);
    $g_email = htmlspecialchars($_POST['g-email']);
    $datapadid = htmlspecialchars($_POST['datapadid']);

    // Check email
    if (!filter_var($g_email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Process the data
    echo "<h2>Form Submission Successful</h2>";
    echo "<p>First Name: $firstname</p>";
    echo "<p>Last Name: $lastname</p>";
    echo "<p>Galactic Quadrant: $quadrant</p>";
    echo "<p>Galactic Email: $g_email</p>";
    echo "<p>Datapad ID: $datapadid</p>";

    // Optionally, you can send an email
    // $to = "your-email@example.com";
    // $subject = "New Interest Form Submission";
    // $message = "First Name: $firstname\nLast Name: $lastname\nGalactic Quadrant: $quadrant\nGalactic Email: $g_email\nDatapad ID: $datapadid";
    // $headers = "From: webmaster@example.com";
    // mail($to, $subject, $message, $headers);
}
?>
