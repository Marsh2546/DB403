<?php
    require 'db_connect.php';
    if (isset ($_POST['submit'])){
        $category = $POST['CategoryID']; 
        values('{$category}');
        $conn->query($sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Search product by category</title>
</head>
<body>
  <header>
    <form action="product.php" method="post">
      <label for="category">
        <select name="category" id="category"> 
        <?php 
            $sql = 'select CategoryID, CategoryName from categories';
            $result = $conn->query($sql);
              while ($row = $result->fetch_assoc()) {
                echo "<option value ='{$row['CategoryID']}'>
                {$row['faculty']}{$row['CategoryName']}
                </option>";
                }
            $conn->close();
        ?>
        </select>
      </label>
      <input type="submit" value="Search" name="submit">
    </form>
  </header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>