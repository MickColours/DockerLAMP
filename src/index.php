<?php include_once './includes/db.connect.php'?>

<!DOCTYPE html>
<html>
<head>
  <title> </title>
</head>
<body>

  <?php
    $sql = "SELECT * FROM lamp;";
    $result = mysqli_query($connection, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo $row['color'];
      }
    }
  ?>

</body>
</html>
