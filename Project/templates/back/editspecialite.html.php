





<div class="page-wrapper">
<div class="content container-fluid">
   <div class="row">
      <div class="col-md-12">
         <h5 class="mb-3">Add specialites</h5>
         <div class="row">
            <div class="col-md-6">
                <form class="form-validate" method='post' enctype="multipart/form-data">
                <input type="hidden" name="specialite[id]" value="<?=$specialite->id ?? ''?>">
               <div class="form-group form-focus">
                  <input type="text" class="form-control floating" name="specialite[nom]" value="<?=$specialite->nom ?? ''?>" placeholder="Enter nom de specialite" required>
                  <label class="focus-label">Nom de specialite <span class="text-danger">*</span></label>
               </div>


               <div class="form-group row">
                <label class="col-lg-3 col-form-label" for="val-suggestions">Image <span class="text-danger">*</span></label>
                <div class="col-lg-6">
                <input type="file" class="form-control" id="fileToUpload" name="specialite[image]" value="<?=$specialite->image ?? ''?>" placeholder="Enter nom de specialite" required />
            </div>
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