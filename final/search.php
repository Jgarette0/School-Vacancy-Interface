<?php 
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $userSearch = $_POST["usersearch"];

  try {
    require_once "../includes/dbh.inc.php";
    $query = "SELECT * FROM classroom WHERE classroomName = :usersearch;";


    $stmt = $pdo -> prepare($query);

    $stmt -> bindParam(":usersearch",$userSearch);
 

    $stmt-> execute();
    $results = $stmt ->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;
  }
  catch(PDOException $e){
    die("Query failed: ".$e->getMessage()); 
   }

  
} 
else {

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimalist Search Form</title>
    <link rel="stylesheet" href="search.css">
</head>
<body>
  <section>
       <?php 
       
       if(empty($results)){
        echo "<div>";
        echo "<p>There were no results!</p>";
        echo "</div>";
       }
       else{

        foreach($results as $row){
          echo "<div>";
          echo "<h1>".htmlspecialchars($row["classroomName"])."</h1>";
          echo "<h3>".htmlspecialchars($row["status"])."</h3>";
          echo "</div>";
        }

       }
       
       ?>
       </section>
</body>
</html>
