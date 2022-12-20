<?php 
    require_once 'custom_function.php';
    $list = fetch_all_data_usingPDO($pdo, 'select * from question_answer_solutions');
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

    <div class="sl-pagebody"><!-- MAIN CONTENT -->
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
                    <h2 class="text-center pb-3">Course Code & Course Name</h2>
                </div>
        </div>
        <?php
                if(isset($list))
                {
                    foreach($list as $data){
                        ?>
                        <div class="row d-flex justify-content-center">

                            <div class="col-md-6 mb-3 text-center" >
                                <a href="qa_s2.php?course_name=<?= $data['course_name'] ?>">
                                    <p style="border: 1px solid black;color:black;font-size:25px;cursor:pointer;">
                                        <?= $data['course_name']; ?>
                                    </p>
                                </a>
                            </div>
                            
                        </div>
                    <?php
                    }
                   
                }            
            ?>
    </div>
    </div><!-- sl-pagebody --><!-- END MAIN CONTENT -->


  <?php require 'd_footer.php' ?>
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

  <?php require 'd_javascript.php' ?>
  </body>
</html>
