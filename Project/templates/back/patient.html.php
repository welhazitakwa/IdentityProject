

          <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col-md-12 d-flex justify-content-end">
                        <div class="doc-badge me-3">patients <span class="ms-1"> <?=$count;?> </span></div>
                        <!--<a href="/patient/edit?idspc=<?= $_GET['idspc'];?>"  class="btn btn-primary btn-add"><i class="feather-plus-square me-1"></i> Ajouter nouveau</a>-->
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-header border-bottom-0">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h5 class="card-title">Patients </h5>
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
                                          
                                          <th>Patient</th>
                                          <th>profession</th>
                                          <th width="100">Action</th> 
                                          
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php foreach ($patients as $patient):
                                          //if($_GET['idspc']==$patient->idspc):
                                        foreach ($utilisateurs as $utilisateur):
                                        if($utilisateur->id==$patient->iduserP):
                                      ?>
                                    <tr>
                                          <td><?=$patient->id?></td>



<td>
                                           
                                          <h2 class="table-avatar">
                <a class="avatar-pos" href="#" data-bs-target="#doctorlist" data-bs-toggle="modal">
                 <img class="avatar avatar-img" src="/img_utilisateurs/<?=$utilisateur->avatar?>" alt="Image non disponible"></a>
                <a href="#" data-bs-target="#patientlist" data-bs-toggle="modal" class="user-name"><?=$utilisateur->nom?><?=$utilisateur->prenom?></span> <span class="text-muted"><?=$utilisateur->genre?>, <?php

            $dateNaissance = $user->dateNaissance ;
            $aujourdhui = date("Y-m-d");
            $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
            echo $diff->format('%y');
?> Years Old</span></a>
                </h2>
                                          
                                          </td>
                                          <td><?=$patient->profession?></td>
                                          <td> 



 
                                                  <a href="/patient/delete?id=<?=$patient->id?>" onClick="return(confirm('Voulez-vous sur supprimer cette patients?'))" class="text-danger"><i class="feather-trash-2 me-1"></i>Supprimer</a>
                                              </div>
                                          </td>


                                      
                                    </tr>

                                    <?php 
                                    endif;
                                 endforeach;
                              //endif;
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