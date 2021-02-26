<?php
$connect = pg_connect("host=ec2-54-161-208-31.compute-1.amazonaws.com
                    dbname=dd9oeoh7ug38ar
                    port=5432
                    user=jntqrwwfdhznqx
                    password=aa8e443f678e4b9dcf73002d855391ccd6a673f779de76a2892dd85c3c46fa37
                    sslmode=require");
if ($connect === false) {
  die("ERROR: Could not connect to the database server!");
} else {
  echo ("Connect successfully!");
  $productname = $_POST['product-name'];
  $productprice = $_POST['product-price'];
  $productcategory = $_POST['product-category'];
  $atnstore = $_POST['store'];
  $productquantity = $_POST['product-quantity'];
  $productdescription = $_POST['product-description'];
}

$query = "INSERT INTO public.product (product_name, product_price, product_category, atn_store, product_quantity, product_description) VALUES('$productname', '$productprice', '$productcategory', '$atnstore', '$productquantity', '$productdescription');";
$result = pg_query($connect, $query);
if ($result) {
  echo "<script>alert('Record added succesfully!, Refresh');</script>";
  header('refresh: 3; url=shopsite/productform.php');
} else {
  echo ("ERROR + $query") . pg_errormessage($query);
}
pg_close($connect);
