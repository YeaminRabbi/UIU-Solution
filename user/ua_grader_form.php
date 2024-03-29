<?php require 'd_header.php' ?>

<!-- ########## START: LEFT PANEL ########## -->
<?php require 'd_leftpanel.php' ?>
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<?php require 'd_headpanel.php' ?>
<!-- ########## END: HEAD PANEL ########## -->



<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php">UIU Soluctions</a>
        <span class="breadcrumb-item active">Dashboard</span>
    </nav>

    <div class="sl-pagebody">
        <!-- MAIN CONTENT -->

        <?php 
        require_once 'custom_function.php';
            // session_start();
            $user_id = $_SESSION['user_id'];
            $course_list = fetch_all_data_usingPDO($pdo, "select * from course_list");
            $faculty_list = fetch_all_data_usingPDO($pdo, "select * from user where user_type like 'TEACHER'");
            $section = fetch_all_data_usingDB($db, "select * from section_list where id = 1");
            $username = $_SESSION['user_name'];
            $user = fetch_all_data_usingDB($db, "select * from user where id = '$user_id'");
            $grader_section = fetch_all_data_usingDB($db, "select * from grader_section where id = 1" );
        ?>
        <?php

        if(isset($_GET['msg']))
        {
        ?>
        <div class="alert alert-success alert-dismissible" style="height: 50px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Successfully Applied!
        </div>
        <?php 
        }

                
        ?>

        <?php

        if(isset($_GET['exist']))
        {
        ?>
        <div class="alert alert-danger alert-dismissible" style="height: 50px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Already Applied!
        </div>
        <?php 
        }

                
        ?>

        <div class="card pd-20 pd-sm-40">

            <div class="d-flex justify-content-between">
                <div class="">
                    <h6 class="card-body-title">UA & Grader Application Form</h6>
                    <p class="mg-b-20 mg-sm-b-30">A form for UA & Grader</p>
                </div>
                <?php
                    if(!empty($section['url'])){
                ?>
                <div class="">
                    <a href="PDF.php?file=<?= $section['url'] ?>" target="_blank" class="btn btn-purple">Download
                        Section
                        List</a>
                </div>
                <?php
                }

                ?>
            </div>

            <form action="action.php" method="POST" enctype="multipart/form-data">
                <div class="form-layout">

                    <input type="hidden" name="user_id" value="<?= $user_id ?>">

                    <div class="row mg-b-25">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Choose Type: </label>
                                <select name="type" class="form-control" required>
                                    <option disabled>--Select one--</option>

                                    <?php 

                                    if((float)$user['cgpa'] >= 3.75){
                                    ?>
                                    <option value="UA">Apply for UA</option>

                                    <?php 
                                    }
                    
                                    if($grader_section['status'] == 1 ){
                                    ?>
                                    <option value="GRADER">Apply for GRADER</option>


                                    <?php 
                                    }
                    
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Course: </label>
                                <select name="course_id" class="form-control" required>
                                    <option disabled>--Select Course--</option>
                                    <?php
                                        foreach($course_list as $data)
                                        {
                                    ?>
                                    <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                                    <?php 
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Faculty: </label>
                                <select name="faculty_id" class="form-control" required>
                                    <option disabled>--Select Faculty--</option>
                                    <?php
                                            foreach($faculty_list as $data)
                                            {
                                        ?>
                                    <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                                    <?php 
                                            }
                                        ?>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Name: </label>
                                <input type="text" name="name" class="form-control" value="<?= $username ?? '' ?>"
                                    required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Course Grade: </label>
                                <input type="text" name="course_grade" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Phone: </label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Section: </label>
                                <input type="text" name="section" class="form-control" required>
                            </div>
                        </div>






                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button type="submit" class="btn btn-primary mg-r-5"
                            name="btn-UAGRADE_submission">Submit</button>
                        <a href="ua_grader_index.php" class="btn btn-dark" style="color:white;">
                            Back
                        </a>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->

            </form>
        </div>
    </div><!-- sl-pagebody -->
    <!-- END MAIN CONTENT -->


    <?php require 'd_footer.php' ?>
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require 'd_javascript.php' ?>
</body>

</html>