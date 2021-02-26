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
  $product_name = $_POST['product-name'];
  $product_price = $_POST['product-price'];
  $product_category = $_POST['product-category'];
  $atn_store = $_POST['store'];
  $product_quantity = $_POST['product-quantity'];
  $product_description = $_POST['product-description'];
}
//echo ("Connect successfully!");
$query = "INSERT INTO product (product_name, product_price, product_category, atn_store, product_quantity, product_description) 
VALUES('$product_name', '$product_price', '$product_category', '$atn_store', '$product_quantity', '$product_description');";
$result = pg_query($connect, $query);
if ($result) {
  echo "<script>alert('Record added succesfully!, Refresh');</script>";
  header('refresh: 1; url=product_form.php');
} else {
  echo ("ERROR + $query") . pg_errormessage($query);
}
pg_close($connect);
