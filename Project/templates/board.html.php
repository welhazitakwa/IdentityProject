<div class="page-wrapper">
            <div class="content container-fluid pb-0">
               <h4 class="mb-3"></h4>
               <div class="row">
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="dash-widget-header">
                              <span class="dash-widget-icon bg-primary">
                              <i class="feather-user-plus"></i>
                              </span>
                              <div class="dash-count">
                                 <h5 class="dash-title">Médecins</h5>
                                 <div class="dash-counts">
                                    <p><?=$doctors;?></p>
                                 </div>
                              </div>
                           </div>
                           <!-- <p class="trade-level mb-0"><span class="text-danger me-1"><i class="fas fa-caret-down me-1"></i>1.15%</span> last week</p> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="dash-widget-header">
                              <span class="dash-widget-icon bg-blue">
                              <i class="feather-users"></i>
                              </span>
                              <div class="dash-count">
                                 <h5 class="dash-title">Patients</h5>
                                 <div class="dash-counts">
                                    <p><?=$patients;?></p>
                                 </div>
                              </div>
                           </div>
                           <!-- <p class="trade-level mb-0"><span class="text-success me-1"><i class="fas fa-caret-up me-1"></i>4.5%</span> last week</p> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="dash-widget-header">
                              <span class="dash-widget-icon bg-warning">
                              <img src="/back/img/icon/calendar.png" alt="User Image">
                              </span>
                              <div class="dash-count">
                                 <h5 class="dash-title">Rendez-vous</h5>
                                 <div class="dash-counts">
                                    <p><?=$appointments;?></p>
                                 </div>
                              </div>
                           </div>
                           <!-- <p class="trade-level mb-0"><span class="text-success me-1"><i class="fas fa-caret-up me-1"></i>9.65%</span> last week</p> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="dash-widget-header">
                              <span class="dash-widget-icon bg-danger">
                              <img src="/back/img/icon/chart.png" alt="User Image">
                              </span>
                              <div class="dash-count">
                                 <h5 class="dash-title">Specialités</h5>
                                 <div class="dash-counts">
                                    <p><?=$specialites;?></p>
                                 </div>
                              </div>
                           </div>
                           <!-- <p class="trade-level mb-0"><span class="text-danger me-1"><i class="fas fa-caret-up me-1"></i>40.5%</span> last week</p> -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- <div class="row">
                  <div class="col-xl-7 d-flex">
                     <div class="card flex-fill">
                        <div class="card-header">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h5 class="card-title">Appointments</h5>
                              </div>
                              <div class="col-auto d-flex">
                                 <select class="select">
                                    <option>2022</option>
                                    <option>2022</option>
                                 </select>
                                 <div class="ms-2">
                                    <select class="select">
                                       <option>Select Type</option>
                                       <option>Video</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div id="sales_chart"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-5 d-flex">
                     <div class="card flex-fill">
                        <div class="card-header">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h5 class="card-title">Income Report</h5>
                              </div>
                              <div class="col-auto d-flex">
                                 <select class="select">
                                    <option>Monthly</option>
                                    <option>Weekly</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="text-end w-100">
                              <div class="income-rev">Total Revenue : <span>$451254K</span></div>
                           </div>
                           <div id="income-report"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="section-heading">
                        <h5 class="mb-0">Today’s Appointment <span class="num-circle">12</span></h5>
                     </div>
                  </div>
                  <div class="col-md-6 text-end">
                     <div class="owl-nav slide-nav-3 text-end nav-control"></div>
                  </div>
                  <div class="col-md-12">
                     <hr class="mt-0">
                     <div class="owl-carousel appointment-slider owl-theme">
                        <div class="item">
                           <div class="appointment-item">
                              <div class="app-head">
                                 <p>Consultation ID : #4544478 </p>
                                 <div class="con-time">50 Min</div>
                              </div>
                              <div class="app-user">
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="app-img">
                                          <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                          <div class="app-name">
                                             <h6>Dr. Lester </h6>
                                             <p>Orthopaedics</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="app-img justify-content-sm-end">
                                          <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                          <div class="app-name">
                                             <h6>Chris Harris</h6>
                                             <p>ID : 781212, M</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="app-info">
                                 <div>
                                    <p>Today</p>
                                    <h6>08:00am - 08:50pm</h6>
                                 </div>
                                 <div>
                                    <p>Booked on</p>
                                    <h6 class="fw-normal">12/11/2022, 05:30PM</h6>
                                 </div>
                              </div>
                              <div class="app-footer">
                                 <div class="app-mode">
                                    <p>Mode of Consultation</p>
                                    <a href="#" class="mode-box text-danger"><i class="feather-video"></i></a>
                                 </div>
                                 <h6>$30.00K</h6>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="appointment-item">
                              <div class="app-head">
                                 <p>Consultation ID : #9789845 </p>
                                 <div class="con-time">20 Min</div>
                              </div>
                              <div class="app-user">
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="app-img">
                                          <img src="/back/img/profiles/avatar-06.jpg" alt="" class="img-fluid">
                                          <div class="app-name">
                                             <h6>Dr. Monroe</h6>
                                             <p>Hair Specialities</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="app-img justify-content-sm-end">
                                          <img src="/back/img/profiles/avatar-07.jpg" alt="" class="img-fluid">
                                          <div class="app-name">
                                             <h6>Bess Twishes</h6>
                                             <p>ID : 787787, M</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="app-info">
                                 <div>
                                    <p>Today</p>
                                    <h6>06:00pm - 06:20pm</h6>
                                 </div>
                                 <div>
                                    <p>Booked on</p>
                                    <h6 class="fw-normal">06/11/2022, 04:30PM</h6>
                                 </div>
                              </div>
                              <div class="app-footer">
                                 <div class="app-mode">
                                    <p>Mode of Consultation</p>
                                    <a href="#" class="mode-box text-yellow"><i class="feather-mic"></i></a>
                                 </div>
                                 <h6>$30.00K</h6>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="appointment-item">
                              <div class="app-head">
                                 <p>Consultation ID : #9795754</p>
                                 <div class="con-time">40 Min</div>
                              </div>
                              <div class="app-user">
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="app-img">
                                          <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                          <div class="app-name">
                                             <h6>Dr. Clint </h6>
                                             <p>Neurology</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="app-img justify-content-sm-end">
                                          <img src="/back/img/profiles/avatar-08.jpg" alt="" class="img-fluid">
                                          <div class="app-name">
                                             <h6>James Aaron</h6>
                                             <p>ID : 781212, M</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="app-info">
                                 <div>
                                    <p>Today</p>
                                    <h6>12:00pm - 12:40pm</h6>
                                 </div>
                                 <div>
                                    <p>Booked on</p>
                                    <h6 class="fw-normal">12/11/2022, 04:30PM</h6>
                                 </div>
                              </div>
                              <div class="app-footer">
                                 <div class="app-mode">
                                    <p>Mode of Consultation</p>
                                    <a href="#" class="mode-box text-primary"><i class="feather-message-square"></i></a>
                                 </div>
                                 <h6>$30.00K</h6>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="appointment-item">
                              <div class="app-head">
                                 <p>Consultation ID : #4544478 </p>
                                 <div class="con-time">50 Min</div>
                              </div>
                              <div class="app-user">
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="app-img">
                                          <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                          <div class="app-name">
                                             <h6>Dr. Lester </h6>
                                             <p>Orthopaedics</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="app-img justify-content-sm-end">
                                          <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                          <div class="app-name">
                                             <h6>Chris Harris</h6>
                                             <p>ID : 781212, M</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="app-info">
                                 <div>
                                    <p>Today</p>
                                    <h6>08:00am - 08:50pm</h6>
                                 </div>
                                 <div>
                                    <p>Booked on</p>
                                    <h6 class="fw-normal">12/11/2022, 05:30PM</h6>
                                 </div>
                              </div>
                              <div class="app-footer">
                                 <div class="app-mode">
                                    <p>Mode of Consultation</p>
                                    <a href="#" class="mode-box text-danger"><i class="feather-video"></i></a>
                                 </div>
                                 <h6>$30.00K</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
               <div class="row">
                  <div class="col-lg-8">
                     <div class="card">
                        <div class="card-header border-bottom-0">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h5 class="card-title">Recent Patient Activity</h5>
                              </div>
                              <div class="col-auto d-flex">
                                 <div class="bookingrange btn btn-white btn-sm">
                                    <div class="cal-ico">
                                       <span>Select Date</span>
                                       <i class="feather-chevron-down ms-1"></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body p-0">
                           <div class="table-responsive">
                              <table class="table table-borderless hover-table">
                                 <thead class="thead-light">
                                    <tr>
                                       <th>ID</th>
                                       <th>Patient</th>
                                       <th>Disease</th>
                                       <th>Member since </th>
                                       <th>Status</th>
                                       <th class="text-right"></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>#4546</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="profile.html"><img class="avatar avatar-img" src="/back/img/profiles/avatar-07.jpg" alt="User Image"></a>
                                             <a href="#" class="user-name">Bess Twishes <span class="text-muted">Male, 40 Years Old</span></a>
                                          </h2>
                                       </td>
                                       <td><span class="disease-name">Allergies & Asthma</span></td>
                                       <td>
                                          <span class="text-yellow user-name">New Patient</span>
                                          <span class="d-block">23 Nov 2020</span>
                                       </td>
                                       <td><span class="badge bg-badge-grey text-success"><i class="fas fa-circle me-1"></i> Enabled</span></td>
                                       <td class="text-right">
                                          <i class="feather-chevron-right"></i>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#8774</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="profile.html"><img class="avatar avatar-img" src="/back/img/profiles/avatar-04.jpg" alt="User Image"></a>
                                             <a href="#" class="user-name">Bess Twishes <span class="text-muted">Female,30 Years Old</span></a>
                                          </h2>
                                       </td>
                                       <td><span class="disease-name">Sleep Problem</span></td>
                                       <td>
                                          <span class="text-danger user-name">Old Patient</span>
                                          <span class="d-block">23 Nov 2020</span>
                                       </td>
                                       <td><span class="badge bg-badge-grey text-danger"><i class="fas fa-circle me-1"></i> Disabled</span></td>
                                       <td class="text-right">
                                          <i class="feather-chevron-right"></i>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#4546</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="profile.html"><img class="avatar avatar-img" src="/back/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                             <a href="#" class="user-name">Abdul Aziz Lazis <span class="text-muted">Male, 25 Years Old</span></a>
                                          </h2>
                                       </td>
                                       <td><span class="disease-name">Tooth Pain</span></td>
                                       <td>
                                          <span class="text-danger user-name">Old Patient</span>
                                          <span class="d-block">23 Nov 2020</span>
                                       </td>
                                       <td><span class="badge bg-badge-grey text-success"><i class="fas fa-circle me-1"></i> Enabled</span></td>
                                       <td class="text-right">
                                          <i class="feather-chevron-right"></i>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#4546</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="profile.html"><img class="avatar avatar-img" src="/back/img/profiles/avatar-05.jpg" alt="User Image"></a>
                                             <a href="#" class="user-name">Alex Siauw <span class="text-muted">Male, 29 Years Old</span></a>
                                          </h2>
                                       </td>
                                       <td><span class="disease-name">Pain on knee</span></td>
                                       <td>
                                          <span class="text-yellow user-name">New Patient</span>
                                          <span class="d-block">23 Nov 2020</span>
                                       </td>
                                       <td><span class="badge bg-badge-grey text-success"><i class="fas fa-circle me-1"></i> Enabled</span></td>
                                       <td class="text-right">
                                          <i class="feather-chevron-right"></i>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="card">
                        <div class="card-header">
                           <div class="row">
                              <div class="col">
                                 <h5 class="card-title">Top Doctors</h5>
                              </div>
                           </div>
                        </div>
                        <div class="card-body p-0">
                           <div class="table-responsive">
                              <table class="table doc-table">
                                 <tbody>
                                    <tr>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a class="avatar-pos avatar-online" href="profile.html"><img class="avatar avatar-img" src="/back/img/profiles/avatar-05.jpg" alt="User Image"></a>
                                             <a href="#" class="user-name"><span class="text-muted">Dr. Rayan</span> <span class="tab-subtext">Gyanoclogist</span></a>
                                          </h2>
                                       </td>
                                       <td><span class="table-rating"><i class="fas fa-star me-2"></i> 4.5</span></td>
                                       <td class="text-right"><span class="text-muted">200 Patients</span></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a class="avatar-pos avatar-online" href="profile.html"><img class="avatar avatar-img" src="/back/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                             <a href="#" class="user-name"><span class="text-muted">Dr. Bea</span> <span class="tab-subtext">Dentist</span></a>
                                          </h2>
                                       </td>
                                       <td><span class="table-rating"><i class="fas fa-star me-2"></i> 4.9</span></td>
                                       <td class="text-right"><span class="text-muted">180 Patients</span></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a class="avatar-pos avatar-offline" href="profile.html"><img class="avatar avatar-img" src="/back/img/profiles/avatar-11.jpg" alt="User Image"></a>
                                             <a href="#" class="user-name"><span class="text-muted">Dr. Monroe</span> <span class="tab-subtext">Hair Specialities</span></a>
                                          </h2>
                                       </td>
                                       <td><span class="table-rating"><i class="fas fa-star me-2"></i> 4.8</span></td>
                                       <td class="text-right"><span class="text-muted">160 Patients</span></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a class="avatar-pos avatar-offline" href="profile.html"><img class="avatar avatar-img" src="/back/img/profiles/avatar-13.jpg" alt="User Image"></a>
                                             <a href="#" class="user-name"><span class="text-muted">Dr. Lester</span> <span class="tab-subtext">Orthopaedics</span></a>
                                          </h2>
                                       </td>
                                       <td><span class="table-rating"><i class="fas fa-star me-2"></i> 4.7</span></td>
                                       <td class="text-right"><span class="text-muted">140 Patients</span></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a class="empty-user" href="profile.html"><i class="feather-user"></i> </a>
                                             <a href="#" class="user-name"><span class="text-muted">Dr. Clint</span> <span class="tab-subtext">Neurology</span></a>
                                          </h2>
                                       </td>
                                       <td><span class="table-rating"><i class="fas fa-star me-2"></i> 4.6</span></td>
                                       <td class="text-right"><span class="text-muted">120 Patients</span></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <!-- <div class="col-xl-4 col-md-6">
                     <div class="card">
                        <div class="card-header">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h5 class="card-title">Popular by Speciality </h5>
                              </div>
                              <div class="col-auto">
                                 <select class="select">
                                    <option>This Week</option>
                                    <option>This Month</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="card-body p-0">
                           <div class="table-responsive">
                              <table class="table table-borderless">
                                 <tbody>
                                    <tr class="speciality-item">
                                       <td class="spl-name">
                                          <div class="spl-box">
                                             <img src="/back/img/icon/urology.png" alt="User Image">
                                          </div>
                                          <div class="spl-count">
                                             <h6>Urology</h6>
                                             <p>Patients : 400</p>
                                          </div>
                                       </td>
                                       <td class="con-revenue">
                                          <p class="text-muted">Revenue</p>
                                          <h6>$6000K</h6>
                                       </td>
                                       <td class="spl-consult">
                                          <p class="text-muted">Consultations</p>
                                          <h6>200</h6>
                                       </td>
                                    </tr>
                                    <tr class="speciality-item">
                                       <td class="spl-name">
                                          <div class="spl-box">
                                             <img src="/back/img/icon/neurology.png" alt="User Image">
                                          </div>
                                          <div class="spl-count">
                                             <h6>Neurology</h6>
                                             <p>Patients : 980 </p>
                                          </div>
                                       </td>
                                       <td class="con-revenue">
                                          <p class="text-muted">Revenue</p>
                                          <h6>$6000K</h6>
                                       </td>
                                       <td class="spl-consult">
                                          <p class="text-muted">Consultations</p>
                                          <h6>98</h6>
                                       </td>
                                    </tr>
                                    <tr class="speciality-item">
                                       <td class="spl-name">
                                          <div class="spl-box">
                                             <img src="/back/img/icon/ortho.png" alt="User Image">
                                          </div>
                                          <div class="spl-count">
                                             <h6>Orthopedic</h6>
                                             <p>Patients : 600</p>
                                          </div>
                                       </td>
                                       <td class="con-revenue">
                                          <p class="text-muted">Revenue</p>
                                          <h6>$6000K</h6>
                                       </td>
                                       <td class="spl-consult">
                                          <p class="text-muted">Consultations</p>
                                          <h6>78</h6>
                                       </td>
                                    </tr>
                                    <tr class="speciality-item">
                                       <td class="spl-name">
                                          <div class="spl-box">
                                             <img src="/back/img/icon/cardio.png" alt="User Image">
                                          </div>
                                          <div class="spl-count">
                                             <h6>Urology</h6>
                                             <p>Patients : 400</p>
                                          </div>
                                       </td>
                                       <td class="con-revenue">
                                          <p class="text-muted">Revenue</p>
                                          <h6>$6000K</h6>
                                       </td>
                                       <td class="spl-consult">
                                          <p class="text-muted">Consultations</p>
                                          <h6>65</h6>
                                       </td>
                                    </tr>
                                    <tr class="speciality-item">
                                       <td class="spl-name">
                                          <div class="spl-box">
                                             <img src="/back/img/icon/dental.png" alt="User Image">
                                          </div>
                                          <div class="spl-count">
                                             <h6>Urology</h6>
                                             <p>Patients : 400</p>
                                          </div>
                                       </td>
                                       <td class="con-revenue">
                                          <p class="text-muted">Revenue</p>
                                          <h6>$6000K</h6>
                                       </td>
                                       <td class="spl-consult">
                                          <p class="text-muted">Consultations</p>
                                          <h6>59</h6>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div> -->
                  <div class="col-xl-4 col-md-6">
                     <div class="row">
                        <!-- <div class="col-md-6 pe-md-0">
                           <div class="card cons-card mb-3">
                              <h6>Consultaion Today</h6>
                              <div id="income-month"></div>
                           </div>
                        </div> -->
                        <!-- <div class="col-md-6">
                           <div class="card pat-card mb-1">
                              <div class="card-body">
                                 <p>New Patients</p>
                                 <h3>45</h3>
                                 <p class="trade-level mb-0"><span class="text-danger me-1"><i class="fas fa-caret-down me-1"></i>1.15%</span> last week</p>
                              </div>
                           </div>
                           <div class="card pat-card mb-3">
                              <div class="card-body">
                                 <p>Old Patients</p>
                                 <h3>45</h3>
                                 <p class="trade-level mb-0"><span class="text-success me-1"><i class="fas fa-caret-up me-1"></i>9.5%</span> last week</p>
                              </div>
                           </div>
                        </div> -->
                        <!-- <div class="col-md-12">
                           <div class="card">
                              <div class="card-header">
                                 <div class="row align-items-center">
                                    <div class="col">
                                       <h5 class="card-title">Appointment Status</h5>
                                    </div>
                                    <div class="col-auto">
                                       <select class="select">
                                          <option>This Week</option>
                                          <option>This Month</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-body">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div id="status_chart"></div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="app-status">
                                          <p>Completed Appointment</p>
                                          <h6 class="text-primary">650</h6>
                                          <p>Cancelled Appointment</p>
                                          <h6>250</h6>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                     </div>
                  </div>
                  <!-- <div class="col-xl-4">
                     <div class="card">
                        <div class="card-header">
                           <div class="row">
                              <div class="col">
                                 <h5 class="card-title">Upcoming Appointments</h5>
                              </div>
                           </div>
                        </div>
                        <div class="card-body up-content">
                           <div class="nav nav-tabs">
                              <div class="nav nav-tabs upcomimg-app">
                                 <div class="pricing-carousel owl-carousel owl-theme">
                                    <div class="item">
                                       <div class="price-list active">
                                          <a class="active" data-bs-toggle="tab" href="#home">
                                          Sun
                                          <span>28th</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="item">
                                       <div class="nav-item price-list">
                                          <a data-bs-toggle="tab" href="#menu1">
                                          Mon
                                          <span>28th</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="item">
                                       <div class="price-list">
                                          <a data-bs-toggle="tab" href="#menu2">
                                          Tue
                                          <span>November 30</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="item">
                                       <div class="price-list">
                                          <a data-bs-toggle="tab" href="#menu3">
                                          Wed
                                          <span>1st</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="item">
                                       <div class="price-list">
                                          <a data-bs-toggle="tab" href="#menu4">
                                          Thu
                                          <span>2nd</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="item">
                                       <div class="price-list">
                                          <a data-bs-toggle="tab" href="#menu4">
                                          Fri
                                          <span>2nd</span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-content upcoming-content">
                              <div id="home" class="tab-pane in active">
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="float-sm-end">
                                                <div class="mode-app text-yellow">
                                                   <i class="feather-video"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-09.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Rayan </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-13.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-08.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Leo </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="float-sm-end">
                                                <div class="mode-app text-yellow">
                                                   <i class="feather-video"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="menu1" class="tab-pane">
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-07.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Rayan </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-08.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-6 col-sm-4">
                                             <div class="float-sm-end">
                                                <div class="mode-app text-yellow">
                                                   <i class="feather-video"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-6 col-sm-4"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-6 col-sm-4">
                                             <div class="float-sm-end">
                                                <div class="mode-app text-yellow">
                                                   <i class="feather-video"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="menu2" class="tab-pane">
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="float-sm-end">
                                                <div class="mode-app text-yellow">
                                                   <i class="feather-video"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="float-sm-end">
                                                <div class="mode-app text-yellow">
                                                   <i class="feather-video"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="menu3" class="tab-pane">
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-12.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Alex </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-13.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Abdul Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="float-sm-end">
                                                <div class="mode-app text-yellow">
                                                   <i class="feather-video"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="float-sm-end">
                                                <div class="mode-app text-yellow">
                                                   <i class="feather-video"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="menu4" class="tab-pane">
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="float-sm-end">
                                                <div class="mode-app text-yellow">
                                                   <i class="feather-video"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="float-sm-end">
                                                <div class="mode-app text-yellow">
                                                   <i class="feather-video"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="menu5" class="tab-pane">
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-03.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Shofia </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-10.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Harris Chris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-6">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-6">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-4">
                                             <div class="float-end">
                                                <div class="mode-app text-yellow">
                                                   <i class="feather-video"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="float-sm-end">
                                                <div class="mode-app text-yellow">
                                                   <i class="feather-video"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="menu6" class="tab-pane">
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="float-end">
                                                <div class="mode-app text-yellow">
                                                   <i class="feather-video"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="float-sm-end">
                                                <div class="mode-app text-yellow">
                                                   <i class="feather-video"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="menu7" class="tab-pane">
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="float-end">
                                                <div class="mode-app text-yellow">
                                                   <i class="feather-video"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="appointment-items">
                                    <div class="app-user">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-02.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Dr. Lester </h6>
                                                   <p>Orthopaedics</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="app-img">
                                                <img src="/back/img/profiles/avatar-05.jpg" alt="" class="img-fluid">
                                                <div class="app-name">
                                                   <h6>Chris Harris</h6>
                                                   <p>ID : 781212, M</p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="app-time">
                                       <p><i class="feather-clock me-1"></i> 06:00pm - 06:20pm</p>
                                    </div>
                                    <div class="app-infos">
                                       <div class="row align-items-center">
                                          <div class="col-4 col-sm-4">
                                             <p>Duration</p>
                                             <p class="mb-0">20 Min</p>
                                          </div>
                                          <div class="col-8 col-sm-4">
                                             <p>Consultation Fee</p>
                                             <h6>$30.00K</h6>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="float-end">
                                                <div class="mode-app text-yellow">
                                                   <i class="feather-video"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> -->
               </div>
               <div class="row">
                  <!-- <div class="col-xl-4 col-md-6">
                     <div class="card recent-card">
                        <div class="card-header">
                           <div class="row">
                              <div class="col">
                                 <h5 class="card-title">Recent Prescriptions</h5>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive recent-tab">
                              <table class="table table-borderless">
                                 <tbody>
                                    <tr>
                                       <td>
                                          <div class="pres-list">
                                             <div class="pres-head">
                                                <h6>Abacavir</h6>
                                                <p>#8995447</p>
                                             </div>
                                             <div class="pres-body">
                                                <div>
                                                   <p>Prescribed By </p>
                                                   <h6>Dr. Cullin Drew</h6>
                                                </div>
                                                <div>
                                                   <p>Prescribed For</p>
                                                   <h6>Amanda</h6>
                                                </div>
                                                <div>
                                                   <p>Type </p>
                                                   <h6 class="text-muted">One time</h6>
                                                </div>
                                             </div>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <div class="pres-list">
                                             <div class="pres-head">
                                                <h6>Calcium</h6>
                                                <p>#8799488</p>
                                             </div>
                                             <div class="pres-body">
                                                <div>
                                                   <p>Prescribed By </p>
                                                   <h6>Dr. Mark Briffa</h6>
                                                </div>
                                                <div>
                                                   <p>Prescribed For</p>
                                                   <h6>Theiry</h6>
                                                </div>
                                                <div>
                                                   <p>Type </p>
                                                   <h6 class="text-muted">One time</h6>
                                                </div>
                                             </div>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <div class="pres-list mb-0">
                                             <div class="pres-head">
                                                <h6>Abacavir</h6>
                                                <p>#8995447</p>
                                             </div>
                                             <div class="pres-body">
                                                <div>
                                                   <p>Prescribed By </p>
                                                   <h6>Dr. Linda</h6>
                                                </div>
                                                <div>
                                                   <p>Prescribed For</p>
                                                   <h6>Hendry</h6>
                                                </div>
                                                <div>
                                                   <p>Type </p>
                                                   <h6 class="text-muted">One time</h6>
                                                </div>
                                             </div>
                                          </div>
                                       </td>
                                    </tr>
                                 <tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div> -->
                  <!-- <div class="col-xl-4 col-md-6">
                     <div class="card">
                        <div class="card-header">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h5 class="card-title">Top Countries</h5>
                              </div>
                              <div class="col-auto">
                                 <select class="select">
                                    <option>Patients</option>
                                    <option>Doctors</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="country-item">
                              <div class="con-name">
                                 <div class="flag-box">
                                    <img class="rounded-circle" src="/back/img/flags/flag-01.png" alt="User Image">
                                 </div>
                                 <div class="flag-name">
                                    <p class="user-name"><span>United States</span> <span class="d-block text-muted">800 Patients</span></p>
                                 </div>
                              </div>
                              <div class="con-revenue">
                                 <p class="text-muted">Revenue</p>
                                 <h6>$6000K</h6>
                              </div>
                           </div>
                           <div class="country-item">
                              <div class="con-name">
                                 <div class="flag-box">
                                    <img class="rounded-circle" src="/back/img/flags/flag-02.png" alt="User Image">
                                 </div>
                                 <div class="flag-name">
                                    <p class="user-name"><span>United Kingdom</span> <span class="d-block text-muted">450 Patients</span></p>
                                 </div>
                              </div>
                              <div class="con-revenue">
                                 <p class="text-muted">Revenue</p>
                                 <h6>$4000K</h6>
                              </div>
                           </div>
                           <div class="country-item">
                              <div class="con-name">
                                 <div class="flag-box">
                                    <img class="rounded-circle" src="/back/img/flags/flag-03.png" alt="User Image">
                                 </div>
                                 <div class="flag-name">
                                    <p class="user-name"><span>UAE</span> <span class="d-block text-muted">300 Patients</span></p>
                                 </div>
                              </div>
                              <div class="con-revenue">
                                 <p class="text-muted">Revenue</p>
                                 <h6>$3000K</h6>
                              </div>
                           </div>
                           <div class="country-item">
                              <div class="con-name">
                                 <div class="flag-box">
                                    <img class="rounded-circle" src="/back/img/flags/flag-04.png" alt="User Image">
                                 </div>
                                 <div class="flag-name">
                                    <p class="user-name"><span>India</span> <span class="d-block text-muted">300 Patients</span></p>
                                 </div>
                              </div>
                              <div class="con-revenue">
                                 <p class="text-muted">Revenue</p>
                                 <h6>$3000K</h6>
                              </div>
                           </div>
                           <div class="country-item">
                              <div class="con-name">
                                 <div class="flag-box">
                                    <img class="rounded-circle" src="/back/img/flags/flag-05.png" alt="User Image">
                                 </div>
                                 <div class="flag-name">
                                    <p class="user-name"><span>UAE</span> <span class="d-block text-muted">300 Patients</span></p>
                                 </div>
                              </div>
                              <div class="con-revenue">
                                 <p class="text-muted">Revenue</p>
                                 <h6>$3000K</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> -->
                  <!-- <div class="col-xl-4">
                     <div class="row">
                        <div class="col-sm-6 d-flex">
                           <div class="spl-items flex-fill">
                              <a href="ratings.html">
                                 <i class="feather-star"></i>
                                 <h6>Doctor Ratings</h6>
                              </a>
                           </div>
                        </div>
                        <div class="col-sm-6 d-flex">
                           <div class="spl-items flex-fill">
                              <a href="transaction.html">
                                 <i class="feather-credit-card"></i>
                                 <h6>Transactions</h6>
                              </a>
                           </div>
                        </div>
                        <div class="col-sm-6 d-flex">
                           <div class="spl-items flex-fill">
                              <a href="settings.html">
                                 <i class="feather-sliders"></i>
                                 <h6>Settings</h6>
                              </a>
                           </div>
                        </div>
                        <div class="col-sm-6 d-flex">
                           <div class="spl-items flex-fill">
                              <a href="upcoming-appointments.html">
                                 <i class="feather-calendar"></i>
                                 <h6>Appointments</h6>
                              </a>
                           </div>
                        </div>
                        <div class="col-sm-6 d-flex">
                           <div class="spl-items flex-fill">
                              <a href="specialities.html">
                                 <i class="feather-package"></i>
                                 <h6>Specialities</h6>
                              </a>
                           </div>
                        </div>
                        <div class="col-sm-6 d-flex">
                           <div class="spl-items flex-fill">
                              <a href="patient-list.html">
                                 <i class="feather-users"></i>
                                 <h6>Patients</h6>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div> -->
               </div>
            </div>
         </div>