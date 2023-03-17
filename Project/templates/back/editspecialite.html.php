

<div class="page-wrapper">
<div class="content container-fluid">
   <div class="page-header">
      <div class="row">
         <div class="col-sm-12">
            <h3 class="page-title">Spécialité</h3>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <div class="card-body">
                  <div class="row">
                     <div class="col-sm">
                        <form class="needs-validation" novalidate method='post' enctype="multipart/form-data">
                           <input type="hidden" name="specialite[id]" value="<?=$specialite->id ?? ''?>">
                           <div class="form-row row">
                              <div class="col-md-5 mb-3">
                                 <label for="validationCustom01">Nom de spécialité</label>
                                 <input type="text" class="form-control" id="validationCustom01" name="specialite[nom]" value="<?=$specialite->nom ?? ''?>" placeholder="Enter nom de spécialité" required>
                                 <div class="invalid-feedback">
                                    Vous devez saisir le nom de spécialité.
                                 </div>
                              </div>

                              <div class="col-md-5 mb-3" style="margin-right: 20px;">
                                 <label for="validationCustom04" for="val-suggestions">Image</label>
                                 <input type="file" class="form-control" id="validationCustom04" id="fileToUpload" name="fileToUpload" 
                                            accept="image/gif, image/jpeg, image/jpg, image/png" >
                                 <div class="invalid-feedback">
                                    Vous devez saisir le prix.
                                 </div>
                              </div>

</div>
                             
                              



                              
                           <div class="text-end" style="margin-top: 15px;">
                           
                           <button class="btn btn-primary" type="submit">Sauvegarder</button>
                           <button class="btn btn-secondary" type="reset" style="margin-right:6px;">Annuler</button>
</div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>




































