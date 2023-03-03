<!-- Start Breadcrumbbar -->                    


          <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col-md-12 d-flex justify-content-end">
                        <div class="doc-badge me-3">Specialities <span class="ms-1">48</span></div>
                        <a href="/abonnement/edit"  class="btn btn-primary btn-add"><i class="feather-plus-square me-1"></i> Add New</a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-header border-bottom-0">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h5 class="card-title">Abonnements</h5>
                              </div>
                              <div class="col-auto d-flex flex-wrap">
                                 <div class="form-custom me-2">
                                    <div id="tableSearch" class="dataTables_wrapper"></div>
                                 </div>
                                 <div class="SortBy">
                                    <div class="selectBoxes order-by">
                                       <p class="mb-0"><img src="/back/img/icon/sort.png" class="me-2" alt="icon"> Order by </p>
                                       <span class="down-icon"><i class="feather-chevron-down"></i></span>
                                    </div>
                                    <div id="checkBox">
                                       <form action="https://doccure.dreamguystech.com/html/template/admin/specialities.html">
                                          <p class="lab-title">Order By </p>
                                          <label class="custom_radio w-100">
                                          <input type="radio" name="order">
                                          <span class="checkmark"></span> ID
                                          </label>
                                          <label class="custom_radio w-100 mb-4">
                                          <input type="radio" name="order">
                                          <span class="checkmark"></span> Date Modified
                                          </label>
                                          <p class="lab-title">Sort By</p>
                                          <label class="custom_radio w-100">
                                          <input type="radio" name="sort">
                                          <span class="checkmark"></span> Ascending
                                          </label>
                                          <label class="custom_radio w-100 mb-4">
                                          <input type="radio" name="sort">
                                          <span class="checkmark"></span> Descending
                                          </label>
                                          <button type="submit" class="btn w-100 btn-primary">Apply</button>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body p-0">
                           <div class="table-responsive">
                              <table class="datatable table table-borderless hover-table" id="data-table">
                                 <thead class="thead-light">
                                    <tr>
                                          <th>Titre</th>
                                          <th>Avantages</th>
                                          <th>Prix</th>
                                          <th>Durée</th>
                                          <th>Action</th>
                                          
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php foreach ($abonnements as $abonnement):
                                              // if($user->id==$abonnement->iduser):
                                      ?>
                                    <tr>

                                    <td><?=$abonnement->titre?></td>
                                          <td><?=$abonnement->avantages?></td>
                                          <td><?=$abonnement->prix?></td>
                                          <td><?=$abonnement->duree?></td>
                                          
                                          <td> 
                                              <div class="actions">
                                                  <a href="/abonnement/edit?id=<?=$abonnement->id?>" class="text-black"><i class="feather-edit-3 me-1"></i>Modifier</a>
                                                  <a href="/abonnement/delete?id=<?=$abonnement->id?>" onClick="return(confirm('Voulez-vous sur supprimer cette abonnements?'))" class="text-danger"><i class="feather-trash-2 me-1"></i>Supprimer</a>
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
                     <div id="tablepagination" class="dataTables_wrapper"></div>
                  </div>
               </div>
            </div>
         </div>