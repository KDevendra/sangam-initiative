<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
<div class="card">
    <div class="card-body">
        <h5 class="card-title mb-3">User Details</h5>
        <div class="table-responsive">
            <table class="table table-borderless mb-0">
                <?php print_r($userDetail);?>
                <tbody>
                 
                   <?php if(isset($userDetail->user_id)){?>
 <tr>
                        <th class="ps-0" scope="row">user_id :</th>
                        <td class="text-muted">
                        <?php echo $userDetail->user_id; ?>
                        </td>
                   </tr>
                    <?php }?>
            
                   <?php if(isset($userDetail->email)){?>
 <tr>
                        <th class="ps-0" scope="row">email :</th>
                        <td class="text-muted">
                        <?php echo $userDetail->email; ?>
                        </td>
                   </tr>
                    <?php }?>
                   <?php if(isset($userDetail->user_name)){?>
 <tr>
                        <th class="ps-0" scope="row">user_name</th>
                        <td class="text-muted">
                        <?php echo $userDetail->user_name; ?>
                        </td>
                   </tr>
                    <?php }?>
                   <?php if(isset($userDetail->contact_no)){?>
 <tr>
                        <th class="ps-0" scope="row">contact_no</th>
                        <td class="text-muted">
                        <?php echo $userDetail->contact_no; ?>
                        </td>
                   </tr>
                    <?php }?>
                   <?php if(isset($userDetail->register_as)){?>
 <tr>
                        <th class="ps-0" scope="row">register_as</th>
                        <td class="text-muted">
                        <?php echo $userDetail->register_as; ?>
                        </td>
                   </tr>
                    <?php }?>
                   <?php if(isset($userDetail->date_of_birth)){?>
 <tr>
                        <th class="ps-0" scope="row">date_of_birth</th>
                        <td class="text-muted">
                        <?php echo $userDetail->date_of_birth; ?>
                        </td>
                   </tr>
                    <?php }?>
                   <?php if(isset($userDetail->full_name)){?>
 <tr>
                        <th class="ps-0" scope="row">full_name</th>
                        <td class="text-muted">
                        <?php echo $userDetail->full_name; ?>
                        </td>
                   </tr>
                    <?php }?>
                   <?php if(isset($userDetail->core_competency)){?>
 <tr>
                        <th class="ps-0" scope="row">core_competency</th>
                        <td class="text-muted">
                        <?php echo $userDetail->core_competency; ?>
                        </td>
                   </tr>
                    <?php }?>
                   <?php if(isset($userDetail->experience)){?>
 <tr>
                        <th class="ps-0" scope="row">experience</th>
                        <td class="text-muted">
                        <?php echo $userDetail->experience; ?>
                        </td>
                   </tr>
                    <?php }?>
                   <?php if(isset($userDetail->organization_name)){?>
 <tr>
                        <th class="ps-0" scope="row">organization_name</th>
                        <td class="text-muted">
                        <?php echo $userDetail->organization_name; ?>
                        </td>
                   </tr>
                    <?php }?>
                   <?php if(isset($userDetail->potential_interest_areas)){?>
 <tr>
                        <th class="ps-0" scope="row">potential_interest_areas</th>
                        <td class="text-muted">
                        <?php echo $userDetail->potential_interest_areas; ?>
                        </td>
                   </tr>
                    <?php }?>
                   <?php if(isset($userDetail->office_address)){?>
 <tr>
                        <th class="ps-0" scope="row">office_address</th>
                        <td class="text-muted">
                        <?php echo $userDetail->office_address; ?>
                        </td>
                   </tr>
                    <?php }?>
                   <?php if(isset($userDetail->organisation_hq_address)){?>
 <tr>
                        <th class="ps-0" scope="row">organisation_hq_address</th>
                        <td class="text-muted">
                        <?php echo $userDetail->organisation_hq_address; ?>
                        </td>
                   </tr>
                    <?php }?>
                   <?php if(isset($userDetail->website_url)){?>
                     <tr>
                        <th class="ps-0" scope="row">website_url</th>
                        <td class="text-muted">
                        <?php echo $userDetail->website_url; ?>
                        </td>
                   </tr>
                    <?php }?>
                   <?php if(isset($userDetail->is_active)){?>
                     <tr>
                        <th class="ps-0" scope="row">is_active</th>
                        <td class="text-muted">
                        <?php echo $userDetail->is_active; ?>
                        </td>
                   </tr>
                    <?php }?>
                   <?php if(isset($userDetail->is_verified)){?>
                     <tr>
                        <th class="ps-0" scope="row">is_verified</th>
                        <td class="text-muted">
                        <?php echo $userDetail->is_verified; ?>
                        </td>
                   </tr>
                    <?php }?>
                   <?php if(isset($userDetail->last_login_time)){?>
                     <tr>
                        <th class="ps-0" scope="row">last_login_time</th>
                        <td class="text-muted">
                        <?php echo $userDetail->last_login_time; ?>
                        </td>
                   </tr>
                    <?php }?>
                 
                </tbody>
            </table>
        </div>
    </div>
</div>
</div></div></div></div>