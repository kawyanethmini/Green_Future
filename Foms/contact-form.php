<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "green_future"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Prepare SQL statement
$sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $subject, $message);

if ($stmt->execute()) {
    $response_message = "Thank you, $name! Your message has been sent successfully.";
    $alert_class = "alert-success";
} else {
    $response_message = "Oops! Something went wrong. Please try again.";
    $alert_class = "alert-danger";
}

// Close connections
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="alert <?= $alert_class; ?> text-center" role="alert">
            <?= $response_message; ?>
        </div>
        <div class="text-center mt-4">
            <a href="/GreenFuture/contact.php" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</body>
</html>