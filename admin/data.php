<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets-admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets-admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets-admin/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../assets-admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets-admin/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets-admin/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets-admin/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets-admin/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="index.html"><img src="../assets-admin/images/logo.svg" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="../assets-admin/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="profile-name">
                                <?php
                                session_start();

                                // Inisialisasi variabel dengan nilai default jika pengguna belum login
                                $userName = "Guest";

                                // Periksa apakah pengguna sudah login
                                if (isset($_SESSION['username'])) {
                                    // Jika sudah login, dapatkan nama pengguna dari session
                                    $userName = htmlspecialchars($_SESSION['username']);
                                }
                                ?>
                                <!-- Kemudian, sisipkan nama pengguna ke dalam tag HTML -->
                                <h5 class="mb-0 font-weight-normal"><?php echo $userName; ?></h5>

                                <span>SaptaRepairElEKTRONIK. </span>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-onepassword  text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-calendar-today text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="admin.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="data.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Data Barang</span>
                    </a>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets-admin/images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="Cari Data Hp...">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown d-none d-lg-block">
                            <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Tambahkan Data Hp</a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                                <h6 class="p-3 mb-0">Menu</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-file-outline text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Tambahkan Data Hp</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav-settings d-none d-lg-block">
                            <a class="nav-link" href="#">
                                <i class="mdi mdi-view-grid"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-email"></i>
                                <span class="count bg-success"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                <h6 class="p-3 mb-0">Messages</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="../assets-admin/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                                        <p class="text-muted mb-0"> 1 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="../assets-admin/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                                        <p class="text-muted mb-0"> 15 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="../assets-admin/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                                        <p class="text-muted mb-0"> 18 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">4 new messages</p>
                            </div>
                        </li>
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <span class="count bg-danger"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                <h6 class="p-3 mb-0">Notifications</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-calendar text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Event today</p>
                                        <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Settings</p>
                                        <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-link-variant text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Launch Admin</p>
                                        <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">See all notifications</p>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <!-- <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p> -->
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $userName; ?></p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1" id="logoutButton">Log out</p>
                                    </div>
                                    <script>
                                        // Menambahkan event listener ke elemen <p>
                                        document.getElementById('logoutButton').addEventListener('click', function() {
                                            redirectToLogout();
                                        });

                                        function redirectToLogout() {
                                            window.location.href = 'logout.php';
                                        }
                                    </script>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">Pengaturan Lanjutan</p>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tabel Perbaikan Elektronik</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> Nama Pelanggan </th>
                                                <th> Total Biaya </th>
                                                <th> Tanggal Selesai </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 1 </td>
                                                <td> Herman Beck </td>
                                                <td> Rp 77.990 </td>
                                                <td> 15 Mei 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 2 </td>
                                                <td> Messsy Adam </td>
                                                <td> Rp 245.300 </td>
                                                <td> 1 Juli 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 3 </td>
                                                <td> John Richards </td>
                                                <td> Rp 138.000 </td>
                                                <td> 12 April 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 4 </td>
                                                <td> Peter Meggik </td>
                                                <td> Rp 77.990 </td>
                                                <td> 15 Mei 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 5 </td>
                                                <td> Edward </td>
                                                <td> Rp 160.250 </td>
                                                <td> 3 Mei 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 6 </td>
                                                <td> John Doe </td>
                                                <td> Rp 123.210 </td>
                                                <td> 5 April 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 7 </td>
                                                <td> Henry Tom </td>
                                                <td> Rp 150.000 </td>
                                                <td> 16 Juni 2015 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Seluruh Pelanggan Perbaikan Elektronik</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nama Pelanggan</th>
                                                <th>Nomor Faktur</th>
                                                <th>Tanggal Permintaan</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jacob</td>
                                                <td>ELK-2022001</td>
                                                <td>12 Mei 2022</td>
                                                <td><label class="badge badge-danger">Belum Diproses</label></td>
                                            </tr>
                                            <tr>
                                                <td>Messsy</td>
                                                <td>ELK-2022002</td>
                                                <td>15 Mei 2022</td>
                                                <td><label class="badge badge-warning">Sedang Diproses</label></td>
                                            </tr>
                                            <tr>
                                                <td>John</td>
                                                <td>ELK-2022003</td>
                                                <td>14 Mei 2022</td>
                                                <td><label class="badge badge-info">Selesai - Menunggu Pengambilan</label></td>
                                            </tr>
                                            <tr>
                                                <td>Peter</td>
                                                <td>ELK-2022004</td>
                                                <td>16 Mei 2022</td>
                                                <td><label class="badge badge-success">Selesai</label></td>
                                            </tr>
                                            <tr>
                                                <td>Dave</td>
                                                <td>ELK-2022005</td>
                                                <td>20 Mei 2022</td>
                                                <td><label class="badge badge-warning">Sedang Diproses</label></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020. <br> Dikelola oleh Dionn. </span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets-admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets-admin/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets-admin/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../assets-admin/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../assets-admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets-admin/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets-admin/js/off-canvas.js"></script>
    <script src="../assets-admin/js/hoverable-collapse.js"></script>
    <script src="../assets-admin/js/misc.js"></script>
    <script src="../assets-admin/js/settings.js"></script>
    <script src="../assets-admin/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets-admin/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>