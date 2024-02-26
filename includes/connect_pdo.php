<?php
$dsn = "mysql:host=localhost;dbname=u802235977_ekam_portfolio;charset=utf8mb4";
try {
$connection = new PDO($dsn, 'u802235977_ekam', 'Sidhu295');
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('unable to connect');
}
?>