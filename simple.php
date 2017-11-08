<?php
if (isset($_FILES['picture'])) {
  $file = $_FILES['picture'];
  $name = $file['name'];
  $tmp_name = $file['tmp_name'];
  $destination = 'file/' . $name;
  move_uploaded_file($tmp_name, $destination);
}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>upload file</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css"/>
</head>
<body>
  <div class="mt-5 container">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
          <label for="picture">Picture Upload</label>
          <input type="file" name="picture" id="picture" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-info">Upload file</button>
      </div>
    </form>
  </div>
  
</body>
</html>