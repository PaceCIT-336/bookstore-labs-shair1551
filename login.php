<?php // login.php
  $host = 'localhost';    // Change as necessary
  $data = 'bookstore'; // Change as necessary
  $user = 'webapp';         // Change as necessary
  $pass = 'webapp1551';        // Change as necessary
  $chrs = 'utf8mb4';
  $attr = "mysql:host=$host;dbname=$data;charset=$chrs";
  $opts =
  [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
  ];