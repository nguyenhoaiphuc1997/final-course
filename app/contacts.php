<?php session_start(); ?>
<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_IMAGE", "http://localhost/final-course/public/uploads/");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "lib.php"; ?>
  </head>
  <body>

    <!-- Navigation -->
    <?php include "menu.php" ?>

    <!-- Page Content -->
<div class="container">
      <div class="row">
          <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
        </div>

    </div>
    <!-- /.container -->
      <div class="row">
        <div class="col-md-12">
          <form action="/action_page.php">
            First name:<br>
            <input type="text" name="firstname" placeholder="Mickey"><br>
            Last name:<br>
            <input type="text" name="lastname" placeholder="Mouse"><br><br>
             <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br>
   <textarea name="message" rows="10" cols="30">
</textarea><br>
            <input type="submit" value="Submit" class="sm">
</form>
        </div>
      </div>
    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->


  </body>

</html>
<?php unset($_SESSION["flash"]); ?>
