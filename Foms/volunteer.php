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
$interest = $_POST['interest'];

// Prepare SQL statement
$sql = "INSERT INTO volunteers (name, email, interest) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $interest);

if ($stmt->execute()) {
    $message = "Thank you, $name! Your volunteer registration was successful.";
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
    <title>Volunteer Registration</title>
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
            <a href="/GreenFuture/Get-Involved.php" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</body>
</html>