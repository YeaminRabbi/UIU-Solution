<?php 
    session_start();
    $qa_id = $_GET['qa_id'];
    require_once 'custom_function.php';
    $DATA = fetch_all_data_usingDB($db, "select * from question_answer_solutions where id = '$qa_id'");


    $user_id = $_SESSION['user_id'];
   
    $USER_DATA = fetch_all_data_usingDB($db, "select * from user where id = '$user_id'");
   

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
        <a class="breadcrumb-item" href="index.php">UIU Soluctions</a>
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
            Issue Created Successfully!
        </div>
        <?php 
        }
        ?>

        <div class="card pd-20 pd-sm-40">
            <div class="row">
                <div class="col ">
                    <h2 class="text-center pb-3"><?= $DATA['title'] ?? '' ?></h2>
                    <h4 class="text-center pb-3"><?= $DATA['course_name'] ?? '' ?></h4>
                    <h4 class="text-center pb-3"><?= $DATA['trimester'] ?? '' ?></h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <h3>File: <?= $DATA['title'] ?></h3>
                    <a class="btn btn-primary" style="color:white;">Download</a>

                    <!-- <img src="<?= $DATA['question'] ?? '' ?>" alt="question IMG" class="image-fluid"> -->
                </div>

                <?php 
                    if($USER_DATA['subscription'] == 0){
                ?>
                <div class="col-md-12 mb-3">
                    <h3>Want to know the answers?</h3>
                    <!-- <a href="action.php?sub_id=<?= $USER_DATA['id'] ?>" class="btn btn-warning"
                        style="color:white;">Subscribe</a> -->
                    <a href="sub.php?user_id=<?= $USER_DATA['id'] ?>" class="btn btn-warning"
                        style="color:white;">Subscribe</a>
                </div>
                <?php
                
                }elseif($USER_DATA['subscription'] == 2){
                ?>

                <div class="col-md-12 mb-3">
                    <h3>Answer Script</h3>
                    <button class="btn btn-warning">Download</button>
                </div>

                <?php 
                }
                ?>


                <!-- <?php 
                if(!empty($DATA['reply'])){
            ?>
                <div class="col-md-12">
                    <label for="">Reply/Answer</label>
                    <textarea class="form-control" id="" cols="100" disabled
                        rows="10"><?= $DATA['reply'] ?? 'No Data' ?></textarea>
                </div>
                <?php
                }
                else{

            ?>
                <form action="action.php" method="POST">
                    <input type="hidden" name="id" value="<?= $DATA['id'] ?>">
                    <div class="col-md-12">
                        <label for="">Reply/Answer</label>
                        <textarea name="reply" class="form-control" id="" cols="100" rows="10"></textarea>
                    </div>

                    <div class="col-md-12 mt-3">
                        <button class="btn btn-primary" name="btn_qa_replyBTN">Submit </button>
                    </div>
                </form>
                <?php 
                }
            ?> -->

            </div>

        </div>
    </div><!-- sl-pagebody -->
    <!-- END MAIN CONTENT -->


    <?php require 'd_footer.php' ?>
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require 'd_javascript.php' ?>
</body>

</html>