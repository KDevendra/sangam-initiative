<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0"><?php $segment = $this->uri->segment(1); $segmentWithSpaces = str_replace('-', ' ', $segment); echo ucwords($segmentWithSpaces); ?></h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active"><?php $segment = $this->uri->segment(1); $segmentWithSpaces = str_replace('-', ' ', $segment); echo ucwords($segmentWithSpaces); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h5 class="card-title mb-0 flex-grow-1">Team Management</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if (empty($checkTeamCreated)): ?>
                        <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box accordion-secondary" id="accordionBordered">
                            <div class="accordion-item material-shadow">
                                <h2 class="accordion-header" id="accordionborderedExample1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_borderedExamplecollapse1" aria-expanded="true" aria-controls="accor_borderedExamplecollapse1">
                                        Create Your Team
                                    </button>
                                </h2>
                                <div id="accor_borderedExamplecollapse1" class="accordion-collapse collapse show" aria-labelledby="accordionborderedExample1" data-bs-parent="#accordionBordered">
                                    <div class="accordion-body">
                                        <form id="teamManagement" method="POST">
                                            <div class="form-group mt-2">
                                                <label for="team_name">Team Name</label>
                                                <input type="text" class="form-control" id="team_name" placeholder="Enter your team name" maxlength="20" minlength="3" name="team_name" />
                                                <small class="form-text text-muted">Be creative in this. (Can't exceed 20 characters)</small>
                                                <p><span id="team_name_error" class="text-danger"></span></p>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="team_description">Team Description</label>
                                                <textarea name="team_description" class="form-control" placeholder="Write about your team" id="team_description" rows="3"></textarea>
                                                <p><span id="team_description_error" class="text-danger"></span></p>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-2">Create Team</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mt-2 material-shadow">
                                <h2 class="accordion-header" id="accordionborderedExample2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_borderedExamplecollapse2" aria-expanded="false" aria-controls="accor_borderedExamplecollapse2">
                                        Join a Team
                                    </button>
                                </h2>
                                <div id="accor_borderedExamplecollapse2" class="accordion-collapse collapse" aria-labelledby="accordionborderedExample2" data-bs-parent="#accordionBordered">
                                    <div class="accordion-body">
                                        <form action="jointeam" method="POST">
                                            <div class="form-group">
                                                <label for="changeTeamName11">Team Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Team name " maxlength="25" minlength="3" id="changeTeamName11" name="changeTeamName" required="" />
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-2">Join Team</button>
                                            <div class="d-flex justify-content-center">
                                                <a name="" id="" class="btn btn-danger btn-block" href="/hack/genai_hackathon_apac_edition/dashboard/teamlisting" role="button">
                                                    Explore Public Teams
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="position-relative">
                            <h4 class="text-primary">
                                Your Team : <?php if (isset($checkTeamCreated->team_name)) {
                                  echo $checkTeamCreated->team_name;
                                }?>
                            </h4>
                            <form id="updatedTeamDetail" class="border border-dashed border-top-0 border-end-0 border-start-0">
                              <input type="hidden" name="team_custom_id" value="<?php if ($checkTeamCreated->team_custom_id) {
                                echo $checkTeamCreated->team_custom_id;
                              }?>">
                                <div class="card border border-info mb-1">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold mb-2">
                                            Do you want to let other registered participants of this forum to join your team?
                                        </h6>
                                        <div class="form-check mb-2">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="other_can_join" id="other_can_join" value="yes" <?php echo ($checkTeamCreated->other_can_join == 'yes') ? 'checked' : ''; ?> />
                                                Yes, my team is open for everyone to join.
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="other_can_join" id="other_can_join" value="no" <?php echo ($checkTeamCreated->other_can_join == 'no') ? 'checked' : ''; ?> />
                                                No, I will invite my team members.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold mt-3" for="">
                                        Short brief about your team (400 Characters):
                                    </label>
                                    <p>
                                        Write a brief about your idea, it will be visible to participants who are looking for teams to join. Try to explain your requirements for better chances to find the team member you are looking for.
                                    </p>
                                    <textarea class="form-control" name="team_description" id="team_description" rows="4" maxlength="400" minlength="3"><?php if (isset($checkTeamCreated->team_name)) {
                                      echo $checkTeamCreated->team_description;
                                    }?></textarea>
                                    <p> <span id="team_description_error" class="text-danger"></span> </p>
                                </div>
                                <button style="width:120px" type="submit" name="" id="" class="btn btn-primary mt-2">
                                    Update Detail
                                </button>
                            </form>
                        </div>
                        <div class="mt-4">
                          <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box accordion-secondary" id="accordionBordered">
                              <div class="accordion-item material-shadow">
                                  <h2 class="accordion-header" id="accordionborderedExample1">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_borderedExamplecollapse1" aria-expanded="true" aria-controls="accor_borderedExamplecollapse1">
                                          Add Team Members
                                      </button>
                                  </h2>
                                  <div id="accor_borderedExamplecollapse1" class="accordion-collapse collapse show" aria-labelledby="accordionborderedExample1" data-bs-parent="#accordionBordered">
                                      <div class="accordion-body">
                                          <form id="inviteTeamMember" method="POST">
                                              <div class="form-group mt-2">
                                                  <label for="team_name">Invite your Team Member</label>
                                                  <input type="email" class="form-control" id="email" placeholder="Enter Team Member's Email ID"  minlength="3" name="email" />
                                                  <small class="form-text text-muted">Use the valid Email ID.</small>
                                                  <p><span id="email_error" class="text-danger"></span></p>
                                              </div>
                                              <button type="submit" class="btn btn-primary mt-2">Invite</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                              <div class="accordion-item mt-2 material-shadow">
                                  <h2 class="accordion-header" id="accordionborderedExample2">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_borderedExamplecollapse2" aria-expanded="false" aria-controls="accor_borderedExamplecollapse2">
                                        Change Team Name
                                      </button>
                                  </h2>
                                  <div id="accor_borderedExamplecollapse2" class="accordion-collapse collapse" aria-labelledby="accordionborderedExample2" data-bs-parent="#accordionBordered">
                                      <div class="accordion-body">
                                          <form action="jointeam" method="POST">
                                              <div class="form-group">
                                                  <label for="changeTeamName11">Team Name</label>
                                                  <input type="text" class="form-control" value="<?php if (isset($checkTeamCreated->team_name)) {
                                                    echo $checkTeamCreated->team_name;
                                                  }?>" placeholder="Enter Team name " maxlength="25" minlength="3" id="changeTeamName11" name="changeTeamName" required="" />
                                              </div>
                                              <button type="submit" class="btn btn-primary mt-2">Change Name</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-center pt-3 pb-3">
                          <button style="width:140px" type="button" name="" id="" class="btn btn-danger mt-2">
                            <i class="ri-delete-bin-5-fill"></i>  Delete Team
                          </button>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function showLoader() {
        $(".loader").show();
        $('button[type="submit"]').prop("disabled", true).html('<span class="loader"></span>');
    }

    function hideLoader() {
        $(".loader").hide();
        $('button[type="submit"]').prop("disabled", false).html("Create Team");
    }
    $(document).ready(function () {
        $("#team_name").on("input", function () {
            var teamName = $(this).val();
            var isValid = /^[a-zA-Z0-9]+$/.test(teamName);
            if (isValid && teamName.length <= 20) {
                $("#team_name_error").text("");
            } else {
                $("#team_name_error").text("Team name must be alphanumeric and should not exceed 20 characters.");
            }
        });
        $("#teamManagement").submit(function (e) {
            e.preventDefault();

            var teamName = $("#team_name").val();
            if (!teamName.match(/^[a-zA-Z0-9]+$/)) {
                $("#team_name_error").text("Team name must be alphanumeric");
                return;
            } else if (teamName.length < 3 || teamName.length > 20) {
                $("#team_name_error").text("Team name length should be between 3 and 20 characters");
                return;
            } else {
                $("#team_name_error").text("");
            }

            var teamDescription = $("#team_description").val();
            if (teamDescription.length === 0) {
                $("#team_description_error").text("Team description is required");
                return;
            } else {
                $("#team_description_error").text("");
            }

            $.ajax({
                url: "<?php echo base_url('post-create-team'); ?>",
                type: "post",
                data: $(this).serialize(),
                beforeSend: showLoader,
                success: function (response) {
                    hideLoader();
                    if (response.status === "error") {
                        Swal.fire({
                            icon: "error",
                            text: response.message,
                        });
                    } else if (response.status === "success") {
                        Swal.fire({
                            title: "Success",
                            icon: "success",
                            text: response.message,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            text: "Something went wrong",
                        });
                    }
                },
                error: function () {
                    hideLoader();
                    Swal.fire({
                        icon: "error",
                        text: "Something went wrong",
                    });
                },
            });
        });
        $("#updatedTeamDetail").submit(function (e) {
            e.preventDefault();

            var teamDescription = $("#team_description").val();
            if (teamDescription.length === 0) {
                $("#team_description_error").text("Team description is required");
                return;
            } else {
                $("#team_description_error").text("");
            }

            $.ajax({
                url: "<?php echo base_url('post-update-team'); ?>",
                type: "post",
                data: $(this).serialize(),
                beforeSend: showLoader,
                success: function (response) {
                    hideLoader();
                    if (response.status === "error") {
                        Swal.fire({
                            icon: "error",
                            text: response.message,
                        });
                    } else if (response.status === "success") {
                        Swal.fire({
                            title: "Success",
                            icon: "success",
                            text: response.message,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            text: "Something went wrong",
                        });
                    }
                },
                error: function () {
                    hideLoader();
                    Swal.fire({
                        icon: "error",
                        text: "Something went wrong",
                    });
                },
            });
        });
    });
</script>
