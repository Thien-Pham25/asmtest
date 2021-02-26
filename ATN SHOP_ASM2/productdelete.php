<?php
$connect = pg_connect("host=ec2-54-74-156-137.eu-west-1.compute.amazonaws.com
dbname=d7fkqs4e2revk2
port=5432
user=adocsvsxqmurpc
password=c3beef8fa5925724b28a930ce5df54d58341c4afe915e1ca1bf29643f326491f
                    sslmode=require");
if ($connect === false) {
  die("ERROR: Could not connect to the database server!");
} else {
  //echo ("Connect successfully!");
  $product_id = $_GET['product_id'];
}
//echo ("Connect successfully!");
$query = "DELETE FROM product WHERE PRODUCT ID = '$product_id'";
$data = pg_query($connect, $query);
if ($data) {
  echo "<script>alert('Edited succesfully!, Refresh');</script>";
  header('refresh: 3; url=productform.php');
} else {
  echo ("ERROR + $query") . pg_errormessage($query);
}
pg_close($connect);
