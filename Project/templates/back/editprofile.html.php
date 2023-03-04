<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col-sm-12">
               <h3 class="page-title"></h3>
            </div>
         </div>
      </div>
      <?php if(isset($_GET['msg'])) :?>
         <div class="alert alert-success alert-dismissible fade show" role="alert"> 
            <strong>Félicitations !! </strong>  &nbsp; &nbsp; La modification est effecué avec succée  
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

         <?php endif; ?> 

    
      
      <div class="row" style="margin-left:2em; margin-right:2em;">
         
         <div class="col-xl-12 d-flex">
            <div class="card flex-fill">
               <div class="card-header">
                  <h4 class="card-title">  Informations Personnels  </h4>
               </div>
               <div class="card-body">
               <form class="form-validate" method='post' enctype="multipart/form-data">
               <input type="hidden" name="utilisateur[id]" value="<?=$utilisateur->id ?? ''?>">



                  <div class="profile-detail" style="margin-right: 3em;">
                  <label>  </label> 
                  <img   class="avatar  avatar-img profile-cover-avatar" style="margin-left:25px;" src='/img_utilisateurs/<?=$utilisateur->avatar?>' alt="Profile Image">


                  <div class="upload-img" style="margin-left:75px;">
                     <div class="change-photo-btn" >
                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                           <input  type="file" class="upload" id="fileToUpload" name="fileToUpload" value="<?=$utilisateur->avatar ?? ''?>" 
                           accept="image/gif, image/jpeg, image/jpg, image/png" />
                     </div>
                     <small class="form-text text-muted">Autorisé JPG, GIF, JPEG, PNG, Max 2MB</small>
                  </div>






               
               
             
                  
                   </div>







                     <div class="form-group row">
                        <label style="color:#00dbfb" class="col-lg-2 col-form-label">  <B>Nom</B></label>
                        <div class="col-lg-4">
                           <input type="text" class="form-control" name="utilisateur[nom]" value="<?=$utilisateur->nom ?? ''?>">
                           <small class="form-text text-muted">Nom de l'utilisateur</small>
                        </div>

                        <label style="color:#00dbfb" class="col-lg-2 col-form-label"><B>Prenom</B></label>
                        <div class="col-lg-4">
                           <input type="text" class="form-control" name="utilisateur[prenom]" value="<?=$utilisateur->prenom ?? ''?>">
                           <small class="form-text text-muted">Prenom de l'utilisateur</small>
                        </div>
                     </div>





                     <div class="form-group row">
                        <label style="color:#00dbfb" class="col-lg-2 col-form-label">  <B>Email</B></label>
                        <div class="col-lg-4">
                           <input type="email" class="form-control" name="utilisateur[email]" value="<?=$utilisateur->email ?? ''?>">
                           <small class="form-text text-muted">Email de l'utilisateur</small>
                        </div>

                        <label style="color:#00dbfb" class="col-lg-2 col-form-label"><B>Login</B></label>
                        <div class="col-lg-4">
                           <input type="text" class="form-control" name="utilisateur[login]" value="<?=$utilisateur->login ?? ''?>">
                           <small class="form-text text-muted">Login de l'utilisateur</small>
                        </div>
                     </div>

  <!--
   <select>
   
    
  -->

                     

                     <div class="form-group row">
                        <label style="color:#00dbfb" class="col-lg-2 col-form-label">  <B>Gouvernorat</B></label>
                        <div class="col-lg-4">





                        
                                                  <?php
 
                        $gouvernorats = array('Ariana','Béja','Ben Arous','Bizerte','Gabès',
                        'Gafsa','Jendouba','Kairouan', 'Kasserine','Kébili','Le Kef',
                        'Mahdia','La Manouba	','Médenine','Monastir','Nabeul','Sfax','Sidi Bouzid',
                        'Siliana','Sousse','Tataouine','Tozeur','Tunis'	,'Zaghouan');
                        ?>
                        <select name="utilisateur[gouvernorat]" style=" width: 350px; height:3em;" >
                           <?php 
                           $taillegouvernorats = sizeof($gouvernorats);
                            for($i=0; $i<$taillegouvernorats; $i++) { ?>
                           
                                 <option value="<?=$gouvernorats[ $i ] ?? ''?>" style="height:1000000px;"  ><?php echo $gouvernorats[ $i ] ?></option> 
                                 <?php } ?>
                           </select>
                             </div>

                        <label style="color:#00dbfb" class="col-lg-2 col-form-label"><B>Adresse</B></label>
                        <div class="col-lg-4">
                           <input type="text" class="form-control" name="utilisateur[gouvernorat]" value="<?=$utilisateur->adresse ?? ''?>">
                           <small class="form-text text-muted">Adresse</small>
                        </div>
                     </div>




                     <div class="form-group row">
                        <label style="color:#00dbfb" class="col-lg-2 col-form-label"> <B> Date de Naissance</B></label>
                        <div class="col-lg-6">
                           <input type="date" class="form-control" name="utilisateur[dateNaissance]" value="<?=$utilisateur->dateNaissance ?? ''?>">
                           <small class="form-text text-muted">Date de naissance</small>
                        </div>
                       
                     </div>
                     <div class="form-group row">
                         <label style="color:#00dbfb" class="col-lg-2 col-form-label"> <B>Numéro de téléphone</B></label>

                        <div class="col-lg-6">
                           <input type="number" class="form-control" min="0"  oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" name="utilisateur[tel]" value="<?=$utilisateur->tel ?? ''?>">
                           <small class="form-text text-muted">Numéro de téléphone</small>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label style="color:#00dbfb" class="col-lg-2 col-form-label"><B>Adresse</B></label>
                        <div class="col-lg-6">
                           <input type="text" class="form-control" name="utilisateur[adresse]" value="<?=$utilisateur->adresse ?? ''?>">
                           <small class="form-text text-muted">Adresse de l'utilisateur</small>
                        </div>
                     </div>





                     <div class="text-end">
                        <button type="submit" class="btn btn-primary" style="margin-right: 5px;">Enregistrer </button>
                        <button class="btn btn-secondary" style="margin-right:6px;">Annuler</button>
                        
                     </div>
                  </form>
               </div>
            </div>
         </div>
         
      </div>
     
   </div>
</div>