<form class="login-container" action="../menu_main/chuyentrang" method="POST">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <input class="dropdown-item" name="gt1" type="submit" value="Trang chủ"/>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <?php echo isset($_SESSION['ten']) ?  $_SESSION['ten']:"Tài khoản";?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><input class="dropdown-item" name="gt" type="submit" value="Giới thiệu"/></li>
            <li><input class="dropdown-item" name="gt1" type="submit" value="Trang chủ"/></li>
            <li><input class="dropdown-item" name="gt10" type="submit" value="Amazing Utilities"/></li>
            <li><input class="dropdown-item" name="gt8" type="submit"  value="Thông báo chung"/></li>
            <li><input class="dropdown-item" name="gt11" type="submit"  value="Thông báo riêng"/></li>
            <li><input class="dropdown-item" name="gt3" type="submit" value="Amazing Deal"/></li>
            <li><input class="dropdown-item" name="gt14" type="submit" value="Dịch vụ"/></li>
            <li><input class="dropdown-item" name="gt2"  type="submit" value="Thêm tài khoản quản lý"/></li>
            <li><input class="dropdown-item" name="gt4"  type="submit" value="Amazing update"/></li>
            <li><hr class="dropdown-divider"></li>
            <li><input class="dropdown-item" name="gt15" type="submit" value="Báo cáo cáo chi tiết"/></li>
            <li><input class="dropdown-item" name="gt13" type="submit" value="Báo cáo cáo tổng quát"/></li>
            <li><input class="dropdown-item" name="gt6" type="submit" value="Quản lý tài khoản"/></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" name="timkiem" type="submit">Tìm kiếm</button>
      </form>
    </div>
  </div>
</nav>
</form>