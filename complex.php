<?php
$message = [];
if (isset($_FILES['picture'])) {

  $file = $_FILES['picture'];
  $name = $file['name'];
  $name_array = explode('.', $name);
  // strtolower function is not essential 
  $extension = strtolower(end($name_array));
  $allowed_extension = ['jpg', 'png', 'gif'];
  if ( in_array($extension, $allowed_extension) ) {
    $tmp_name = $file['tmp_name'];
    $destination = 'file/' . $name;
    move_uploaded_file($tmp_name, $destination);
    $message =  [$name . ' - file uploaded successfully', 'success'];
  } else {
    $message = ['Your uploaded file must be an image with jpg or png or gif format', 'danger'];
    $message = [$name . ' - didn\'t uploaded. Your uploaded file must be a image with jpg or png or gif format', 'danger'];
  }
  

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
    <?php if(! empty($message)) : ?>
      <div class="alert alert-<?= $message[1]  ?>">
        <?php echo $message[0]; ?>
      </div>
    <?php endif; ?>
    <a href="/" class="btn btn-light mb-5">&#x1F3E0; Go to Home Page</a>
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