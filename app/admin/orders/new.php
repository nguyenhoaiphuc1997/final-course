<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tao moi orders</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  </head>
  <body>
  <div class="wrapper">
    <form method="post" action="create.php">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div>
        <h1>TAO MOI DON DAT HANG</h1>
      </div>
      <div class="row">
        <label>Số tiền</label>
        <input class="form-control"  type="text" name="amount">
      </div>
      <div class="row">
        <label>email</label>
        <input class="form-control"  type="text" name="email">
      </div>
      <div class="row">
        <label>phone</label>
        <input class="form-control"  type="text" name="phone">
      </div>
      <div class="row">
        <label>trạng thái</label>
        <input class="form-control"  type="text" name="status">
      </div>
      <div class="row">
        <label>người nhận</label>
        <select class="form-control" name="payment_id">
          <?php
            $sql = "select * from payments
            ";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){ ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row["name"]; ?></option>
          <?php    }
            }
          ?>
        </select>
      </div>
      <br>
      <div class="row">
        <button class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  </body>
</html>
<?php unset($_SESSION["flash"]); ?>
