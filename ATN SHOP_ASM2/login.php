<?php
$account = pg_connect("host=ec2-54-74-156-137.eu-west-1.compute.amazonaws.com
dbname=d7fkqs4e2revk2
port=5432
user=adocsvsxqmurpc
password=c3beef8fa5925724b28a930ce5df54d58341c4afe915e1ca1bf29643f326491f
sslmode=require");

if ($account === false) {
  die("ERROR: Could not connect to the database server!");
} else {
  echo ("Connect successfully! ");

  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM staff WHERE username = '$username' AND \"password\" = '$password'";
  $result = pg_query($account, $query);
  $count = pg_num_rows($result);
  if ($count == 1) {
    echo ("Login successfully!");
    session_start();
    $_SESSION["username"] = $username;
    header('Location: productform.php');
  } else {
    echo ("Wrong username or password. Please try again!") . pg_errormessage($query);
    header('refresh: 5; url=index.php'); //wrong reset
  }
}
pg_close($account);
