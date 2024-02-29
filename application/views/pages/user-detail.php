<div class="page-content">
     <div class="container-fluid">
          <div class="row">
               <div class="col-12">
                    <div class="card">
                         <div class="card-body">
                              <h5 class="card-title mb-3">User Details</h5>
                              <div class="table-responsive">
                                   <table class="table table-borderless mb-0">
                                        <tbody>
                                             <?php if (isset($userDetail->user_id)) { ?>
                                                  <tr>
                                                       <th class="ps-0" scope="row">User Id :</th>
                                                       <td class="text-muted">
                                                            <?php echo $userDetail->user_id; ?>
                                                       </td>
                                                  </tr>
                                             <?php } ?>
                                             <?php if (isset($userDetail->email)) { ?>
                                                  <tr>
                                                       <th class="ps-0" scope="row">Email :</th>
                                                       <td class="text-muted">
                                                            <?php echo $userDetail->email; ?>
                                                       </td>
                                                  </tr>
                                             <?php } ?>
                                             <?php if (isset($userDetail->user_name)) { ?>
                                                  <tr>
                                                       <th class="ps-0" scope="row">User Name</th>
                                                       <td class="text-muted">
                                                            <?php echo $userDetail->user_name; ?>
                                                       </td>
                                                  </tr>
                                             <?php } ?>
                                             <?php if (isset($userDetail->contact_no)) { ?>
                                                  <tr>
                                                       <th class="ps-0" scope="row">Contact No</th>
                                                       <td class="text-muted">
                                                            <?php echo $userDetail->contact_no; ?>
                                                       </td>
                                                  </tr>
                                             <?php } ?>
                                             <?php if (isset($userDetail->register_as)) { ?>
                                                  <tr>
                                                       <th class="ps-0" scope="row">Register As</th>
                                                       <td class="text-muted">
                                                            <?php echo $userDetail->register_as; ?>
                                                       </td>
                                                  </tr>
                                             <?php } ?>
                                             <?php if (isset($userDetail->date_of_birth)) { ?>
                                                  <tr>
                                                       <th class="ps-0" scope="row">Date of Birth</th>
                                                       <td class="text-muted">
                                                            <?php echo $userDetail->date_of_birth; ?>
                                                       </td>
                                                  </tr>
                                             <?php } ?>
                                             <?php if (isset($userDetail->full_name)) { ?>
                                                  <tr>
                                                       <th class="ps-0" scope="row">Full Name</th>
                                                       <td class="text-muted">
                                                            <?php echo $userDetail->full_name; ?>
                                                       </td>
                                                  </tr>
                                             <?php } ?>
                                             <?php if (isset($userDetail->core_competency)) { ?>
                                                  <tr>
                                                       <th class="ps-0" scope="row">Core Competency</th>
                                                       <td class="text-muted">
                                                            <?php echo $userDetail->core_competency; ?>
                                                       </td>
                                                  </tr>
                                             <?php } ?>
                                             <?php if (isset($userDetail->core_competency) && $userDetail->core_competency === 'Others') { ?>
                                                  <tr>
                                                       <th class="ps-0" scope="row">Other Core Competency</th>
                                                       <td class="text-muted">
                                                            <?php echo $userDetail->other_core_competencie; ?>
                                                       </td>
                                                  </tr>
                                             <?php } ?>

                                             <?php if (isset($userDetail->experience)) { ?>
                                                  <tr>
                                                       <th class="ps-0" scope="row">Experience</th>
                                                       <td class="text-muted">
                                                            <?php echo $userDetail->experience; ?>
                                                       </td>
                                                  </tr>
                                             <?php } ?>
                                             <?php if (isset($userDetail->organization_name)) { ?>
                                                  <tr>
                                                       <th class="ps-0" scope="row">Organization Name</th>
                                                       <td class="text-muted">
                                                            <?php echo $userDetail->organization_name; ?>
                                                       </td>
                                                  </tr>
                                             <?php } ?>
                                             <?php if (isset($userDetail->potential_interest_areas)) { ?>
                                                  <tr>
                                                       <th class="ps-0" scope="row">Potential Interest Areas</th>
                                                       <td class="text-muted">
                                                            <?php echo $userDetail->potential_interest_areas; ?>
                                                       </td>
                                                  </tr>
                                             <?php } ?>
                                             <?php if (isset($userDetail->office_address)) { ?>
                                                  <tr>
                                                       <th class="ps-0" scope="row">Office Address</th>
                                                       <td class="text-muted">
                                                            <?php echo $userDetail->office_address; ?>
                                                       </td>
                                                  </tr>
                                             <?php } ?>
                                             <?php if (isset($userDetail->organisation_hq_address)) { ?>
                                                  <tr>
                                                       <th class="ps-0" scope="row">Organisation HQ Address</th>
                                                       <td class="text-muted">
                                                            <?php echo $userDetail->organisation_hq_address; ?>
                                                       </td>
                                                  </tr>
                                             <?php } ?>
                                             <?php if (isset($userDetail->website_url)) { ?>
                                                  <tr>
                                                       <th class="ps-0" scope="row">Website URL</th>
                                                       <td class="text-muted">
                                                            <?php echo $userDetail->website_url; ?>
                                                       </td>
                                                  </tr>
                                             <?php } ?>
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
