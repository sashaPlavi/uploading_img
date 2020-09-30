<?php
include_once './inc/db.php';
$images = $mysqli->query("SELECT * FROM my_images");



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uploading images</title>
</head>

<body>
  <?php
  while ($data = $images->fetch_assoc()) {
    print_r($data);
  }
  ?>
  <form action="upload.php" method="post" enctype="multipart/form-data">

    <input type="file" name="file">

    <button type="submit" name="submit"> Upload</button>
  </form>

</body>

</html>