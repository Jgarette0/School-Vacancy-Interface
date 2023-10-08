<?php 

function get_user(object $pdo,string $status){


  $query = "SELECT * FROM user WHERE status = :status;";
  $stmt = $pdo->prepare($query);
  $stmt -> bindParam(":status", $status);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;

}