         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col-md-12 d-flex justify-content-end">
                        <div class="doc-badge me-3">Nombre des rendez_vous <span class="ms-1"> <?=$count;?> </span></div>
                        <!--<a href="/appointment/edit?idspc=<?= $_GET['idspc'];?>"  class="btn btn-primary btn-add"><i class="feather-plus-square me-1"></i> Ajouter nouveau</a>-->
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-header border-bottom-0">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h5 class="card-title">Liste des rendez_vous </h5>
                              </div>
                              <div class="col-auto d-flex flex-wrap">
                                 <div class="form-custom me-2">
                                    <div id="tableSearch" class="dataTables_wrapper" ></div>
                                 </div>
                             
                              </div>
                           </div>
                        </div>
                        <div class="card-body p-0">
                           <div class="table-responsive">
                              <table class="datatable table table-borderless hover-table" id="data-table">
                                 <thead class="thead-light">
                                    <tr>   
                                          <th>Patient</th>
                                          <th>Docteur</th>
                                          <th>Maladie</th>
                                          <th>Date & Heure</th>
                                          <!-- <th width="100">Prix</th>  -->
                                          
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php foreach ($appointments as $appointment):
                                          //if($_GET['idspc']==$appointment->idspc):
                                        foreach ($utilisateurs as $utilisateur):
                                        if($utilisateur->id==$appointment->idPa):
                                         //foreach ($doctors as $doctor):
                                          foreach ($utilisateurs as $util):
                                           if($util->id==$appointment->idDoc):
                                      ?>
                                    <tr>
<td>
                                          <h2 class="table-avatar">
                <a class="avatar-pos" href="#" data-bs-target="#doctorlist" data-bs-toggle="modal">
                 <img class="avatar avatar-img" src="<?=$utilisateur->avatar?>" alt="Image non disponible"></a>
                <a href="#" data-bs-target="#appointmentlist" data-bs-toggle="modal" class="user-name"><?=$utilisateur->nom?> <?=$utilisateur->prenom?></span> <span class="text-muted"><?=$utilisateur->genre?>, <?php

            $dateNaissance = $utilisateur->dateNaissance ;
            $aujourdhui = date("Y-m-d");
            $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
            echo $diff->format('%y');
?> Years Old</span></a>
                </h2>
                                          
                                          </td>
                                          
<td>
                                           
                                          <h2 class="table-avatar">
                <a class="avatar-pos" href="#" data-bs-target="#doctorlist" data-bs-toggle="modal">
                 <img class="avatar avatar-img" src="<?=$util->avatar?>" alt="Image non disponible"></a>
                <a href="#" data-bs-target="#doctorlist" data-bs-toggle="modal" class="user-name">Dr. <?=$util->nom?> <?=$util->prenom?></a>
                </h2>
                                          
                                          </td>






                                          <td><?=$appointment->maladie?></td>
                                          <td><?=$appointment->dateRendezVous?></td>
                                          <!-- <td> 



 
                                                 <!-- <a href="/appointment/delete?id=<?=$appointment->id?>" onClick="return(confirm('Voulez-vous sur supprimer cette appointments?'))" class="text-danger"><i class="feather-trash-2 me-1"></i>Supprimer</a>-->

                                            <!--     <?=$appointment->prix?>
                                              </div>
                                          </td>
 -->

                                      
                                    </tr>

                                    <?php 
                                    endif;
                                 endforeach;
                                //endforeach;
                              endif;
                           endforeach;
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