<?php
  function checkEmailExist($conn, $email){
    $sql = "select * from users where email='$email'";
    GLOBAL $conn;
    $result = $conn->query($sql);
    if($result->num_rows > 0)
      return true;
    return false;
  }
?>
