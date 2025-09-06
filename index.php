<?php
// Initialize message variable
$msg = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "contact");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data and escape for security
    $name    = $conn->real_escape_string($_POST['name']);
    $email   = $conn->real_escape_string($_POST['email']);
    $mobile  = $conn->real_escape_string($_POST['phone']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into the database
    $sql = "INSERT INTO contact (name, mobile, email, message) 
            VALUES ('$name', '$mobile', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Success message
        $msg = "<div class='form-message success'>Your message has been sent successfully!</div>";
    } else {
        // Error message
        $msg = "<div class='form-message error'>Error: " . $conn->error . "</div>";
    }

    // Close connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        /* Success and error messages styling */
        .form-message {
            margin-bottom: 20px;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 14px;
        }
        .form-message.success {
            background-color: #e0f7e9;
            color: #2e7d32;
        }
        .form-message.error {
            background-color: #fdecea;
            color: #c62828;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <div class="inner">

        <!-- Display success/error message -->
        <?php echo $msg; ?>

        <!-- Contact form -->
        <form action="" method="POST">
            <h3>Contact Us</h3>
            <p>Please fill out the form below and we will get back to you shortly.</p>

            <label class="form-group">
                <input type="text" class="form-control" name="name" required>
                <span>Your Name</span>
                <span class="border"></span>
            </label>

            <label class="form-group">
                <input type="email" class="form-control" name="email" required>
                <span>Your Email</span>
                <span class="border"></span>
            </label>

            <label class="form-group">
                <input type="tel" class="form-control" name="phone" required>
                <span>Your Phone</span>
                <span class="border"></span>
            </label>

            <label class="form-group">
                <textarea name="message" class="form-control" required></textarea>
                <span>Your Message</span>
                <span class="border"></span>
            </label>

            <button type="submit">Submit 
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </form>
    </div>
</div>

</body>
</html>
