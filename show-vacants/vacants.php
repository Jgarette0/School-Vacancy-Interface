<!--
  #This will handle para makita tanang bakanteng classroom
-->
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
      <a href="../index.php">
          <div class="profile-holder">
            <button id="profileBtn">
            <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/zxvuvcnc.json"
                trigger="click"
                style="width:25px;height:25px;">
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
    <nav class="navbarBottom">
<div class="radio-container">
<div class="radio-inputs">
		<label>
			<input class="radio-input" type="radio" name="engine">
				<span class="radio-tile">
        <a href="">
					<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
              src="https://cdn.lordicon.com/dycatgju.json"
              trigger="click"
              colors="primary:#171717"
              state="hover-2"
              style="width:32px;height:32px;">
            </lord-icon>
					<span class="radio-label">Settings</span>
          </a>
				</span>
		</label>
    <label>
			<input class="radio-input" type="radio" name="engine">
			<span class="radio-tile">
      <a href="../index.php">
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <lord-icon
      src="https://cdn.lordicon.com/slduhdil.json"
      trigger="click"
      colors="primary:#171717"
      state="hover-3"
      style="width:32px;height:32px;">
    </lord-icon>
				<span class="radio-label">Home</span>
        </a>
			</span>
		</label>
    
		<label>
			<input checked="" class="radio-input" type="radio" name="engine">
			<span class="radio-tile">
      <a href="../show-vacants/vacants.php">
				<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <lord-icon
          src="https://cdn.lordicon.com/zncllhmn.json"
          trigger="click"
          colors="primary:#171717"
          state="hover"
          style="width:32px;height:32px;">
        </lord-icon>
    <span class="radio-label">Vacants</span>	
    </a>
			</span>
		</label>

</div>
  </div>
</nav>
<style>
      a{
        margin: none;
        padding: none;
        text-decoration: none;
      }
    </style>
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
  nav{
    z-index: 999;
  }
  
</style>
</body>
     </html>
