<?php 
require_once '../includes/config_session.inc.php';
require_once '../includes/register_view.inc.php';
require_once '../includes/login_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login here</title>
  <link rel="stylesheet" href="../css/user.css">
</head>
<body>
<form class="login" action="includes/logout.inc.php" method="post">
          <div class="login-input-container">
            <div>
              <button type="submit" class="submit">
              Logout
              </button>
            </div>
        </form>
</body>
<script src="../js/user.js"></script>
</html>