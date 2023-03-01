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
                            <a href="/patient/edit"><button class="btn btn-primary">CREATION</button></a>
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
                                <h5 class="card-title">Les patient</h5>
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
										<?php foreach ($patients as $patient):
												// if($user->id==$patient->iduser):
										?>
                                        <tr>
                                            <td><img src="/img_cat/<?=$patient->image?>" class="img-fluid" width="35" alt="patient"></td>
                                            <td><?=$patient->nom?></td>
                                            <td><?=$patient->prenom?></td>
                                            <td> 
												<div class="button-list">
													<a href="/patient/edit?id=<?=$patient->id?>" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
													<a href="/patient/delete?id=<?=$patient->id?>" onClick="return(confirm('Voulez-vous sur supprimer ce patient?'))" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
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