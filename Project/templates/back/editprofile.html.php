<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col-sm-12">
               <h3 class="page-title"></h3>
            </div>
         </div>
      </div>
      <?php if(isset($_GET['msg'])) { ?>
         <div class="alert alert-success alert-dismissible fade show" role="alert"> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <strong>Félicitations !! </strong>  &nbsp; &nbsp; La modification est effecué avec succée  
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

         <?php } else {?> 

                    <div class="alert alert-success alert-dismissible fade show" role="alert"> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <strong> Désolé!! </strong>  &nbsp; &nbsp; La modification est erroné 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php } ?>
      
      
      <div class="row">
         <div class="col-xl-7 d-flex">
            <div class="card flex-fill">
               <div class="card-header">
                  <h4 class="card-title">  &nbsp;&nbsp;&nbsp;&nbsp; Informations Personnels </h4>
               </div>
               <div class="card-body">
               <form class="form-validate" method='post' enctype="multipart/form-data">
               <input type="hidden" name="utilisateur[id]" value="<?=$utilisateur->id ?? ''?>">
                     <div class="form-group row">
                        <label style="color:#00c7e3" class="col-lg-2 col-form-label">  <B>Nom</B></label>
                        <div class="col-lg-4">
                           <input type="text" class="form-control" name="utilisateur[nom]" value="<?=$utilisateur->nom ?? ''?>">
                           <small class="form-text text-muted">Nom de l'utilisateur</small>
                        </div>

                        <label style="color:#00c7e3" class="col-lg-2 col-form-label"><B>Prenom</B></label>
                        <div class="col-lg-4">
                           <input type="text" class="form-control" name="utilisateur[prenom]" value="<?=$utilisateur->prenom ?? ''?>">
                           <small class="form-text text-muted">Prenom de l'utilisateur</small>
                        </div>
                     </div>





                     <div class="form-group row">
                        <label style="color:#00dbfb" class="col-lg-3 col-form-label"> <B> Date de Naissance</B></label>
                        <div class="col-lg-4">
                           <input type="date" class="form-control" name="utilisateur[dateNaissance]" value="<?=$utilisateur->dateNaissance ?? ''?>">
                           <small class="form-text text-muted">Date de naissance</small>
                        </div>
                        <!--   <label style="color:#00dbfb" class="col-lg-3 col-form-label"> <B>t</B></label>
                        <div class="col-lg-3">
                           <input type="number" class="form-control" name="utilisateur[tel]" value="<?=$utilisateur->tel ?? ''?>">
                           <small class="form-text text-muted">telephone</small>
                        </div>-->
                     </div>
                     <div class="form-group row">
                         <label style="color:#00dbfb" class="col-lg-3 col-form-label"> <B>Numéro de téléphone</B></label>

                        <div class="col-lg-6">
                           <input type="number" class="form-control" min="0"  oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" name="utilisateur[tel]" value="<?=$utilisateur->tel ?? ''?>">
                           <small class="form-text text-muted">Numéro de téléphone</small>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label style="color:#00c7e3" class="col-lg-3 col-form-label"><B>Adresse</B></label>
                        <div class="col-lg-6">
                           <input type="text" class="form-control" name="utilisateur[adresse]" value="<?=$utilisateur->adresse ?? ''?>">
                           <small class="form-text text-muted">Adresse de l'utilisateur</small>
                        </div>
                     </div>




                     <div class="form-group row">
                        <label style="color:#00c7e3" class="col-lg-2 col-form-label">  <B>Email</B></label>
                        <div class="col-lg-4">
                           <input type="email" class="form-control" name="utilisateur[email]" value="<?=$utilisateur->email ?? ''?>">
                           <small class="form-text text-muted">Email de l'utilisateur</small>
                        </div>

                        <label style="color:#00c7e3" class="col-lg-2 col-form-label"><B>Login</B></label>
                        <div class="col-lg-4">
                           <input type="text" class="form-control" name="utilisateur[login]" value="<?=$utilisateur->login ?? ''?>">
                           <small class="form-text text-muted">Login de l'utilisateur</small>
                        </div>
                     </div>
                     <div class="text-end">
                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         
      </div>
     
   </div>
</div>