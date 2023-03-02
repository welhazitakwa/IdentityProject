            <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <h5 class="mb-3">Add Abonnements</h5>
                     <div class="row">
                        <div class="col-md-6">
                            <form class="form-validate" method='post' enctype="multipart/form-data">
                            <input type="hidden" name="abonnement[id]" value="<?=$abonnement->id ?? ''?>">
                           <div class="form-group form-focus">
                              <input type="text" class="form-control floating" name="abonnement[titre]" value="<?=$abonnement->titre ?? ''?>" placeholder="Enter title"  required>
                              <label class="focus-label">Titre <span class="text-danger">*</span></label>
                           </div>

                           <div class="col-md-6">
                           <div class="form-group form-focus">
                              <input type="number" class="form-control floating" name="abonnement[prix]" value="<?=$abonnement->prix ?? ''?>" placeholder="Enter prix"  required>
                              <label class="focus-label">Prix <span class="text-danger">*</span></label>
                           </div>

                           <div class="col-md-6">
                           <div class="form-group form-focus">
                              <input type="text" class="form-control floating" name="abonnement[duree]" value="<?=$abonnement->duree ?? ''?>" placeholder="Enter Durée"  required>
                              <label class="focus-label">Durée <span class="text-danger">*</span></label>
                           </div>
                          
                           
                           <div class="form-group form-focus">
                              <textarea rows="4" class="form-control bg-grey floating" name="abonnement[avantages]" rows="5" placeholder="Enter Your Avantages." required><?=$abonnement->avantages ?? ''?></textarea>
                              <label class="focus-label">Avantages <span class="text-danger">*</span></label>
                           </div>
                          
                           <div id="videoId" style="display: none">
                              <div class="form-group form-focus">
                                 <input type="text" class="form-control floating">
                                 <label class="focus-label">Video ID <span class="text-danger">*</span></label>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary save-btn">save</button>
</form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>