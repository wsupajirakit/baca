<?php
$element = $_POST['element'];
$id = $_POST['id'];

include('../env/config.php');

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["id-input-file-3"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(basename($_FILES["id-input-file-3"]["name"]!="")){
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["id-input-file-3"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
  $temp = explode(".", $_FILES["id-input-file-3"]["name"]);
  $newfilename = round(microtime(true)) . '.' . end($temp);
  $target_file = "images/".$newfilename;
  $xfilename = $newfilename;
  move_uploaded_file($_FILES["id-input-file-3"]["tmp_name"], "images/".$newfilename);
    $uploadOk = 0;
}
// Check file size
if ($_FILES["id-input-file-3"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.".$imageFileType;
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["id-input-file-3"]["tmp_name"], $target_file)) {
      $xfilename = basename( $_FILES["id-input-file-3"]["name"]);
        // echo "The file ". basename( $_FILES["id-input-file-3"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}else {
  $xfilename = "1";
}


if($element==1){
  $sql = "UPDATE customize SET logo='".$xfilename."' WHERE id_member=".$id."";
}else if($element==2){
  $sql = "UPDATE customize SET banner='".$xfilename."' WHERE id_member=".$id."";
}else if($element==3){
  $sql = "UPDATE customize SET id_line='".$xfilename."' WHERE id_member=".$id."";
}else {
  $sql = "UPDATE customize SET qr_code_line='".$xfilename."' WHERE id_member=".$id."";
}




if ($objCon->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $objCon->error;
}

$objCon->close();
