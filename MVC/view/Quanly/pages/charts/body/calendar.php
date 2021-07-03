<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Calendar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/fontawesome-free/css/all.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index3.html" class="brand-link">
      <img src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <form class="login-container" action="../Admin/chuyentrang" method="POST">
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Amazing user management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <input  id="a1"  name="a1"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Danh sách người dùng"/>
              </li>
              <li class="nav-item">
              <input  id="a2"  name="a2"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Vô hiệu hóa tài khoản người dùng"/>
              </li>
              <li class="nav-item">
              <input  id="a3"  name="a3"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Phục hồi tài khoản người dùng"/>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Amzing Service management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <input  id="btnLogin"  name="a4"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Thêm dịch vụ"/>
              </li>
              <li class="nav-item">
              <input  id="btnLogin"  name="a5"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Cập nhật thông tin dịch vụ"/>
              </li>
              <li class="nav-item">
              <input  id="btnLogin"  name="a6"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Quản lý thông báo
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <input  id="a7"  name="a7"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Thông báo cá nhân"/>
              </li>
              <li class="nav-item">
               <input  id="a8"  name="a8"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Thông báo chung"/>
              </li>
              <li class="nav-item">
              <input  id="a9"  name="a9"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Thông báo nhóm"/>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
               Thống kê
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
               <input  id="btnLogin"  name="a10"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
               <input  id="btnLogin"  name="a11"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
                 <input  id="btnLogin"  name="a12"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
                 <input  id="btnLogin"  name="a13"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
              Amzing Manage notifications
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                 <input  id="btnLogin"  name="a14"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
                  <input  id="btnLogin"  name="a15"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
                <input  id="btnLogin"  name="a16"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <input  id="btnLogin"  name="a17"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
                 <input  id="btnLogin"  name="a18"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
                 <input  id="btnLogin"  name="a19"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
                 <input  id="btnLogin"  name="a20"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Bảng tài chính
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                 <input  id="btnLogin"  name="a21"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
                <input  id="btnLogin"  name="a22"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
              <input  id="btnLogin"  name="a23"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
                <input  id="btnLogin"  name="a24"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <input  id="btnLogin"  name="a25"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Lịch"/>
          </li>
          <li class="nav-item">
             <input  id="btnLogin"  name="a26"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
          </li>
          <li class="nav-item">
             <input  id="btnLogin"  name="a27"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
          </li>
          <li class="nav-item">
            <input  id="btnLogin"  name="a28"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <input  id="btnLogin"  name="a29"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <input  id="btnLogin"  name="a30"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <input  id="btnLogin"  name="a31"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
              <input  id="btnLogin"  name="a32"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
               <input  id="btnLogin"  name="a33"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
              <input  id="btnLogin"  name="a34"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
              <input  id="btnLogin"  name="a35"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
              <input  id="btnLogin"  name="a36"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
              <input  id="btnLogin"  name="a37"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
              <input  id="btnLogin"  name="a38"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
              <input  id="btnLogin"  name="a39"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v1
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                   <input  id="btnLogin"  name="a40"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
                  </li>
                  <li class="nav-item">
                   <input  id="btnLogin"  name="a41"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
                  </li>
                  <li class="nav-item">
                  <input  id="btnLogin"  name="a42"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
                  </li>
                  <li class="nav-item">
                  <input  id="btnLogin"  name="a43"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v2
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <input  id="btnLogin"  name="a44"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
                  </li>
                  <li class="nav-item">
                    <input  id="btnLogin"  name="a45"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
                  </li>
                  <li class="nav-item">
                    <input  id="btnLogin"  name="a46"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
                  </li>
                  <li class="nav-item">
                    <input  id="btnLogin"  name="a47"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                 <input  id="btnLogin"  name="a48"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
                <input  id="btnLogin"  name="a49"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
               <input  id="btnLogin"  name="a50"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
               <input  id="btnLogin"  name="a51"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
                <input  id="btnLogin"  name="a52"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
               <input  id="btnLogin"  name="a53"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
                 <input  id="btnLogin"  name="a54"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
               <input  id="btnLogin"  name="a55"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Tìm kiếm
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
               <input  id="btnLogin"  name="a56"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
              <li class="nav-item">
                 <input  id="btnLogin"  name="a57"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
              </li>
            </ul>
          </li>
          <li class="nav-header">ĐIỀU KHOẢN KHÁC</li>
          <li class="nav-item">
            <input  id="btnLogin"  name="a58"  class="nav-link" type="submit" style="background-color:#343a40;color:#ffffff;" value="Xóa dịch vụ"/>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Quan trọng</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Cảnh báo</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
</form>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calendar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Calendar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card">

                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">

                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card">

                <div class="card-body">
                 
                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/dist/js/adminlte.min.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/moment/moment.min.js"></script>
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/plugins/fullcalendar/main.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/Quanly/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (https://fullcalendar.io/docs/event-object)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      themeSystem: 'bootstrap',
      //Random default events
      events: [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954', //red
          allDay         : true
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'https://www.google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      // Save color
      currColor = $(this).css('color')
      // Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.text(val)
      $('#external-events').prepend(event)

      // Add draggable funtionality
      ini_events(event)

      // Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
</body>
</html>
