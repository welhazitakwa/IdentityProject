
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
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

   </head>
   <body>
      <div class="main-wrapper">
         <div class="header">
            <div class="header-left">
               <a href="/" class="logo">
               <img src="/back/img/logo.png" alt="Logo">
               </a>
               <a href="index.html" class="logo logo-small">
               <img src="/back/img/logo-small.png" alt="Logo" width="30" height="30">
               </a>
               <!-- <a href="javascript:void(0);" id="toggle_btn">
               <i class="feather-chevrons-left"></i> -->
               </a>
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
                     <a class="dropdown-item" href ="/editprofil?id=<?=$user->id;?>"><i class="feather-edit me-1"></i> Modifier le Profil</a>
                     <!--<a class="dropdown-item" href="account-settings.html"><i class="feather-sliders me-1"></i> Paramètres</a>-->
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
                     <li class="menu-title"><span></span></li>
                     <li class="active">
                        <a href="/"><i class="feather-grid"></i> <span>Tableau de bord</span></a>
                     </li>
                     <li>
                        <!--<a href="/categorie/list"><i class="feather-calendar"></i> <span>Categories</span></a>-->
                     </li>
                     <li>
                        <a href="/abonnement/list"><i class="feather-dollar-sign"></i> <span>Abonnements</span></a>
                     </li>
                     <li>
                        <a href="/specialite/list"><i class="fas fa-plus-square"></i> <span>Spécialités</span></a>
                     </li>
                     <li>

                       <!-- <a href="/doctor/list"><i class="feather-user"></i> <span>Doctors</span></a>-->

                        <a href="/doctor/listall"><i class="feather-user"></i> <span>Docteurs</span></a>

                     </li>
                     <li>
                        <a href="/patient/list"><i class="feather-users"></i> <span>Patients</span></a>
                     </li>
                     <li>
                        <a href="/appointment/list"><i class="feather-calendar"></i> <span>Rendez-vous</span></a>
                     </li>
                     <li>
                       
                     </li>
                     <li>
                       
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