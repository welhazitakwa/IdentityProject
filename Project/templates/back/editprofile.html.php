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
         <div class="col-xl-6 d-flex">
            <div class="card flex-fill">
               <div class="card-header">
                  <h4 class="card-title">Basic Form</h4>
               </div>
               <div class="card-body">
               <form class="form-validate" method='post' enctype="multipart/form-data">
               <input type="hidden" name="utilisateur[id]" value="<?=$utilisateur->id ?? ''?>">
                     <div class="form-group row">
                        <label class="col-lg-3 col-form-label">First Name</label>
                        <div class="col-lg-9">
                           <input type="text" class="form-control" name="utilisateur[nom]" value="<?=$utilisateur->nom ?? ''?>">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Last Name</label>
                        <div class="col-lg-9">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Email Address</label>
                        <div class="col-lg-9">
                           <input type="email" class="form-control">
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