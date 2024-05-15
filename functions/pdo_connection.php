<?php
// load the autoload 

require "../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$database_localhost = $_ENV["DB_HOSTNAME"]; // the default is localhost
$database_username = $_ENV["DB_USERNAME"]; // the default is username
$database_password = $_ENV["DB_PASSWORD"]; // the default is " "

$serverName = $database_localhost;
$userName = $database_username;
$password = $database_password;

try {
  $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
  $pdo = new PDO("mysql:host=$serverName;dbname=bit-blog", $userName, $password, $options);

//   $user->first_name
//   $user['first_name']

  // set the PDO error mode to exception
//   $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     return $pdo;

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}