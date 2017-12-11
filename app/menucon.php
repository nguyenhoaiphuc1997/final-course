<?php
  define("URL_ADMIN", "http://localhost/final-course/app/admin/");
?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand my-logo pr-2" href="../../index.php">Hoai Phuc</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="../../index.php" class="nav-link">TRANG CHỦ</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NGƯỜI DÙNG</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>users/index.php">DANH SÁCH NGƯỜI DÙNG</a>
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>users/new.php">THÊM MỚI NGƯỜI DÙNG</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DANH MỤC</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>catalogs/index.php">DANH SÁCH DANH MỤC</a>
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>catalogs/new.php">THÊM MỚI DANH MỤC</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SẢN PHẨM</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>products/index.php">DANH SÁCH SẢN PHẨM</a>
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>products/new.php">THÊM MỚI SẢN PHẨM</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>
