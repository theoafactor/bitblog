<?php
require "../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Read from the environment variable
$base_url_path = $_ENV['BASE_URL_PATH']; // the default used to be: http://localhost/bitblog/

//config
define('BASE_URL', "$base_url_path");

function redirect($url) 
{    
     header('Location: ' . trim(BASE_URL, '/ ')  . '/' . trim($url, '/'));
     exit;
}
// header('Location: index.php');
// redirect('index.php');

function asset($file) 
{    
     return trim(BASE_URL, '/ ') . '/' . trim($file, '/');
}
// echo asset('assets/css/style.css');

function url($url) 
{    
     return trim(BASE_URL, '/ ') . '/' . trim($url, '/');
}
// echo url('create.php');

function dd($var)
{
     echo '<pre>';
     var_dump($var);
     exit;
}
