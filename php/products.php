<?php
include 'db.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<div class='product'>";
    echo "<h2>" . $row['name'] . "</h2>";
    echo "<p>" . $row['description'] . "</p>";
    echo "<p>$" . $row['price'] . "</p>";
    echo "<img src='images/" . $row['image'] . "' alt='" . $row['name'] . "'>";
    echo "</div>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Products</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h1>Our Products</h1>
  <div class="products">
    <?php include 'products.php'; ?>
  </div>
</body>

</html>