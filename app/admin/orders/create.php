<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/order-helper.php"; ?>
<?php
  if(isset($_POST["phone"]) && isset($_POST["email"]) )
    {
    $payment_id = $_POST["payment_id"];
    $amount = $_POST["amount"];
    if(validate($phone, $status)){
      $sql = "insert into orders(payment_id,phone,status,amount,email) values('$phone', $status, '$email')";
      $result = $conn->query($sql);
      if($result){
        $_SESSION["flash"] = "New record added success";
      }else{
        $_SESSION["flash"] = "Error: ".$sql."<br>".$conn->error;
      }
    }
    header("location: new.php");
  }
?>