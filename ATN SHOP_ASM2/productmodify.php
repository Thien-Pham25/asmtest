<?php
$con = pg_connect("host=ec2-54-74-156-137.eu-west-1.compute.amazonaws.com
dbname=d7fkqs4e2revk2
port=5432
user=adocsvsxqmurpc
password=c3beef8fa5925724b28a930ce5df54d58341c4afe915e1ca1bf29643f326491f
                    sslmode=require");

$query = "select product_id, product_name, product_price, product_category, atn_store, product_quantity, product_description from product ;";
$result = pg_query($con, $query);
$resultCheck = pg_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATN Shop - Mofidy Product</title>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="/css/style.css">
</head>

<body id="bd-view-page">
  <div class="form-title">
    <h1 style="font-weight: 700;">ATN BOSS - VIEW SHOP DATA </h1>
  </div>
  <div class="container">
    <div class="col" style="padding-top:50px;">
      <table id="view-data" class="table" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Product</th>
            <th>Price</th>
            <th>Category</th>
            <th>Store</th>
            <th>Quantity</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($resultCheck > 0) {
            echo "<script>alert('Connect successfully!');</script>";
            while ($row = pg_fetch_assoc($result)) {
          ?>
              <tr>
                <td>
                  <?php echo $row['product_id']; ?>
                </td>
                <td>
                  <?php echo $row['product_name']; ?>
                </td>
                <td>
                  <?php echo $row['product_price,']; ?>
                </td>
                <td>
                  <?php echo $row['product_category']; ?>
                </td>
                <td>
                  <?php echo $row['atn_store']; ?>
                </td>
                <td>
                  <?php echo $row['product_quantity']; ?>
                </td>
                <td>
                  <?php echo $row['product_description']; ?>
                </td>
                <td>
                  <div class="btn-group" data-toggle="buttons"><a href="/productdelete.php?rn=$result[product_id]" class="btn btn-primary btn-sm">Delete</a></div>
                </td>
              </tr>
          <?php
            }
          } else {
            echo "<script>alert('Connect fail!');</script>" . pg_errormessage($query);
          }
          ?>
        </tbody>
      </table>
      <a href="./logout.php">
        <h3 id="sign-out"> LOG OUT </h3>
      </a>
    </div>
</body>

</html>
