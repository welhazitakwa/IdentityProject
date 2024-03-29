

          <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col-md-12 d-flex justify-content-end">
                        <div class="doc-badge me-3">Nombre des docteurs<span class="ms-1"> <?=$count;?> </span></div>
                       <!-- <a href="/doctor/edit?idspc=<?= $_GET['idspc'];?>"  class="btn btn-primary btn-add"><i class="feather-plus-square me-1"></i> Ajouter nouveau</a>-->
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-header border-bottom-0">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h5 class="card-title">Liste des docteurs </h5>
                              </div>
                              <div class="col-auto d-flex flex-wrap">
                                 <div class="form-custom me-2">
                                    <div id="tableSearch" class="dataTables_wrapper" ></div>
                                 </div>
                                 <!-- <div class="SortBy">
                                    <div class="selectBoxes order-by">
                                       <p class="mb-0"><img src="/back/img/icon/sort.png" class="me-2" alt="icon"> Filter par </p>
                                       <span class="down-icon"><i class="feather-chevron-down"></i></span>
                                    </div>
                                    <div id="checkBox">
                                       <form action="#">
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
                                 </div> -->
                              </div>
                           </div>
                        </div>
                        <div class="card-body p-0">
                           <div class="table-responsive">
                              <table class="datatable table table-borderless hover-table" id="data-table">
                                 <thead class="thead-light">
                                    <tr>  
                                          
                                          <th>Nom</th>
                                          <th>Spécialité</th>
                                          <th>Membre Depuis</th>
                                          <th style="width:15%%">Action</th>
                                          <th style="width:5%">Status de compte</th> 
                                          
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php 
                                 foreach ($doctors as $doctor):
                                          //if($_GET['idspc']==$doctor->idspc):
                                              foreach ($utilisateurs as $utilisateur):
                                               if($utilisateur->id==$doctor->iduser):
                                      ?>
                                    <tr>
                                          
                                          <td>
                                           
                                          <h2 class="table-avatar">
                <a class="avatar-pos" href="#" data-bs-target="#doctorlist" data-bs-toggle="modal">
                 <img class="avatar avatar-img" src="<?=$utilisateur->avatar?>" alt="Image non disponible"></a>
                <a href="#" data-bs-target="#doctorlist" data-bs-toggle="modal" class="user-name">Dr. <?=$utilisateur->nom?>  <?=$utilisateur->prenom?></a>
                </h2>
                                          
                                          </td>
                                          <td> <?php 
                                            foreach ($specialites as $specialite):
                                          if($doctor->idspc==$specialite->id):
                                          
                                             ?>
                                             <h2 class="table-avatar">
                                              <a class="avatar-pos" href="#" data-bs-target="#doctorlist" data-bs-toggle="modal">
                 <img class="avatar avatar-img" src="/img_spc/<?=$specialite->image?>" alt="Image non disponible"></a>
                  <a href="#"  class="user-name"> <?=$specialite->nom?></a>
                </h2>
                                         
                                         <?php endif;
                                         endforeach ;?>
                                         </td>
                                         
                                          <td><span class="user-name">
                                          <?php $var = $utilisateur->createdAt;
                                        echo date("d/m/Y", strtotime($var) ); ?>
                                          <!-- </span><span class="d-block"><?=$utilisateur->date_ins ?></span></td>-->
                                          <td> 



 
                                                  <a href="/doctor/delete?id=<?=$doctor->id?>" onClick="return(confirm('Voulez-vous supprimer ce médecin?'))" class="text-danger"><i class="feather-trash-2 me-1"></i>Supprimer</a>
                                              </div>
                                          </td>

                     <td>




  <?php if ($utilisateur->etat==0){ ?>
            <a href="/utilisateur/bloquer?id=<?=$utilisateur->id?>&etat=1" class="text-success"><i class="bi bi-person-check-fill text-success"></i>&nbsp;Débloqué</a>
                                                <?php } else { ?>
            <a href="/utilisateur/bloquer?id=<?=$utilisateur->id?>&etat=0" class="text-secondary"><i  class="bi bi-person-x-fill text-secondary"></i>&nbsp;bloqué</a>
                                                <?php }?>





     <!--                
<label class="toggle-switch" >


<input type="checkbox" class="toggle-switch-input" >

<span class="toggle-switch-label">
<span class="toggle-switch-indicator"></span>
</span>
</label>-->
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