<?php
$username = "admin";
$password = "123qwe123";

try {
$conn = new PDO('mysql:host=localhost;dbname=feedback_activity', $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Connected successfully";

}catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>