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
      <a href="../private/dashboard.php">
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
          <form class="searchform" action="../search/private-search.php" method="post">
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
    <div class="classroom-btn">
      <button class="cbutton" onclick="suggestion('Computer Laboratory')">Computer Laboratory</button>
      <button class="cbutton" onclick="suggestion('Lecture Room')">Lecture Room</button>
      <button class="cbutton" onclick="suggestion('TVL Room')">TVL Room</button>
      <button class="cbutton" onclick="suggestion('MD Room')">MD Room</button>
      <button class="cbutton" onclick="suggestion('SA Room')">SA Room</button>
       <button class="cbutton" onclick="suggestion('Computer Laboratory')">Computer Laboratory</button>
       <button class="cbutton" onclick="suggestion('Computer Laboratory')">Computer Laboratory</button>
      <button class="cbutton" onclick="suggestion('Lecture Room')">Lecture Room</button>
      <button class="cbutton" onclick="suggestion('TVL Room')">TVL Room</button>
      <button class="cbutton" onclick="suggestion('MD Room')">MD Room</button>
      <button class="cbutton" onclick="suggestion('SA Room')">SA Room</button>
       <button class="cbutton" onclick="suggestion('Computer Laboratory')">Computer Laboratory</button>
     
    </div>
        <section>
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
 
 
 
       <?php 
        
       if(empty($results)){
        echo "<div>";
        echo "<p>There were no results!</p>";
        echo "</div>";
       }
       else{

        foreach($results as $row){
           
          echo '<div class="div1" id="modal1">';
          echo '<div class="diva"><img src="https://images.pexels.com/photos/207691/pexels-photo-207691.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="example" class="img1"></div>';
          echo '<div class="divb">';
          echo '<div class="classroom-name">' . htmlspecialchars($row["classroomName"]) . '</div>';
          echo '<div>';
          echo '<div>';
          echo '<h3 style="color: green">' . htmlspecialchars($row["status"]) . '</h3>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '<div class="displays">';
          echo '<dialog class="dialog" id="dialog1">';
          echo '<div class="dialog-content">';
          echo '<div class="display-close">x</div>';
          echo '<div class="display-header">';
          echo 'Do you want to use this room1?';
          echo '</div>';
          echo '<div class="display-buttons">';
          echo '<form method="post" action="../private-includes/update.php">';
          echo '<button class="btn-yes" type="submit" name="classroomId" value="' . htmlspecialchars($row["c_id"]) . '">';
          echo 'Yes';
          echo '</button>';
          echo '</form>';
          echo '<button class="noway">';
          echo 'No';
          echo '</button>';
          echo '</div>';
          echo '</div>';
          echo '</dialog>';
          echo '</div>';
          
        }

       }
     


       ?>
       </section>
       <script>
function setupModalAndDialog(modalId, dialogId) {
    const modal = document.getElementById(modalId);
    const dialog = document.getElementById(dialogId);

    modal.addEventListener('click', () => {
      dialog.showModal();
    });

     const closeButton = dialog.querySelector('.noway');
     closeButton.addEventListener('click', () => {
      dialog.close();
    });
    const closeIcon = dialog.querySelector('.display-close'); 
  closeIcon.addEventListener('click', () => {
    dialog.close();
  });
  }

  // Set up event listeners for each modal and dialog
  setupModalAndDialog('modal1', 'dialog1');
  setupModalAndDialog('modal2', 'dialog2');
  setupModalAndDialog('modal3', 'dialog3');
  setupModalAndDialog('modal4','dialog4');

  // Add more modals and dialogs by calling setupModalAndDialog with different IDs

</script>
<style>
  p{
    color: red;
    text-align: center;
      font-size: 18px;
      padding: 20px;
      background-color: #f8f8f8;
      border: 1px solid red;
      border-radius: 5px;
    margin-top: 50px;
  }
  h3 {
  position: absolute;
    bottom: 3%;
  left: 87%;
  transform: translateX(-50%);
  color: var(--light-color);
  padding: 5px;
  border-radius: 25%; /* If you want to make the icon circular */
  z-index: 1; /* Ensure the icon is above the image */
  cursor: pointer;

}
  .classroom-btn{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    height: 175px;
    box-sizing: border-box;
    overflow: hidden;
    margin: 0px 30px;
    margin-top: 70px;
  }
  .cbutton{
    border: 1px gray solid;
    background-color: transparent;
    font-size: 20px;
    padding: 12px 22px;
    border-radius: 30px;
    margin:2px 10px;
    cursor: pointer;
  }
  .cbutton:hover{
    transition:ease .3s;
    background-color: #181818;
    color: #fbfbfb;
  }
  section{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  .img1{
    background-color: cornflowerblue;
    width: 100%;
    height: 100%;
 
  }
  .div1{
    margin-top: 10px;
   border-radius: 20px;
  }
  @media (max-width: 767px) {
  /* Add your mobile layout styles here */
  .classroom-btn{
    height: 250px;
    box-sizing: border-box;
    overflow: hidden;
    margin: 0px 5px;
    margin-top: 70px;
  }
  .div1{
    margin-top: 15px;
   border-radius: 20px;
  }
  .cbutton{
    border: 1px gray solid;
    background-color: transparent;
    font-size: 15px;
    padding: 12px 15px;
    border-radius: 25px;

  }
}

/* Desktop Layout */
@media (min-width: 768px) {
  /* Add your desktop layout styles here */


}


</style>
    </div>

</body>
<script>
     function suggestion(text) {
      var inputText = document.getElementById("search");


      inputText.value = text;
    }
  </script>
    </div>
   
</body>
</html>
