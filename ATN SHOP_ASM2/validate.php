<?php

include('connection.php');

function test_input($data)
{

  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  echo="helloworld";
  
  $adminName = test_input($_POST["adminName"]);
  $password = test_input($_POST["password"]);
  $stmt = $connect->prepare("SELECT * FROM adminLogin");
  $stmt->execute();
  $users = $stmt->fetchAll();

  foreach ($users as $user) {

    if (($user['adminName'] == $adminName) &&
      ($user['password'] == $password)
    ) {
      header("Location: adminpage.php");
    } else {
      echo "<script language='javascript'>";
      echo "alert('WRONG INFORMATION')";
      echo "</script>";
      die();
    }
  }
}
