<?php
//include_once './inc/db.php';

//$images = $db->query("SELECT image FROM images ORDER BY uploaded DESC");


?>

<!DOCTYPE html>
<html lang="en">


<?php
include('./templates/header.php')
?>
<form class="container" action="upload.php" method="post" enctype="multipart/form-data">

  <input type="file" name="file">

  <button type="submit" name="submit"> Upload</button>
</form>

</body>

</html>