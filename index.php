<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uploading images</title>
</head>

<body>
  <form action="upload.php" method="post" enctype="multipart/form-data">

    <input type="file" name="file">

    <button type="submit" name="submit"> Upload</button>
  </form>

</body>

</html>