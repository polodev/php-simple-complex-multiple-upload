<?php

function rearange_files ($files) {
  $file_array = [];
  $count = count($files['name']); //number of file will be uploaded
  $files_keys = array_keys($files);
  for ($i = 0; $i < $count; $i++) {
    foreach ($files_keys as $key) {
      $file_array[$i][$key] = $files[$key][$i];
    }
  }
  return $file_array;
}
function upload_picture ($file) {
  $name = $file['name'];
  $name_array = explode('.', $name);
  // strtolower function is not essential 
  $extension = strtolower(end($name_array));
  $allowed_extension = ['jpg', 'png', 'gif'];
  if ( in_array($extension, $allowed_extension) ) {
    $tmp_name = $file['tmp_name'];
    $destination = 'file/' . $name;
    move_uploaded_file($tmp_name, $destination);
    return  [$name . ' file uploaded successfully', 'success'];
  } else {
    return [$name . ' didn\'t uploaded. Your uploaded file must be a image with jpg or png or gif format', 'danger'];
  }
}