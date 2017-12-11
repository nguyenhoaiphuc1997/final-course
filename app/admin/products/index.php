<?php require_once "../../../db/mysql.php"; ?>
  <?php
  define("URL_IMAGE", "http://localhost/final-course/public/uploads/");
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Danh sach nguoi dung</title>
  <?php include "../lib.php"; ?>
</head>
<body>
  <?php include "../admin-menu.php"; ?>
  <div class="container">
  <h2>Danh sach San Pham</h2>
  <div class="row">
    <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>Anh</th>
        <th>Ten san pham</th>
        <th>Mo ta</th>
        <th>So luong</th>
        <th>Gia</th>
        <th>#</th>
        <th>#</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $sql = "select * from products";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) { ?>
          <tr>
            <td><img src="<?php echo URL_IMAGE.$row["image"];?>"width="32px" height="32px"></td>

            <td><?php  echo $row["name"]; ?></td>
            <td><?php  echo $row["description"]; ?></td>
            <td><?php  echo $row["qty"]; ?></td>
            <td><?php  echo $row["price"]; ?></td>
            <td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
          </tr>
    <?php    }
      }
    ?>

    </tbody>
  </table>
</div>
</body>
</html>
