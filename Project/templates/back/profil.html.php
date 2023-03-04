<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="row">
         <div class="col-md-8 col-lg-8 col-xl-6">
            <div class="profile-info">
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
                        <h6 class="pro-title">Informations personnelles</h6>
                        <p></p>
                     </div>
                     <div class="col-md-4 mb-3">
                        <h5>Date de naissance</h5>
                        <p><?= $user-> dateNaissance?></p>
                     </div>
                     <div class="col-md-4 mb-3">
                        <h5>Genre</h5>
                        <p></p>
                     </div>
                     <div class="col-md-4 mb-3">
                        <h5>Age</h5>
                        <p></p>
                     </div>
                     <div class="col-md-12">
                        <h6 class="pro-title">Adresse & Localisation</h6>
                     </div>
                     <div class="col-md-4">
                        <h5>Adresse</h5>
                        <p><?= $user-> adresse?></p>
                     </div>
                     <div class="col-md-4">
                        
                     </div>
                     <div class="col-md-4">
                        <h5>Etat</h5>
                        <p></p>
                     </div>
                  </div>
               </div>
               <div class="profile-list">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="pro-title d-flex justify-content-between">
                           <h6>Information sur le compte</h6>
                           
                        </div>
                     </div>
                     <div class="col-md-6 mb-3">
                        <h5>Email Adresse</h5>
                        <p><?= $user-> email?></p>
                     </div>
                     <div class="col-md-6 mb-3">
                        <h5>Numéro de téléphone</h5>
                        <p><?= $user-> tel?></p>
                     </div>
                     <div class="col-md-6">
                        <h5>Liens sociaux</h5>
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
                        <?php
 
  $legumes = array('Bizerte','Jandouba','Beja','Tunis');
  ?>
  <select>
    <?php 
$tailleLegumes = sizeof($legumes);
 
  // Parcours du tableau
  for($i=0; $i<$tailleLegumes; $i++)
  {?>
<option value="0"><?php echo $legumes[ $i ] ?></option> 
 <?php 
}
    ?>
                     </div>



                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>