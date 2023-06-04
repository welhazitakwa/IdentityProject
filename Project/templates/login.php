

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title> Login</title>
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
                     <h3>Se connecter</h3>
                     <p class="account-subtitle"><?php
if(isset ($_POST['ok'])) :
   if ($loggedIn):
	   if($user->profil==1):
		   include 'administration/index.php';
      endif;
   
   else:
?> 

<div class="alert alert-danger" role="alert">
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Vous devez vérifier vos donées !
</div>   <?php  endif;endif;?></p>

                     <form action="/login" method='post'>
                        <div class="form-group form-focus">
                           <input type="text" id='login' name='login' class="form-control floating" >
                           <label class="focus-label">Entrer votre Nom d'utilisateur</label>
                        </div>
                        <div class="form-group form-focus">
                           <input type="password" id='password' name='password' class="form-control floating" >
                           <label class="focus-label">Entrer votre mot de passe</label>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-6">
                                 <!--
                                 <label class="custom_check mr-2 mb-0 d-inline-flex"> Remember me
                                 <input type="checkbox" name="radio">
                                 <span class="checkmark"></span>
                                 </label>-->
                              </div>
                              <div class="col-6 text-end">
                               <!--  <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>-->
                              </div>
                           </div>
                        </div>
                        <div class="d-grid">
                           <button class="btn btn-primary" type="submit" name="ok">Se connecter </button>


                        </div>
                        <div class="dont-have">Vous n'avez pas un compte ? <a href="/register">S'inscrire</a></div>
                        <div class="login-or">
                           <span class="or-line"></span>
                           
                        
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