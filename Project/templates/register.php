<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Doccure - Login</title>
      <link rel="shortcut icon" type="image/x-icon" href="/back/img/favicon.png">
      <link rel="stylesheet" href="/back/css/bootstrap.min.css">
      <link rel="stylesheet" href="/back/css/feather.css">
      <link rel="stylesheet" href="/back/css/style.css">
   </head>
   <body>
      <div class="main-wrapper">
         <div class="header d-none">
            <ul class="nav nav-tabs user-menu">
               <li class="nav-item">
                  <a href="#" id="dark-mode-toggle" class="dark-mode-toggle">
                  <i class="feather-sun light-mode"></i><i class="feather-moon dark-mode"></i>
                  </a>
               </li>
            </ul>
         </div>
         <div class="row">
            <div class="col-md-6 login-bg">
               <div class="login-banner"></div>
            </div>
            <div class="col-md-6 login-wrap-bg">
               <div class="login-wrapper">
                  <div class="loginbox">
                     <div class="img-logo">
                        <img src="/back/img/logo.png" class="img-fluid" alt="Logo">
                     </div>
                     <h3>Getting Started</h3>
                     <p class="account-subtitle">Register with email</p>
                     <form action="/register" method="post">
								    <!-- basic input -->
                                    <input type="hidden"  name="utilisateur[id]" value="" >
								    <input type="hidden"  name="utilisateur[profil]" value="1" >
								    <input type="hidden"  name="utilisateur[permissions]" value="0" >
								    <input type="hidden"  name="utilisateur[avatar]" value="default.png" >
								<input type="hidden"  name="utilisateur[date_ins]" value="<?=date('d/m/Y')?>" >


								
                        <!-- basic input -->

                        <div class="form-group form-focus">
                           <input type="text" class="form-control floating" name="utilisateur[login]">
                           <label class="focus-label"> Login</label>
                        </div>
                        <div class="form-group form-focus">
                           <input type="email" class="form-control floating" name="utilisateur[email]">
                           <label class="focus-label"> Email</label>
                        </div>
                        <div class="form-group form-focus">
                           <input type="tel" class="form-control floating" name="utilisateur[tel]">
                           <label class="focus-label"> TELEPHONE</label>
                        </div>
                        
                        <div class="form-group form-focus">
                           <input type="password" name="utilisateur[password]" class="form-control floating" required>
                           <label class="focus-label">Enter Password</label>
                        </div>
                        <div class="form-group form-focus">
                           <input type="text" class="form-control floating" name="utilisateur[nom]" required>
                           <label class="focus-label">Nom</label>
                        </div>
                       <!-- <div class="form-group form-focus">
                           <input type="password" class="form-control floating">
                           <label class="focus-label">Enter Password</label>
                        </div>
                        <div class="form-group form-focus">
                           <input type="password" class="form-control floating">
                           <label class="focus-label">Confirm Password</label>
                        </div>-->
                        <div class="form-group">
                           <div class="row">
                              <div class="col-12">
                                 <label class="custom_check mr-2 mb-0" > I agree to the <a href="#" class="text-primary"> terms of service</a> and <a href="#" class="text-primary">privacy policy</a>
                                 <input type="checkbox" name="radio" required>
                                 <span class="checkmark"></span>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="d-grid">
                           <button class="btn btn-primary" type="submit">Register</button>
                        </div>
                        <div class="dont-have">Already have an account? <a href="/login">Login</a></div>
                        <div class="login-or">
                           <span class="or-line"></span>
                           <p class="span-or">or login with </p>
                        </div>
                        <div class="social-login">
                           <a href="#"><img src="/back/img/icon/google.png" class="img-fluid" alt="Logo"></a>
                           <a href="#"><img src="/back/img/icon/facebook.png" class="img-fluid" alt="Logo"></a>
                           <a href="#"><img src="/back/img/icon/twitter.png" class="img-fluid" alt="Logo"></a>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="/back/js/jquery-3.6.0.min.js"></script>
      <script src="/back/js/bootstrap.bundle.min.js"></script>
      <script src="/back/js/script.js"></script>
   </body>
</html>