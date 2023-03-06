








         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col-md-12 d-flex justify-content-end">
                        <div class="doc-badge me-3">Spécialités <span class="ms-1"><?php 
$i=0;
$somme=0;
foreach ($specialites as $specialite){ $i++; $somme=$i ;}
echo $somme ;
?></span></div>
                        <a href="/specialite/edit"  class="btn btn-primary btn-add"><i class="feather-plus-square me-1"></i> Add New</a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-header border-bottom-0">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h5 class="card-title">Spécialités</h5>
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
                                       <th>ID</th>
                                       <th>Spécialité</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php foreach ($specialites as $specialite):
                                              // if($user->id==$specialite->iduser):
                                      ?>
                                    <tr>

                                    <td><?=$specialite->id?></td>
                                          
                                        
                                          <td>
                                             <h2 class="table-avatar">
                                             <img src='/img_spc/<?=$specialite->image?>' class="spl-img"  >
                                          <span><?=$specialite->nom?></span>
                                              </h2>
                                       </td>

                                          <td> 
                                              <div class="actions">
                                                  <a href="/specialite/edit?id=<?=$specialite->id?>" class="text-black"><i class="feather-edit-3 me-1"></i>Modifier</a>
                                                  <a href="/specialite/delete?id=<?=$specialite->id?>" onClick="return(confirm('Voulez-vous sur supprimer cette specialites?'))" class="text-danger"><i class="feather-trash-2 me-1"></i>Supprimer</a>
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










