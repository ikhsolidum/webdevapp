<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: brown;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
            </style>
    </head>
    
    <body>
    <div class="topnav" id="myTopnav">
  <a href="home.php" class="active">Home</a>
  <a href="products.php">Products</a>
  <a href="order.php">Order</a>
  <a href="User.php">User</a>
  <a href="Logout.php">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<div style="padding-left:16px">
<h2>Order</h2>
</div>


<div style="padding-left:16px">
<form action="orders.php">
  <label for="name">Name:</label><br>
  <input type="text" id="username" name="name" value=""><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value="">
  <br>
  <label for="email">Product ID:</label><br>
  <input type="text" id="product" name="productid" value="">
  <br>
  <label for="email">Quantity:</label><br>
  <input type="text" id="email" name="quantity" value="">
  <br><br>
  <input type="submit" value="Submit">

  <?php
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (personthatordered, email, productid, quantity)
VALUES ('bill gates', 'billgates@microsoft.com', '#41', '2')";

if (mysqli_query($conn, $sql)) {
  echo "Please check the database for your records";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

</form> 
</div>

    </body>
    
</html>
