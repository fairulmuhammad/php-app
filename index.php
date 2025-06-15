<?php
// Simple PHP App Homepage

// Set content type
header('Content-Type: text/html; charset=utf-8');

// Get current date and time
$date = date('Y-m-d H:i:s');

// Display a styled welcome message
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP App Home</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 500px; margin: 80px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);}
        h1 { color: #007acc; }
        .date { color: #555; font-size: 0.95em; margin-top: 10px;}
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello from PHP app!</h1>
        <p>Welcome to your PHP application running in Docker.</p>
        <div class="date">Current server time: <strong><?php echo $date; ?></strong></div>
    </div>
</body>
</html>
