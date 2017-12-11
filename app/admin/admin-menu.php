 <?php define("ADMIN_URL", "http://localhost/final-course/app/admin"); ?>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hoai Phuc</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Users
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo ADMIN_URL; ?>/users/">All users</a></li>
          <li><a href="<?php echo ADMIN_URL; ?>/users/new.php">Add user</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Catalogs
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo ADMIN_URL; ?>/catalogs/">All catalogs</a></li>
          <li><a href="<?php echo ADMIN_URL; ?>/catalogs/new.php">Add catalog</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo ADMIN_URL; ?>/products/">All products</a></li>
          <li><a href="<?php echo ADMIN_URL; ?>/products/new.php">Add product</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">payment
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo ADMIN_URL; ?>/payments/">All products</a></li>
          <li><a href="<?php echo ADMIN_URL; ?>/payments/new.php">Add product</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
