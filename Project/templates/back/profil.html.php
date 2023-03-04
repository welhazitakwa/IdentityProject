<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="row">
         <div class="col-md-12 col-lg-1 col-xl-11">
            <div class="profile-info" style="margin-left=30em" >
               <h4>Mon profil</h4>
               <div class="profile-list">
                  <div class="profile-detail">
                     <label class="avatar profile-cover-avatar">
                     <img class="avatar-img" src="/img_utilisateurs/<?=$user->avatar?>" alt="Profile Image">
                     </label>
                     <div class="pro-name">
                        <h4><?= $user-> nom?> <?= $user-> prenom?></h4>
                     </div>
                     
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <h4 style="color:#00dbfb" class="pro-title">Informations personnelles</h4>
                        <p></p>
                     </div>
                     <div class="col-md-4 mb-3">
                        <strong><p style="color: black";>Date de naissance</p></strong>
                        <p><?= $user-> dateNaissance?></p>
                     </div>
                     <div class="col-md-4 mb-3">
                        <strong><p style="color: black";>Genre</p></strong>
                        <p></p>
                     </div>
                     <div class="col-md-4 mb-3">
                        <strong><p style="color: black";>Age</p></strong>
                        <p></p>
                     </div>
                     <div class="col-md-12">
                        <h4 style="color:#00dbfb" class="pro-title">Adresse & Localisation</h4>
                     </div>
                     <div  class="col-md-4 mb-1">
                        <strong><p style="color: black";> Gouvernorat </p></strong>
                        <p></p>
                     </div>
                     
                     <div  class="col-md-4 mb-3">
                        <strong><p style="color: black";>Adresse</p></strong>
                        <p><?= $user-> adresse?></p>
                     </div>
                     
                     
                     <div  class="col-md-4 mb-3">
                        <strong><p style="color: black";> Code </p></strong>
                        <p></p>
                     </div>
                  </div>
               </div>
               <div class="profile-list">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="pro-title d-flex justify-content-between">
                           <h4 style="color:#00dbfb">Information sur le compte</h4>
                           
                        </div>
                     </div>
                     <div class="col-md-6 mb-3">
                        <strong><p style="color: black";>Adresse Email</p></strong>
                        <p><?= $user-> email?></p>
                     </div>
                     <div class="col-md-6 mb-3">
                        <strong><p style="color: black";>Numéro de téléphone</p></strong>
                        <p><?= $user-> tel?></p>
                     </div>
                     <div class="col-md-6">
                        <strong><p style="color: black";>Liens sociaux</p></strong>
                        <ul class="social-icon">
                           <li>
                              <a href="#"><i class="feather-twitter"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="feather-facebook"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="feather-linkedin"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="feather-instagram"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="feather-youtube"></i></a>
                           </li>
                        </ul>
                     </div>

                     <div class="col-md-6 mb-3">
 
                     </div>



                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>