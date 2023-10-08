<!DOCTYPE html>
<html>
<head>
    <title>Update Status Button</title>
</head>
<body>
    <h1>Click the button to update the status</h1>
    <button name="occupy" id="occupyButton">Yes</button>

    <script>
        document.getElementById('occupyButton').addEventListener('click', function() {
            // Redirect to a PHP script that will update the database
            window.location.href = 'update_database.php';
        });
    </script>
</body>
</html>
