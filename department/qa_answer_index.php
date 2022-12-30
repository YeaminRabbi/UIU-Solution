<?php 
    require_once 'custom_function.php';
    $list = fetch_all_data_usingPDO($pdo, 'select * from answers where status = 0');

    function getQuestion($db, $id){
        $sql = "select * from question_answer_solutions where id = '$id'" ; 
        $result = mysqli_query($db,$sql);
		    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		    mysqli_free_result($result);
		    return $row['question'];
    }
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

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Q/A Section</h6>



            <div class="table-wrapper">
                <table id="myTable" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php

                    foreach ($list as $key => $data) {
                ?>
                        getQuestion

                        <tr>

                            <td><?php echo $key+1; ?></td>
                            <td>


                                <a href="PDF.php?file=<?php echo getQuestion($db, $data['question_id']); ?>"
                                    target="_blank" class="btn btn-purple">View
                                    Question</a>

                            </td>
                            <td><a href="PDF.php?file=<?= $data['url']  ?>" target="_blank" class="btn btn-success">View
                                    Answer</a></td>

                            <td>
                                <a href="action.php?answerIdApprove=<?= $data['id']  ?>"
                                    class="btn btn-primary">Approve</a>
                            </td>

                        </tr>

                        <?php
                    }

                ?>



                    </tbody>

                </table>


            </div><!-- table-wrapper -->
        </div>

    </div><!-- sl-pagebody -->
    <!-- END MAIN CONTENT -->


    <?php require 'd_footer.php' ?>
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require 'd_javascript.php' ?>
<script>
$('#myTable').DataTable({
    bLengthChange: true,
    searching: true,
    responsive: true
});
</script>
</body>

</html>