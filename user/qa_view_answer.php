<?php 

  require 'custom_function.php';
  $id = $_GET['id'];

  $DATA = fetch_all_data_usingDB($db,"select * from question_answer_solutions where id = '".$id."' ;");
?>


<?php require 'd_header.php' ?>

<!-- ########## START: LEFT PANEL ########## -->
<?php require 'd_leftpanel.php' ?>
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<?php require 'd_headpanel.php' ?>
<!-- ########## END: HEAD PANEL ########## -->

<?php
                 $userID = $_SESSION['user_id'];
                 $USERDATA = fetch_all_data_usingDB($db, "select * from user where id = '".$userID."'");
            ?>


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
            Form Submitted Successfully!
        </div>
        <?php 
        }
        ?>

        <?php

          if(isset($_GET['FileError']))
          {
          ?>
        <div class="alert alert-danger alert-dismissible" style="height: 50px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            PDF files Only!
        </div>
        <?php 
          }
          ?>

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Q/A Create</h6>
            <p class="mg-b-20 mg-sm-b-30">A form for Q/A</p>
            <div class="form-layout">

                <div class="row mg-b-25">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Title: </label>
                            <input type="text" name="title" class="form-control" value="<?= $DATA['title'] ?>" disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Course: </label>
                            <input type="text" name="course" class="form-control" value="<?= $DATA['course_name'] ?>"
                                disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Trimester: </label>
                            <input type="text" name="trimester" class="form-control" value="<?= $DATA['trimester'] ?>"
                                disabled>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">File: </label><br>
                            <!-- <input type="file"  name="upload[]" multiple="on" class="form-control"> -->
                            <a href="PDF.php?file=<?= $data['question']  ?>"><button class="btn btn-purple">Download
                                    Question</button></a>
                        </div>
                    </div>


                </div><!-- row -->

                <div class="form-layout-footer">
                    <a href="qa_s1.php">
                        <button class="btn btn-dark mg-r-5">Back</button>
                    </a>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->

        </div>
    </div><!-- sl-pagebody -->
    <!-- END MAIN CONTENT -->

    <?php 
              if($USERDATA['subscription'] == 2){
    ?>

    <div class="sl-pagebody" id="ANSWER_FORM" style="display: none;">
        <div class="card pd-20 pd-sm-40">
            <div class="">
                <h6 class="card-body-title">Answers</h6>
                <p>A form for answers script</p>
            </div>
            <form action="action.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>" required>
                <input type="hidden" name="question_id" value="<?= $id ?>" required>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">File: </label><br>
                            <input type="file" name="fileToUpload" class="form-control"><br>
                            <button class="btn btn-primary" type="submit" name="btn_answer_upload">Submit</button>

                        </div>
                    </div>



                </div>


            </form>
        </div>
    </div>

    <div class="sl-pagebody" id="ANSWER_LIST">
        <div class="card pd-20 pd-sm-40">
            <div class="d-flex justify-content-between">
                <h6 class="card-body-title">Answers</h6>
                <button onclick="show('ANSWER_FORM','ANSWER_LIST')" class="btn btn-success">Add Answers</button>
            </div>
            <?php
            
            $answer_list = fetch_all_data_usingPDO($pdo,"select * from answers where status= 1 and question_id = '".$id."' ;");
              foreach($answer_list as $answer){

            ?>
            <div class="row">
                <div class="col-md-12">

                    <h3 class="mb-3"><?= findUserName($db,$answer['user_id']) ?></h3>
                    <a href=" PDF.php?file=<?= $answer['url']  ?>"><button class="btn btn-purple mb-5">Download
                            Answer</button></a>
                </div>
            </div>
            <?php
            }
            ?>


        </div>
    </div>

    <?php
                                }else{


      ?>

    <div class="sl-pagebody">
        <a href="sub.php?user_id=<?= $USERDATA['id'] ?>" class="mb-3" style="font-size:22px;font-weight:bold;">Click
            here to Subscribe</a>
    </div>
    <?php 
    }
    ?>


    <?php require 'd_footer.php' ?>
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require 'd_javascript.php' ?>


<script>
function show(a, b) {
    let xx = document.getElementById(a)
    let yy = document.getElementById(b)

    xx.style.display = 'block';
    yy.style.display = 'none';
    console.log(yy)
}
</script>
</body>

</html>