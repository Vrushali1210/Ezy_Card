<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inquiry Submitted</title>
</head>
<body>
    <h2>Thank You for Your Inquiry!</h2>
    <p>We have received your inquiry and will get back to you shortly.</p>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $mobile = htmlspecialchars($_POST['mobile']);
        $event_type = htmlspecialchars($_POST['event_type']);
        $event_date = htmlspecialchars($_POST['event_date']);
        $theme = htmlspecialchars($_POST['theme']);
        $catering = htmlspecialchars($_POST['catering']);
       

        // Here you would typically process the form data, e.g., save it to a database or send an email.

        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Mobile:</strong> $mobile</p>";
        echo "<p><strong>Event Type:</strong> $event_type</p>";
        echo "<p><strong>Event Date:</strong> $event_date</p>";
       
        echo "<p><strong>Theme & Decoration:</strong> $theme</p>";
        echo "<p><strong>Catering and Menu:</strong> $catering</p>";
       
    }
    ?>
</body>
</html>
