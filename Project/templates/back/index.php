<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Theta is a premium responsive admin dashboard template with great features.">
    <meta name="keywords" content="responsive, admin template, dashboard template, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?=$title?></title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="/back/images/favicon.ico">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="/back/plugins/switchery/switchery.min.css" rel="stylesheet">
    <!-- jvectormap css -->
    <link href="/back/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
	 <!-- Morris Chart css -->
    <link rel="stylesheet" href="/back/plugins/morris/morris.css">  
    <!-- Datepicker css -->
    <link href="/back/plugins/datepicker/datepicker.min.css" rel="stylesheet" type="text/css">
	 <!-- DataTables css -->
    <link href="/back/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/back/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive Datatable css -->
    <link href="/back/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/back/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/back/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/back/css/flag-icon.min.css" rel="stylesheet" type="text/css">
    <link href="/back/css/style.css" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>
<body class="vertical-layout">
    <!-- Start Infobar Notifications Sidebar -->
    <div id="infobar-notifications-sidebar" class="infobar-notifications-sidebar">
        <div class="infobar-notifications-sidebar-head d-flex w-100 justify-content-between">
            <h4>Notifications</h4><a href="javascript:void(0)" id="infobar-notifications-close" class="infobar-notifications-close"><img src="/back/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
        </div>
        <div class="infobar-notifications-sidebar-body">
            <ul class="nav nav-pills nav-justified" id="infobar-pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-messages-tab" data-toggle="pill" href="#pills-messages" role="tab" aria-controls="pills-messages" aria-selected="true">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-emails-tab" data-toggle="pill" href="#pills-emails" role="tab" aria-controls="pills-emails" aria-selected="false">Emails</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-actions-tab" data-toggle="pill" href="#pills-actions" role="tab" aria-controls="pills-actions" aria-selected="false">Actions</a>
                </li>
            </ul>
            <div class="tab-content" id="infobar-pills-tabContent">
                <div class="tab-pane fade show active" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab">
                    <ul class="list-unstyled">
                        <li class="media">
                            <img class="mr-3 align-self-center rounded-circle" src="/back/images/users/girl.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Amy Adams<span class="badge badge-success">1</span><span class="timing">Jan 22</span></h5>
                                <p>Hey!! What are you doing tonight ?</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 align-self-center rounded-circle" src="/back/images/users/boy.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>James Simpsons<span class="badge badge-success">2</span><span class="timing">Feb 15</span></h5>
                                <p>What's up ???</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 align-self-center rounded-circle" src="/back/images/users/men.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Mark Witherspoon<span class="badge badge-success">3</span><span class="timing">Mar 03</span></h5>
                                <p>I will be late today in office.</p>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 align-self-center rounded-circle" src="/back/images/users/women.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Jenniffer Wills<span class="badge badge-success">4</span><span class="timing">Apr 05</span></h5>
                                <p>Venture presentation is ready.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-emails" role="tabpanel" aria-labelledby="pills-emails-tab">
                    <ul class="list-unstyled">
                        <li class="media">
                            <span class="mr-3 align-self-center img-icon">N</span>
                            <div class="media-body">
                                <h5>Nelson Smith<span class="timing">Jan 22</span></h5>
                                <p><span class="badge badge-danger-inverse">WORK</span>Salary has been processed.</p>
                            </div>
                        </li>
                        <li class="media">
                            <span class="mr-3 align-self-center img-icon">C</span>
                            <div class="media-body">
                                <h5>Courtney Cox<i class="feather icon-star text-warning ml-2"></i><span class="timing">Feb 15</span></h5>
                                <p><span class="badge badge-success-inverse">URGENT</span>New product launching...</p>
                            </div>
                        </li>
                        <li class="media">
                            <span class="mr-3 align-self-center img-icon">R</span>
                            <div class="media-body">
                                <h5>Rachel White<span class="timing">Mar 03</span></h5>
                                <p><span class="badge badge-secondary-inverse">ORDER</span><span class="badge badge-info-inverse">SHOPPING</span>Your order has been...</p>
                            </div>
                        </li>
                        <li class="media">
                            <span class="mr-3 align-self-center img-icon">F</span>
                            <div class="media-body">
                                <h5>Freepik<span class="timing">Mar 03</span></h5>
                                <p><a href="#" class="badge badge-primary mr-2">VERIFY NOW</a>New Sign verification req...</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-actions" role="tabpanel" aria-labelledby="pills-actions-tab">
                    <ul class="list-unstyled">
                        <li class="media">
                            <span class="mr-3 action-icon badge badge-success-inverse"><i class="feather icon-check"></i></span>
                            <div class="media-body">
                                <h5 class="action-title">Payment Success !!!</h5>
                                <p class="my-3">We have received your payment toward ad Account : 9876543210. Your Ad is Running.</p>
                                <p><span class="badge badge-danger-inverse">INFO</span><span class="badge badge-info-inverse">STATUS</span><span class="timing">Today, 09:39 PM</span></p>                            
                            </div>
                        </li>
                        <li class="media">
                            <span class="mr-3 action-icon badge badge-primary-inverse"><i class="feather icon-calendar"></i></span>
                            <div class="media-body">
                                <h5 class="action-title">Nobita Applied for Leave.</h5>
                                <p class="my-3">Nobita applied for leave due to personal reasons on 22nd Feb.</p>
                                <p><span class="badge badge-success">APPROVE</span><span class="badge badge-danger">REJECT</span><span class="timing">Yesterday, 05:25 PM</span></p>                            
                            </div>
                        </li>
                        <li class="media">
                            <span class="mr-3 action-icon badge badge-danger-inverse"><i class="feather icon-alert-triangle"></i></span>
                            <div class="media-body">
                                <h5 class="action-title">Alert</h5>
                                <p class="my-3">There has been new Log in fron your account at Melbourne. Mark it safe or report.</p>
                                <p><i class="feather icon-check text-success mr-3"></i><a href="#" class="text-muted">Report Now</a><span class="timing">5 Jan 2019, 02:13 PM</span></p>                            
                            </div>
                        </li>
                        <li class="media">
                            <span class="mr-3 action-icon badge badge-warning-inverse"><i class="feather icon-award"></i></span>
                            <div class="media-body">
                                <h5 class="action-title">Congratulations !!!</h5>
                                <p class="my-3">Your role in the organization has been changed from Editor to Chief Strategist.</p>
                                <p><span class="badge badge-danger-inverse">ACTIVITY</span><span class="timing">10 Jan 2019, 08:49 PM</span></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="infobar-notifications-sidebar-overlay"></div>
    <!-- End Infobar Notifications Sidebar -->
   
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Logobar -->
                <div class="logobar">
                    <a href="index.html" class="logo logo-large"><img src="/back/images/logo.svg" class="img-fluid" alt="logo"></a>
                    <a href="index.html" class="logo logo-small"><img src="/back/images/small_logo.svg" class="img-fluid" alt="logo"></a>
                </div>
                <!-- End Logobar -->
                <!-- Start Profilebar -->
                <div class="profilebar text-center">
                    <img src="/avatar/default.svg" class="img-fluid" alt="profile">
                    <div class="profilename">
                    <h5 class="text-white"><?=$user->Nom?> <?=$user->Prenom?></h5>
                      <p>CHEF DE PRODUCTION</p>
                    </div>
                    <div class="userbox">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="/profil" class="profile-icon"><img src="/back/images/svg-icon/user.svg" class="img-fluid" alt="user"></a></li>
                            <li class="list-inline-item"><a href="/logout" class="profile-icon"><img src="/back/images/svg-icon/logout.svg" class="img-fluid" alt="logout"></a></li>
                        </ul>
                      </div>
                </div>
                <!-- End Profilebar -->
                <!-- Start Navigationbar -->
                <div class="navigationbar">
                    <ul class="vertical-menu">
					           
						
                        <li>
                            <a href="javaScript:void();">
                                <img src="/back/images/svg-icon/ecommerce.svg" class="img-fluid" alt="ecommerce"><span>eCommerce</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="/categorie/list"><i class="mdi mdi-circle"></i>Categories</a></li>
                                <li><a href="/produit/list"><i class="mdi mdi-circle"></i>Produits</a></li>
                                <li><a href="/produit/list"><i class="mdi mdi-circle"></i>Produits</a></li>

                            </ul>
                        </li>
           
                                 
                        <li class="vertical-header">Rôles</li>
						<?php if ($user->Permissions==0): ?>
                        <li>
                            <a href="/abonnement/list">
                              <img src="/back/images/svg-icon/error.svg" class="img-fluid" alt="Abonnement"><span>Abonnez-Vous pour bénificier de nos services</span>
                            </a>
                          
                        </li>
						
						<?php endif; if ($user->Permissions==1): ?>
                        <li>
                            <a href="javaScript:void();">
                              <img src="/back/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard"><span>Chef d'orchestre</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href=""><i class="mdi mdi-circle"></i>sauf abonné</a></li>
                               
                            </ul>
                        </li>
						<?php endif; ?>

            </ul>
                </div>
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
		<div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="index.html" class="mobile-logo"><img src="/back/images/logo.svg" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="/back/images/svg-icon/horizontal.svg" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="/back/images/svg-icon/verticle.svg" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="/back/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="/back/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                           <img src="/back/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                           <img src="/back/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="searchbar">
                                        <form>
                                            <div class="input-group">
                                              <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                              <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon2"><img src="/back/images/svg-icon/search.svg" class="img-fluid" alt="search"></button>
                                              </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="notifybar">
                                        <a href="javascript:void(0)" id="infobar-notifications-open" class="infobar-icon">
                                            <img src="/back/images/svg-icon/notifications.svg" class="img-fluid" alt="notifications">
                                            <span class="live-icon"></span>
                                        </a>
                                    </div>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div> 
                <!-- End row -->
            </div>
            <!-- End Topbar -->
			<!-- VAR -->
			<?=$output;?>
			<!-- endVAR -->
			<!-- Start Footerbar -->
			<div class="footerbar">
					<footer class="footer">
						<p class="mb-0">© 2019 Theta - All Rights Reserved.</p>
					</footer>
				</div>
				<!-- End Footerbar -->
			</div>
		   <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->        
    <script src="/back/js/jquery.min.js"></script>
    <script src="/back/js/popper.min.js"></script>
    <script src="/back/js/bootstrap.min.js"></script>
    <script src="/back/js/modernizr.min.js"></script>
    <script src="/back/js/detect.js"></script>
    <script src="/back/js/jquery.slimscroll.js"></script>
    <script src="/back/js/vertical-menu.js"></script>
    <!-- Switchery js -->
    <script src="/back/plugins/switchery/switchery.min.js"></script>
    <!-- Chart js -->
    <script src="/back/plugins/chart.js/chart.min.js"></script>
    <script src="/back/plugins/chart.js/chart-bundle.min.js"></script>
    <!-- Piety Chart js -->
    <script src="/back/plugins/peity/jquery.peity.min.js"></script> 
    <!-- Vector Maps js -->
    <script src="/back/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/back/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Custom Dashboard Social js -->   
    <script src="/back/js/custom/custom-dashboard-social.js"></script>
	 <!-- Morris Chart js -->
    <script src="/back/plugins/morris/morris.min.js"></script>
    <script src="/back/plugins/raphael/raphael-min.js"></script>
   
    <!-- Dashboard js -->
    <script src="/back/js/custom/custom-dashboard-analytics.js"></script>
	 <!-- Datatable js -->
    <script src="/back/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/back/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/back/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="/back/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="/back/plugins/datatables/jszip.min.js"></script>
    <script src="/back/plugins/datatables/pdfmake.min.js"></script>
    <script src="/back/plugins/datatables/vfs_fonts.js"></script>
    <script src="/back/plugins/datatables/buttons.html5.min.js"></script>
    <script src="/back/plugins/datatables/buttons.print.min.js"></script>
    <script src="/back/plugins/datatables/buttons.colVis.min.js"></script>
    <script src="/back/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="/back/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="/back/js/custom/custom-table-datatable.js"></script>
	   <!-- Parsley js -->
    <script src="/back/plugins/validatejs/validate.min.js"></script>
	<!-- Validate js -->
    <script src="/back/js/custom/custom-validate.js"></script>
    <script src="/back/js/custom/custom-form-validation.js"></script>
    <!-- Core js -->
    <script src="/back/js/core.js"></script>
    <!-- End js -->
</body>

</html>