<?php
require 'functions.php';
$messages = [];
if( isset( $_FILES['pictures'] ) ) {
  $files = $_FILES['pictures'];
  //lot of built in php functions are sucks
  $newFiles = rearange_files($files);
  foreach ($newFiles as $file) {
    $messages[] = upload_picture($file);
  }
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>multiple upload</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css"/>
</head>
<body>
  <div class="mt-5 container">
    <?php if(! empty($messages)) : ?>
      <?php foreach($messages as $message) : ?>
        <div class="alert alert-<?= $message[1]  ?>">
          <?php echo $message[0]; ?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
    <a href="/" class="btn btn-light mb-5">&#x1F3E0; Go to Home Page</a>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
          <label for="pictures">Picture</label>
          <input type="file" name="pictures[]" multiple="true" id="pictures" class="form-control">
      </div>
      
      <div class="form-group">
        <button type="submit" class="btn btn-info">Upload file</button>
      </div>
    </form>
  </div>
</body>
</html>