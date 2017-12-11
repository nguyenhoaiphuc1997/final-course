<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/user-helper.php"; ?>
<?php
  if (isset($_POST["name"]) && isset($_POST["image"]) && isset($_POST["description"])
    && isset($_POST["qty"]) && isset($_POST["id"]) && isset($_POST["price"]) && isset($_POST["catalog_id"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $image = $_POST["image"];
    $description = $_POST["description"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];
    $catalog_id = $_POST["catalog_id"];
      $sql = "update products set name='$name', image='$image', description='$description', qty='$qty', price='$price', catalog_id='$catalog_id', catalog_id='$catalog_id' where id=$id";
      $result = $conn->query($sql);
      if ($result) {
        $_SESSION["flash"] = "update record successfully";

      }else{
        $_SESSION["flash"] = "Error:".$sql."<br>".$conn->error;
      }
    redirect("index.php");
  }
?>
