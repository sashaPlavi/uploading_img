<?php
// Include the database configuration file  
require_once './inc/db.php';

// Get image data from database 
$result = $db->query("SELECT image FROM my_images ORDER BY uploaded DESC");
//print_r($result)
?>




<?php
print_r($result->num_rows);
include('./templates/header.php');


if ($result->num_rows > 0) { ?>


  <div class="galery_container">
    <?php while ($row = $result->fetch_assoc()) { ?>



      <img width="350" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />



    <?php } ?>
  </div>

<?php } else { ?>
  <p class="status error">Image(s) not found...</p>
<?php } ?>