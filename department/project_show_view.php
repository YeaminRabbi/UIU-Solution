<?php 
  require_once 'custom_function.php';
    session_start();
    // $user_id = $_SESSION['user_id'];
//   $course_list = fetch_all_data_usingPDO($pdo, "select * from course_list");
//   $faculty_list = fetch_all_data_usingPDO($pdo, "select * from user where user_type like 'TEACHER'")
    $id = $_GET['id'];
$DATA = fetch_all_data_usingDB($db, "select * from project_show where id = '$id'");
  
?>


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
        <a class="breadcrumb-item" href="index.php">UIU Soluction</a>
        <span class="breadcrumb-item active">Dashboard</span>
    </nav>

    <div class="sl-pagebody">
        <!-- MAIN CONTENT -->
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
            You have already applied for this course
        </div>
        <?php 
        }
        ?>

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Project Proposal Form</h6>
            <p class="mg-b-20 mg-sm-b-30">A form for Project Proposal</p>
            <div class="form-layout">


                <div class="row mg-b-25">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">Project Title: </label>
                            <input type="text" name="title" class="form-control" value="<?= $DATA['title'] ?>" disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Course: </label>
                            <input type="text" name="title" class="form-control" value="<?= $DATA['course_name'] ?>"
                                disabled>
                        </div>
                    </div>




                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Section: </label>
                            <input type="text" name="section" class="form-control" value="<?= $DATA['section'] ?>"
                                disabled>
                        </div>
                    </div>




                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Name of Team Member 1: </label>
                            <input type="text" name="t1_name" class="form-control" value="<?= $DATA['t1_name'] ?>"
                                disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Email Team Member 1: </label>
                            <input type="text" name="t1_email" class="form-control" value="<?= $DATA['t1_email'] ?>"
                                disabled>
                        </div>
                    </div>



                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Name of Team Member 2: </label>
                            <input type="text" name="t2_name" class="form-control" value="<?= $DATA['t2_name'] ?>"
                                disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Email Team Member 2: </label>
                            <input type="text" name="t2_email" class="form-control" value="<?= $DATA['t1_email'] ?>"
                                disabled>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Name of Team Member 3: </label>
                            <input type="text" name="t3_name" class="form-control" value="<?= $DATA['t3_name'] ?>"
                                disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Email Team Member 3: </label>
                            <input type="text" name="t3_email" class="form-control" value="<?= $DATA['t3_email'] ?>"
                                disabled>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Name of Team Member 4: </label>
                            <input type="text" name="t4_name" class="form-control" value="<?= $DATA['t4_name'] ?>"
                                disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Email Team Member 4: </label>
                            <input type="text" name="t4_email" class="form-control" value="<?= $DATA['t4_email'] ?>"
                                disabled>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Name of Team Member 5: </label>
                            <input type="text" name="t5_name" class="form-control" value="<?= $DATA['t5_name'] ?? '' ?>"
                                disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Email Team Member 5: </label>
                            <input type="text" name="t5_email" class="form-control"
                                value="<?= $DATA['t5_email']  ?? ''?>" disabled>
                        </div>
                    </div>




                </div><!-- row -->

                <div class="form-layout-footer">
                    <a href="project_show_index.php">
                        <button class="btn btn-dark mg-r-5">Back</button>
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