  <!-- Start Breadcrumbbar -->                    
  <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Form Validations</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Validations</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <button class="btn btn-primary">Add Widget</button>
                        </div>                        
                    </div>
                </div>          
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">
              
                <!-- Start row -->
                <div class="row justify-content-center">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Form Validation</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle">Basic form validation.</h6>
                                <form class="form-validate" method='post' enctype="multipart/form-data">
								<input type="hidden" name="produit[id]" value="<?=$produit->id ?? ''?>">
								<input type="hidden" name="produit[iduser]" value="<?=$user->id?>">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-username">Titre <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="produit[titre]" value="<?=$produit->titre ?? ''?>" placeholder="Enter title"  required>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-suggestions">Description <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" name="produit[desc]"  rows="5" placeholder="Enter Your Details." required><?=$produit->desc ?? ''?></textarea>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-username">Prix <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control" name="produit[prix]" value="<?=$produit->prix ?? ''?>" placeholder="Enter title"  required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-username">Color <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="produit[color]" value="<?=$produit->color ?? ''?>" placeholder="Enter title"  required>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"></label>
                                        <div class="col-lg-8">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>                                  
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Contentbar -->