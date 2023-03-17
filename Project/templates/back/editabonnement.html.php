<div class="page-wrapper">
<div class="content container-fluid">
   <div class="page-header">
      <div class="row">
         <div class="col-sm-12">
            <h3 class="page-title">Abonnement</h3>
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
                           <input type="hidden" name="abonnement[id]" value="<?=$abonnement->id ?? ''?>">
                           <div class="form-row row">
                              <div class="col-md-4 mb-3" style="margin-right: 85px;">
                                 <label for="validationCustom01">Titre</label>
                                 <input type="text" class="form-control" id="validationCustom01" name="abonnement[titre]" value="<?=$abonnement->titre ?? ''?>" placeholder="Enter title" required>
                                 <div class="invalid-feedback">
                                    Vous devez saisir le titre.
                                 </div>
                              </div>

                              <div class="col-md-3 mb-3" style="margin-right: 85px;">
                                 <label for="validationCustom04">Prix</label>
                                 <input type="number" class="form-control" id="validationCustom04" name="abonnement[prix]" value="<?=$abonnement->prix ?? ''?>" placeholder="Enter prix" required>
                                 <div class="invalid-feedback">
                                    Vous devez saisir le prix.
                                 </div>
                              </div>


                              <div class="col-md-3 mb-3">
                                 <label for="validationCustom04">Durée</label>
                                 <input type="text" class="form-control" id="validationCustom04" name="abonnement[duree]" value="<?=$abonnement->duree ?? ''?>" placeholder="Enter Durée" required>
                                 <div class="invalid-feedback">
                                    Vous devez saisir la durée.
                                 </div>
                              </div>
                              



                              
                           </div>
                           <div class="form-row row">
                              <div class="mb-3">
                                 <label for="validationCustom03">Avantages</label>
                                 <textarea  class="form-control" id="validationCustom03"  rows="3"  name="abonnement[avantages]" rows="5" placeholder="Entrez vos Avantages." required><?=$abonnement->avantages ?? ''?></textarea>
                                 <div class="invalid-feedback">
                                    Vous devez saisir les avantages.
                                 </div>
                              </div>



                              
                           </div>
                           
                           <div class="text-end" style="margin-top: 15px;">
                        <button type="submit" class="btn btn-primary" style="margin-right: 5px;">Enregistrer </button>
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


