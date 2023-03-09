
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title><?=$title?></title>
      <link rel="shortcut icon" href="/back/img/favicon.png">
      <link rel="stylesheet" href="/back/css/bootstrap.min.css">
      <link rel="stylesheet" href="/back/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="/back/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="/back/css/feather.css">
      <link rel="stylesheet" href="/back/plugins/select2/css/select2.min.css">
      <link rel="stylesheet" href="/back/plugins/owl-carousel/owl.carousel.min.css">
      <link rel="stylesheet" href="/back/plugins/daterangepicker/daterangepicker.css">
      <link rel="stylesheet" href="/back/plugins/datatables/datatables.min.css">
      <link rel="stylesheet" href="/back/css/style.css">

   </head>
   <body>
      <div class="main-wrapper">
         <div class="header">
            <div class="header-left">
               <a href="index.html" class="logo">
               <img src="/back/img/logo.png" alt="Logo">
               </a>
               <a href="index.html" class="logo logo-small">
               <img src="/back/img/logo-small.png" alt="Logo" width="30" height="30">
               </a>
               <a href="javascript:void(0);" id="toggle_btn">
               <i class="feather-chevrons-left"></i>
               </a>
            </div>
            <div class="top-nav-search">
               <div class="main">
                  <form class="search" method="post" action="https://doccure.dreamguystech.com/html/template/admin/index.html">
                     <div class="s-icon"><i class="fas fa-search"></i></div>
                     <input type="text" class="form-control" placeholder="Start typing your Search..." />
                     <ul class="results">
                        <li>
                           <h6><i class="feather-calendar me-1"></i> Appointments</h6>
                           <p>No matched Appointment found. <a href="index.html"><span>View all</span></a></p>
                        </li>
                        <li>
                           <h6><i class="feather-calendar me-1"></i> Specialities</h6>
                           <p>No matched Appointment found. <a href="index.html"><span>View all</span></a></p>
                        </li>
                        <li>
                           <h6><i class="feather-user me-1"></i> Doctors</h6>
                           <p>No matched Appointment found. <a href="index.html"><span>View all</span></a></p>
                        </li>
                        <li>
                           <h6><i class="feather-users me-1"></i> Patients</h6>
                           <p>No matched Appointment found. <a href="index.html"><span>View all</span></a></p>
                        </li>
                     </ul>
                  </form>
               </div>
            </div>
            <a class="mobile_btn" id="mobile_btn">
            <i class="fas fa-bars"></i>
            </a>
            <ul class="nav nav-tabs user-menu">
               <li class="nav-item">
                  <a href="#" id="dark-mode-toggle" class="dark-mode-toggle">
                  <i class="feather-sun light-mode"></i><i class="feather-moon dark-mode"></i>
                  </a>
               </li>
               <li class="nav-item dropdown noti-nav">
                  <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                  <i class="feather-bell"></i> <span class="badge"></span>
                  </a>
                  <div class="dropdown-menu notifications">
                     <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"><i class="feather-more-vertical"></i></a>
                     </div>
                     <div class="noti-content">
                        <ul class="notification-list">
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media d-flex">
                                    <span class="avatar">
                                    <img class="avatar-img" alt="" src="/back/img/profiles/avatar-02.jpg">
                                    </span>
                                    <div class="media-body">
                                       <h6>Travis Tremble <span class="notification-time">18.30 PM</span></h6>
                                       <p class="noti-details">Sent a amount of $210 for his Appointment <span class="noti-title">Dr.Ruby perin </span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media d-flex">
                                    <span class="avatar">
                                    <img class="avatar-img" alt="" src="/back/img/profiles/avatar-05.jpg">
                                    </span>
                                    <div class="media-body">
                                       <h6>Travis Tremble <span class="notification-time">12 Min Ago</span></h6>
                                       <p class="noti-details"> has booked her appointment to <span class="noti-title">Dr. Hendry Watt</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media d-flex">
                                    <div class="avatar">
                                       <img class="avatar-img" alt="" src="/back/img/profiles/avatar-03.jpg">
                                    </div>
                                    <div class="media-body">
                                       <h6>Travis Tremble <span class="notification-time">6 Min Ago</span></h6>
                                       <p class="noti-details"> Sent a amount $210 for his Appointment <span class="noti-title">Dr.Maria Dyen</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media d-flex">
                                    <div class="avatar avatar-sm">
                                       <img class="avatar-img" alt="" src="/back/img/profiles/avatar-06.jpg">
                                    </div>
                                    <div class="media-body">
                                       <h6>Travis Tremble <span class="notification-time">8.30 AM</span></h6>
                                       <p class="noti-details"> Send a message to his doctor</p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </li>
               <li class="nav-item dropdown main-drop">
                  <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                  <span class="user-img">
                  <img src='/img_utilisateurs/<?=$user->avatar?>' alt="">
                  <span class="status online"></span>
                  </span>
                  </a>
                  <div class="dropdown-menu">
                     <div class="user-header">
                        <div class="avatar avatar-sm">
                           <img src='/img_utilisateurs/<?=$user->avatar?>' alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                           <h6> <?= $user-> nom?> <?=$user-> prenom?> </h6>
                           <p class="text-muted mb-0">Administrateur</p>
                        </div>
                     </div>
                     <a class="dropdown-item" href="/profil"><i class="feather-user me-1"></i> Mon profil</a>
                     <a class="dropdown-item" href ="/editprofil?id=<?=$user->id;?>"><i class="feather-edit me-1"></i> Modifier Mon Profile</a>
                     <a class="dropdown-item" href="account-settings.html"><i class="feather-sliders me-1"></i> Paramètres</a>
                     <hr class="my-0 ms-2 me-2">
                     <a class="dropdown-item" href="logout"><i class="feather-log-out me-1"></i> Se Déconnecter</a>
                  </div>
               </li>
            </ul>
         </div>
         <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
               <div id="sidebar-menu" class="sidebar-menu">
                  <ul>
                     <li class="menu-title"><span>Main</span></li>
                     <li class="active">
                        <a href="/"><i class="feather-grid"></i> <span>Dashboard</span></a>
                     </li>
                     <li>
                        <a href="/categorie/list"><i class="feather-calendar"></i> <span>Categories</span></a>
                     </li>
                     <li>
                        <a href="/abonnement/list"><i class="feather-dollar-sign"></i> <span>Abonnements</span></a>
                     </li>
                     <li>
                        <a href="/specialite/list"><i class="feather-package"></i> <span>Specialities</span></a>
                     </li>
                     <li>
                        <a href="/doctor/listall"><i class="feather-user-plus"></i> <span>Doctors</span></a>
                     </li>
                     <li>
                        <a href="/patients/list"><i class="feather-users"></i> <span>Patients</span></a>
                     </li>
                     <li>
                        <a href="ratings.html"><i class="feather-star"></i> <span>Reviews</span></a>
                     </li>
                     <li>
                        <a href="transaction.html"><i class="feather-credit-card"></i> <span>Transactions</span></a>
                     </li>
                     <li>
                        <a href="settings.html"><i class="feather-sliders"></i> <span> Settings</span></a>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="feather-file-text"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="appointment-report.html">Appointment Report</a></li>
                           <li><a href="income-report.html">Income Report</a></li>
                           <li><a href="invoice-report.html">Invoice Report</a></li>
                           <li><a href="user-reports.html">Users Report</a></li>
                        </ul>
                     </li>
                    <!-- <li class="menu-title">
                        <span>Pharmacy</span>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="feather-file-plus"></i> <span> Pharmacies</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="pharmacy-list.html">All Pharmacies</a></li>
                           <li><a href="pharmacy-category.html">Categories</a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="feather-shopping-cart"></i> <span> Product List</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="product-list.html">All Products</a></li>
                           <li><a href="product-category.html">Categories</a></li>
                        </ul>
                     </li>
                     <li class="menu-title">
                        <span>Blog</span>
                     </li>-->
                     <li class="submenu">
                        <a href="#"><i class="feather-grid"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="active-blog.html">Blogs</a></li>
                           <li><a href="blog-details.html">Blog Details</a></li>
                           <li><a href="add-blog.html">Add Blog</a></li>
                           <li><a href="edit-blog.html">Edit Blog</a></li>
                        </ul>
                     </li>
                    <!-- <li class="menu-title">
                        <span>Pages</span>
                     </li>
                     <li>
                        <a href="add-profile.html"><i class="feather-user"></i> <span>Profile</span></a>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="feather-lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="login.html"> Login </a></li>
                           <li><a href="register.html"> Register </a></li>
                           <li><a href="forgot-password.html"> Forgot Password </a></li>
                           <li><a href="lock-screen.html"> Lock Screen </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="feather-book-open"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="error-404.html">404 Error </a></li>
                           <li><a href="error-500.html">500 Error </a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="blank-page.html"><i class="feather-clipboard"></i> <span>Blank Page</span></a>
                     </li>
                     <li class="menu-title">
                        <span>UI Interface</span>
                     </li>
                     <li>
                        <a href="components.html"><i class="feather-pocket"></i> <span>Components</span></a>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="feather-file-minus"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                           <li><a href="form-input-groups.html">Input Groups </a></li>
                           <li><a href="form-horizontal.html">Horizontal Form </a></li>
                           <li><a href="form-vertical.html"> Vertical Form </a></li>
                           <li><a href="form-mask.html">Form Mask </a></li>
                           <li><a href="form-validation.html">Form Validation </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="feather-align-justify"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="tables-basic.html">Basic Tables </a></li>
                           <li><a href="data-tables.html">Data Table </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="javascript:void(0);"><i class="feather-life-buoy"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li class="submenu">
                              <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                              <ul style="display: none;">
                                 <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                 <li class="submenu">
                                    <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                       <li><a href="javascript:void(0);">Level 3</a></li>
                                       <li><a href="javascript:void(0);">Level 3</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="javascript:void(0);"> <span>Level 1</span></a>
                           </li>
                        </ul>
                     </li>-->
                  </ul>
               </div>
            </div>
         </div>
         <?= $output;?>      </div>
      <script src="/back/js/jquery-3.6.0.min.js"></script>
      <script src="/back/js/bootstrap.bundle.min.js"></script>
      <script src="/back/js/feather.min.js"></script>
      <script src="/back/plugins/select2/js/select2.min.js"></script>
      <script src="/back/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <script src="/back/plugins/owl-carousel/owl.carousel.min.js"></script>
      <script src="/back/plugins/apexchart/apexcharts.min.js"></script>
      <script src="/back/plugins/apexchart/chart-data.js"></script>
      <script src="/back/js/moment.min.js"></script>
      <script src="/back/plugins/daterangepicker/daterangepicker.js"></script>
      <script src="/back/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="/back/plugins/datatables/datatables.min.js"></script>
      <script src="/back/js/script.js"></script>
      <script src="/back/js/form-validation.js"></script>


      
   </body>
  </html>