<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/admin/'); ?>img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url('assets/admin/'); ?>img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url('assets/admin/'); ?>css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= base_url('assets/admin/'); ?>css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url('assets/admin/'); ?>css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="<?= base_url('dashboard'); ?>">
        <span class="ms-1 font-weight-bold text-white">Admin Temansejalan </span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white <?= $active === 'dashboard' ? 'active bg-gradient-primary' : ''; ?> " href="<?= base_url('dashboard'); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <details>
          <summary class="d-flex">
            <div class="nav-item">
              <a class="nav-link text-white <?= $active === 'table' ? 'active bg-gradient-primary' : ''; ?>">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">format_list_bulleted</i>
                </div>
                <span class="nav-link-text ms-1">Table</span>
              </a>
            </div>
          </summary>
          <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url('dashboard/menus'); ?>">
            <span class="nav-link-text ms-1 ps-4">Menus</span>
          </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('dashboard/galleries'); ?>">
              <span class="nav-link-text ms-1 ps-4">Galleries</span>
            </a>
          </li>
        </details>
        <details>
          <summary class="d-flex">
            <div class="nav-item">
              <a class="nav-link text-white <?= $active === 'form' ? 'active bg-gradient-primary' : ''; ?>">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">table_view</i>
                </div>
                <span class="nav-link-text ms-1">Form</span>
              </a>
            </div>
          </summary>
          <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url('dashboard/menu'); ?>">
            <span class="nav-link-text ms-1 ps-4">Menu</span>
          </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('dashboard/gallery'); ?>">
              <span class="nav-link-text ms-1 ps-4">Gallery</span>
            </a>
          </li>
        </details>
        <!-- <li class="nav-item"><a class="nav-link " data-bs-toggle="collapse" data-bs-target="#navDashboard" aria-expanded="true" aria-controls="navDashboard" href="/#"><i class="nav-icon fe fe-lock me-2"></i> Authentication</a></li>
        <li class="nav-item collapse show" style=""><ul class="nav flex-column list-group"><li class="nav-item"><a class="nav-link " href="/authentication/sign-in">Sign In</a></li><li class="nav-item"><a class="nav-link " href="/authentication/sign-up">Sign Up</a></li><li class="nav-item"><a class="nav-link " href="/authentication/forget-password">Forget Password</a></li></ul></li> -->
        <!-- <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Table pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $active === 'menus' ? 'active bg-gradient-primary' : ''; ?> " href="<?= base_url('dashboard/menus'); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Menus</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $active === 'galleries' ? 'active bg-gradient-primary' : ''; ?> " href="<?= base_url('dashboard/galleries'); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Galleries</span>
          </a>
        </li> -->
        <!-- <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Form pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $active === 'form menu' ? 'active bg-gradient-primary' : ''; ?> " href="<?= base_url('dashboard/menu'); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Menu</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $active === 'form gallery' ? 'active bg-gradient-primary' : ''; ?> " href="<?= base_url('dashboard/gallery'); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Gallery</span>
          </a>
        </li> -->
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $active === 'profile' ? 'active bg-gradient-primary' : ''; ?> " href="<?= base_url('dashboard/profile'); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?= base_url('auth/sign-up'); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="<?= base_url('dashboard'); ?>">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page"><?= $active; ?></li>
          </ol>
          <h6 class="font-weight-bolder mb-0 text-capitalize"><?= $active; ?></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <form action="<?= base_url('menu/search'); ?>" method="get">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input value="<?= old('q'); ?>" type="text" name="q" class="form-control">
            </div>
          </form>
          </div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="<?= base_url('auth/sign-out'); ?>" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign Out</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <?php foreach($activities as $activity):?>  
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="<?= base_url('assets/admin/'); ?>img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold"><?= $activity['name']; ?></span> <?= $activity['description']; ?>
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            <?= $activity['created_at']; ?>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <?php endforeach; ?>
                </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <?= $this->renderSection('content'); ?>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Auryncode</a>
                for a better web.
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="<?= base_url('assets/admin/'); ?>js/core/popper.min.js"></script>
  <script src="<?= base_url('assets/admin/'); ?>js/core/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/admin/'); ?>js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url('assets/admin/'); ?>js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?= base_url('assets/admin/'); ?>js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('assets/admin/'); ?>js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>