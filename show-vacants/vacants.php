
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimalist Search Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/navbar.css">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/responsive.css">
<link rel="stylesheet" href="../css/navbar-bottom.css">
<link rel="stylesheet" href="../css/map.css">
</head>
<body>
      <nav>
      <div class="navbar" id="navbar">
      <a href="../final/index.php">
          <div class="profile-holder">
            <button id="profileBtn">
            <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/zxvuvcnc.json"
                trigger="click"
                style="width:40px;height:40px; margin-bottom:-3px;">
            </lord-icon>
            </button>
          </div>
        </a>
        <div class="search-container">
          <form class="searchform" action="../search/search.php" method="post">
            <a>
              <button type="submit" class="submits">
                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="click" colors="primary:#121331,secondary:#242424" style="width:30px;height:30px;">
                </lord-icon>
              </button>
              </a>
              <a>
                <input id="search" type="text" name="usersearch" placeholder="Search...">
            </a>
          </form>
        </div>
      </div>
    </nav>
<?php

    require_once "../includes/dbh.inc.php";
    
    // Modify the SQL query to select all vacant classrooms
    $query = "SELECT * FROM classroom WHERE status = 'vacant';";

    $stmt = $pdo->prepare($query);

    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output the results
    foreach ($results as $row) {
      echo '<main class="main">';
      echo '<div class="div1" id="modal1">';
      echo '<div class="diva"><img src="example'. $row["c_id"] . '.png" alt="example" class="img1"></div>';
      echo '<div class="divb">';
      echo '<div class="classroom-name">' . htmlspecialchars($row["classroomName"]) . '</div>';
      echo '<div>';
      echo '<div>';
      echo '<h3 style="color: green">' . htmlspecialchars($row["status"]) . '</h3>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</main>';
    }

    $pdo = null;
    $stmt = null;

?>
<style>
  .div1{
    background-color: aliceblue;
  }
</style>
</body>
     </html>
