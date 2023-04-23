



         <div class="page-wrapper">
   <div class="content container-fluid">
      <div class="row">
         <div class="col-md-9">
            <ul class="list-links mb-4">
               <li class="active"><a href="active-blog.html">Active Blog</a></li>
               <li><a href="pending-blog.html">Pending Blog</a></li>
            </ul>
         </div>
         <div class="col-md-3 text-md-end">
            <a href="add-blog.html" class="btn btn-primary btn-blog mb-3">Add Blog</a>
         </div>
      </div>










 <?php foreach ($blogs as $blog):
                                              // if($user->id==$abonnement->iduser):
                                      ?>

      <div class="row">
   <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
      <div class="blog grid-blog flex-fill">
         <div class="blog-image">
            <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-01.jpg" alt="Post Image"></a>
            <div class="fav-btn">
               <img src="assets/img/icon/eye-icon.png" alt="icon"> 225
            </div>
         </div>
         <div class="blog-content">
            <ul class="entry-meta meta-item">
               <li>
                  <div class="post-author">
                     <a href="profile.html">
                     <img src="assets/img/profiles/avatar-02.jpg" alt="Post Author">
                     <span>
                     <span class="post-title">Dr. Ruby Perrin</span>
                     <span class="post-date"><i class="far fa-clock"></i> 4 Dec 2022</span>
                     </span>
                     </a>
                  </div>
               </li>
            </ul>
            <h3 class="blog-title"><a href="blog-details.html">Doccure – Making your clinic painless visit?</a></h3>
            <p><?= $blog->titre ?></p>
         </div>
         <div class="row">
            <div class="col"><a href="edit-blog.html" class="text-success"><i class="feather-edit-3 me-1"></i> Edit</a></div>
            <div class="col text-end">
               <a href="javascript:void(0);" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteNotConfirmModal"><i class="feather-eye-off me-1"></i> Inactive</a>
            </div>
         </div>
      </div>
   </div>
</div>

<?php endforeach ?>

</div>


      





































      
      
   </div>
</div>