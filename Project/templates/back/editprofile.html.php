<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col-sm-12">
               <h3 class="page-title">Horizontal Form</h3>
            </div>
         </div>
      </div>
      <?php 
      if(isset($_GET['msg'])):
         echo 'weldhram enta';
      endif;
      ?>
      <div class="row">
         <div class="col-xl-7 d-flex">
            <div class="card flex-fill">
               <div class="card-header">
                  <h4 class="card-title">Basic Form</h4>
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

                        <div class="col-lg-4">
                           <input type="number" class="form-control" min="0"  oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" name="utilisateur[tel]" value="<?=$utilisateur->tel ?? ''?>">
                           <small class="form-text text-muted">Numéro de téléphone</small>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Username</label>
                        <div class="col-lg-9">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Password</label>
                        <div class="col-lg-9">
                           <input type="password" class="form-control">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Repeat Password</label>
                        <div class="col-lg-9">
                           <input type="password" class="form-control">
                        </div>
                     </div>
                     <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         
      </div>
     
   </div>
</div>