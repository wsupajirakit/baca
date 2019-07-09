<?php
include "./env/config.php";
$id = $_POST['id'];

// echo $id."<br>";

if($id > 0){

  // Check record exists
  $checkRecord = mysqli_query($objCon,"SELECT * FROM member WHERE id_member=".$id);
  $totalrows = mysqli_num_rows($checkRecord);

  if($totalrows > 0){
    // Delete record
    $query = "DELETE FROM member WHERE id_member=".$id;
    mysqli_query($objCon,$query);
    echo 1;
    exit;
  }
}

echo 0;
exit;
