<?php
require_once '../includes/dbh.inc.php'; // database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Kuhaon ang c_id
        $classroomId = $_POST['classroomId'];

        // kuhaon ang status according sa classroom id
        $stmt = $pdo->prepare("SELECT status FROM classroom WHERE c_id = :classroomId");
        $stmt->bindParam(':classroomId', $classroomId, PDO::PARAM_INT);
        $stmt->execute();

        $currentStatus = $stmt->fetchColumn();

        // if current status is vacant, when clicked it will change to occupied vice versa
        $newStatus = ($currentStatus === 'vacant') ? 'occupied' : 'vacant';

        // updating status
        $stmt = $pdo->prepare("UPDATE classroom SET status = :newStatus WHERE c_id = :classroomId");
        $stmt->bindParam(':newStatus', $newStatus, PDO::PARAM_STR);
        $stmt->bindParam(':classroomId', $classroomId, PDO::PARAM_INT);

        if ($stmt->execute()) {
            header("Location: ../private/dashboard.php");
            echo '<h1>Status updated successfully.</h1>'; //this code is doesn't work(pede ra tang2on)

        } else {
            echo 'Error updating status.';
        }

    } catch (PDOException $e) {
        echo 'Error updating status.';
    }
} else {
    // invalid requests
    echo 'Invalid request.';
}

