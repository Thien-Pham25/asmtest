<?php
$account = pg_connect("host=ec2-18-215-99-63.compute-1.amazonaws.com
dbname=d3pt9sk43u61ce
port=5432
user=garekrjkzcjtws
password=3306ac01c2c1f8ad69345e370fcf126d034b5502dadb625dfbd03fb8444244f4
sslmode=require");

if ($account === false) {
  die("ERROR: Could not connect to the database server!");
} else {
  echo ("Connect successfully! ");

  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM boss WHERE username = '$username' AND \"password\" = '$password'";
  $result = pg_query($account, $query);
  $count = pg_num_rows($result);
  if ($count == 1) {
    echo ("Login successfully!");
    session_start();
    $_SESSION["username"] = $username;
    header('Location: ./bosssite/bossviewdata.php');
  } else {
    echo ("Wrong username or password. Please try again!") . pg_errormessage($query);
    header('refresh: 5; url=./bosssite/bosslogin.php');
  }
}
pg_close($account);
