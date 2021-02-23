<?php

try {
  $servername = "ec2-54-74-156-137.eu-west-1.compute.amazonaws.com";
  $dbname = "d7fkqs4e2revk2";
  $username = "adocsvsxqmurpc";
  $password = "c3beef8fa5925724b28a930ce5df54d58341c4afe915e1ca1bf29643f326491f";

  $conn = new PDO(
    "mysql:host=$servername; dbname=$dbname",
    $username,
    $password
  );

  $conn->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
  );
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
