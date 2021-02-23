<?php

try {
  $dbConn = pg_connect("host=ec2-54-74-156-137.eu-west-1.compute.amazonaws.com port=5432 dbname=d7fkqs4e2revk2 user=adocsvsxqmurpc
  );

  $dbConn->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
  );
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

  echo="helloworld";
