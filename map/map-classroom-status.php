<?php
require_once "../includes/dbh.inc.php";

// Function to display status color based on the classroom status in database
function getColor($c_id) {
    global $pdo; // Access the global database connection

    // Query the status for the specified c_id
    $query = "SELECT status FROM classroom WHERE c_id = :c_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':c_id', $c_id);
    $stmt->execute();

    // Fetch the status
    $status = $stmt->fetchColumn();

    if ($status == "occupied") {
        return 'class="red"';
    } elseif ($status == "vacant") {
        return 'class="green"';
    } else {
        // Handle the case when the status is neither 'occupied' nor 'vacant'
        return 'class="gray"';
    }
}

?>