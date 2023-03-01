<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
              <div class="row align-items-center">
                  <div class="col-md-8 col-lg-8">
                      <h4 class="page-title">Datatable</h4>
                      <div class="breadcrumb-list">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item"><a href="#">Tables</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Datatable</li>
                          </ol>
                      </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                      <div class="widgetbar">
                          <a href="/abonnement/edit"><button class="btn btn-primary">CREATION</button></a>
                      </div>                        
                  </div>
              </div>          
          </div>
          <!-- End Breadcrumbbar -->
          <!-- Start Contentbar -->    
          <div class="contentbar">                
              <!-- Start row -->
              <div class="row">
               
                  <!-- Start col -->
                  <div class="col-lg-12">
                      <div class="card m-b-30">
                          <div class="card-header">
                              <h5 class="card-title">Les abonnements</h5>
                          </div>
                          <div class="card-body">
                              <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6>
                              <div class="table-responsive">
                                  <table id="datatable-buttons" class="table table-striped table-bordered">
                                      <thead>
                                      <tr>
                                          <th width='15%'>Image</th>
                                          <th>Titre</th>
                                          <th>Description</th>
                                          <th width='15%'>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php foreach ($abonnements as $abonnement):
                                              // if($user->id==$abonnement->iduser):
                                      ?>
                                      <tr>
                                          <td><img src="/img_cat/<?=$abonnement->image?>" class="img-fluid" width="35" alt="abonnement"></td>
                                          <td><?=$abonnement->titre?></td>
                                          <td><?=$abonnement->desc?></td>
                                          <td> 
                                              <div class="button-list">
                                                  <a href="/abonnement/edit?id=<?=$abonnement->id?>" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                                  <a href="/abonnement/delete?id=<?=$abonnement->id?>" onClick="return(confirm('Voulez-vous sur supprimer cette abonnements?'))" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                              </div>
                                          </td>
                                      </tr>
                                      <?php 
                                      // endif;
                                  endforeach; 
                                  ?>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End col -->
              </div>
              <!-- End row -->
          </div>
          <!-- End Contentbar -->