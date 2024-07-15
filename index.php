<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machine Information</title>
</head>
<body>
    <h1>Current Machine Information</h1>
    <?php
        // Display the server software
        echo "<p><strong>Server Software:</strong> " . $_SERVER['SERVER_SOFTWARE'] . "</p>";

        // Display the PHP version
        echo "<p><strong>PHP Version:</strong> " . phpversion() . "</p>";

        // Display the server name
        echo "<p><strong>Server Name:</strong> " . $_SERVER['SERVER_NAME'] . "</p>";

        // Display the server address
        echo "<p><strong>Server Address:</strong> " . $_SERVER['SERVER_ADDR'] . "</p>";

        // Display the client IP address
        echo "<p><strong>Client IP Address:</strong> " . $_SERVER['REMOTE_ADDR'] . "</p>";

        // Display the current script file name
        echo "<p><strong>Current Script File:</strong> " . $_SERVER['PHP_SELF'] . "</p>";

        // Display PHP information
        echo "<h2>PHP Info</h2>";
        phpinfo();
    ?>
</body>
</html>
