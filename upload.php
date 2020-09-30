<?php



if (isset($_POST['submit'])) {

  $file = $_FILES['file'];
  print_r($file);

  $fileName = $_FILES['file']['name'];
  $fileType = $_FILES['file']['type'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];

  $fileExt = explode('.', $fileName);
  $fileTrueExt = strtolower(end($fileExt));

  $alowed = array('jpeg', 'jpg', 'png', 'pdf');

  if (in_array($fileTrueExt, $alowed)) {

    if ($fileError === 0) {
      if ($fileSize < 100000) {
        $fileNameNew = uniqid('', true) . "." . $fileTrueExt;
        $fileDestination = "uploads/" . $fileNameNew;
        var_dump($fileDestination);
        echo 'blalalalalalal';
        move_uploaded_file($fileTmpName, $fileDestination);
        header("Location:index.php?uploadsucces");
      } else {
        echo 'file is to big';
      }
    } else {
      echo "there was an error uploading a photo";
    }
  } else {
    echo 'you can not upload files of this type';
  }
}
