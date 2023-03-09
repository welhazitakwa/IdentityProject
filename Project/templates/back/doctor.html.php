

          <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col-md-12 d-flex justify-content-end">
                        <div class="doc-badge me-3">doctors <span class="ms-1"> <?=$count;?> </span></div>
                        <a href="/doctor/edit?idspc=<?= $_GET['idspc'];?>"  class="btn btn-primary btn-add"><i class="feather-plus-square me-1"></i> Ajouter nouveau</a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-header border-bottom-0">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h5 class="card-title">liste des docteurs dans la sepécialité :<?=$specialite->nom?> </h5>
                              </div>
                              <div class="col-auto d-flex flex-wrap">
                                 <div class="form-custom me-2">
                                    <div id="tableSearch" class="dataTables_wrapper" ></div>
                                 </div>
                                 <div class="SortBy">
                                    <div class="selectBoxes order-by">
                                       <p class="mb-0"><img src="/back/img/icon/sort.png" class="me-2" alt="icon"> Filter par </p>
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
                                           
                                          <th>experience</th>
                                          <th width="100">Action</th> 
                                          
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php foreach ($doctors as $doctor):
                                          if($_GET['idspc']==$doctor->idspc):
                                             // foreach ($utilisateurs-> as $utilisateur)
                                              //  if($utilisateur->id==$doctor->iduser):
                                      ?>
                                    <tr>
                                          <td><?=$doctor->id?></td>
                                          <td><?=$doctor->experience?></td>
                                          <td> 



 
                                                  <a href="/doctor/delete?id=<?=$doctor->id?>&idspc=<?= $_GET['idspc'];?>" onClick="return(confirm('Voulez-vous sur supprimer cette doctors?'))" class="text-danger"><i class="feather-trash-2 me-1"></i>Supprimer</a>
                                              </div>
                                          </td>


                                      
                                    </tr>

                                    <?php 
                                    endif;
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