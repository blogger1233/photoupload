
<?php

    $name= "myfile.jpg";
    $dir=__DIR__."uploads/".$name;
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$dir);
  copy($dir,"uploads")

?>
<!DOCTYPE html>
<html>
<body>

<form action="index.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
<img src="myfile.jpg" alt="">

</body>
</html>
