<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/user-helper.php"; ?>
<?php
  if (isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["id"])) {

    $name = $_POST["name"];
    $description = $_POST["description"];
    $id = $_POST["id"];
    if (is_empty($name,"name is not empty"))
      redirect("index.php");
    if (is_empty($description,"description is not empty"))
      redirect("index.php");
    {
      $sql = "update catalogs set name='$name', description = '$description' where id=$id";
      $result = $conn->query($sql);
      if ($result) {
        $_SESSION["flash"] = "update sucessfully";

      }else{
        $_SESSION["flash"] = "Error:".$sql."<br>".$conn->error;
      }
    }
    redirect("index.php");
  }
?>
