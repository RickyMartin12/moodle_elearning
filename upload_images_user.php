<?php
if(is_array($_FILES)) 
{
 if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
  $sourcePath = $_FILES['userImage']['tmp_name'];
  $targetPath = "images/users/".$_FILES['userImage']['name'];
  if(move_uploaded_file($sourcePath,$targetPath)) {
  	echo $_FILES['userImage']['name'];
  ?>
   <?php
   exit();
  }
 }
}
?>