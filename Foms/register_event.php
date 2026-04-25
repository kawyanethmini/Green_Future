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
$event = $_POST['event'];

// Prepare SQL statement
$sql = "INSERT INTO event_registrations (name, email, event) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $event);

if ($stmt->execute()) {
    $message = "Thank you, $name! You have successfully registered for the event.";
    $alert_class = "alert-success";
} else {
    $message = "Oops! Something went wrong. Please try again.";
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
    <title>Event Registration</title>
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
            <?= $message; ?>
        </div>
        <div class="text-center mt-4">
            <a href="/GreenFuture/news.php" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</body>
</html>
