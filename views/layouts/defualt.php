
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo ASSETS_URL ?>img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo ASSETS_URL ?>img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo ASSETS_URL ?>css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo ASSETS_URL ?>demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black"
      data-image="<?php echo ASSETS_URL ?>img/sidebar-2.jpg">

      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
        </a></div>
      <div class="sidebar-wrapper">
        <ul style="margin-top: 60px;" class="nav">
          <li class="nav-item " style="margin-top: 34px;">
            <a class="nav-link" href="/wp/dashboard">
              <i class="material-icons">dashboard</i>
              <p>پیشخوان</p>
            </a>
          </li>
          <li class="nav-item wz "  style="margin-top: 34px;">
            <a class="nav-link" href="/wp/dashboard/profile">
              <i class="material-icons">person</i>
              <p>پروفایل</p>
            </a>
          </li>
          <li class="nav-item wz  "  style="margin-top: 34px;">
            <a class="nav-link" href="/wp/dashboard/wallet">
              <i class="material-icons">content_paste</i>
              <p>کیف پول</p>
            </a>
          </li>
          <li class="nav-item wz "  style="margin-top: 34px;">
            <a class="nav-link" href="/wp/dashboard/transaction">
              <i class="material-icons">library_books</i>
              <p>تراکنش ها</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)"><?php echo $type[1] ?></a>
       
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
            aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                  <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                  <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->


      <?php include UPP_VIEWS . $view_file; ?>



      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>

  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo ASSETS_URL ?>js/core/jquery.min.js"></script>
  <script src="<?php echo ASSETS_URL ?>js/core/popper.min.js"></script>
  <script src="<?php echo ASSETS_URL ?>js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="<?php echo ASSETS_URL ?>js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="<?php echo ASSETS_URL ?>js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo ASSETS_URL ?>js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo ASSETS_URL ?>js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo ASSETS_URL ?>demo/demo.js"></script>

