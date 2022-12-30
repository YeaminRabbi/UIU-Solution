<?php 
    
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
        <a class="breadcrumb-item" href="index.php">UIU Solution</a>
        <span class="breadcrumb-item active">Dashboard</span>
    </nav>

    <div class="sl-pagebody">
        <!-- MAIN CONTENT -->
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">UA/Grader Request from Faculty</h6>

            <?php

            if(isset($_GET['update']))
            {
          ?>

            <div class="alert alert-success alert-dismissible" style="height: 50px;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Updated Successfully!
            </div>
            <?php 
            }
          ?>


            <?php

            if(isset($_GET['delete']))
            {
          ?>

            <div class="alert alert-danger alert-dismissible" style="height: 50px;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Deleted Successfully!
            </div>
            <?php 
            }
          ?>

            <div class="table-wrapper">
                <table id="myTable" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Type</th>
                            <th>Faculty</th>
                            <th>Faculty Email</th>
                            <th>Grader Name</th>
                            <th>Email</th>
                            <th>CPGA</th>
                            <th>Recommendation</th>
                            <th>Course</th>
                            <th>Section</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            require 'custom_function.php';
                            $id = $_SESSION['user_id'];
                            
                            function STUDENT($db, $id){
                                $sql = "select * from user where id = '".$id."'";

                                $result = mysqli_query($db,$sql);
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                mysqli_free_result($result);
                                return $row;
                            }
                            $list = fetch_all_data_usingPDO($pdo,"select * from ua_grader_application where  status = 1 or status = 0 ORDER BY id DESC");

                            foreach ($list as $key => $data) {

                              $student = STUDENT($db, $data['user_id']);
                        ?>
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $data['type'] ?></td>
                            <td><?php
                                    $faculty = STUDENT($db, $data['faculty_id']);  
                                    echo $faculty['name'];
                                ?>
                            </td>
                            <td><?php
                                    echo $faculty['email'];
                                ?>
                            </td>

                            <td><?php
                                  echo  $student['name'];
                                ?></td>
                            <td><?php
                                  echo  $student['email'];
                                ?>
                            </td>
                            <td><?php
                                  echo  $student['cgpa'];
                                ?></td>

                            <td>

                                <?php 

                                if($data['status'] == 1)
                                {
                                    echo '<b>YES</b>';
                                }
                                else {
                                    echo '<b>NO</b>';

                                }

                            ?>

                            </td>

                            <td>
                                <?php echo findCourse($db, $data['course_id']) ?>
                            </td>
                            <td>
                                <?php echo $data['section'] ?>
                            </td>

                            <td>

                                <a href="action.php?grader_permit_recommend_id=<?= $data['id']  ?>"
                                    class="btn btn-primary">Confirm</a>
                                <a href="action.php?grader_reject_recommend_id=<?= $data['id']  ?>"
                                    class="btn btn-danger">Reject</a>

                            </td>

                        </tr>
                        <?php
                    }

                ?>



                    </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div>

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">UA/Grader List</h6>

            <?php

            if(isset($_GET['update']))
            {
          ?>

            <div class="alert alert-success alert-dismissible" style="height: 50px;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Updated Successfully!
            </div>
            <?php 
            }
          ?>


            <?php

            if(isset($_GET['delete']))
            {
          ?>

            <div class="alert alert-danger alert-dismissible" style="height: 50px;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Deleted Successfully!
            </div>
            <?php 
            }
          ?>

            <div class="table-wrapper">
                <table id="myTable2" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Type</th>
                            <th>Faculty</th>
                            <th>Faculty Email</th>
                            <th>Grader Name</th>
                            <th>Email</th>
                            <th>CPGA</th>
                            <th>Course</th>
                            <th>Section</th>


                        </tr>
                    </thead>
                    <tbody>

                        <?php
                              function findCourse($db, $id){
                                    $course = fetch_all_data_usingDB($db, "SELECT * FROM course_list WHERE id = '$id'");
                                    return $course['name'];
                                }
                            
                            $id = $_SESSION['user_id'];
                            
                           
                            $list = fetch_all_data_usingPDO($pdo,"select * from ua_grader_application where status = 2   ORDER BY id DESC");

                            foreach ($list as $key => $data) {

                              $student = STUDENT($db, $data['user_id']);
                        ?>
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $data['type'] ?></td>
                            <td><?php
                                    $faculty = STUDENT($db, $data['faculty_id']);  
                                    echo $faculty['name'];
                                ?>
                            </td>
                            <td><?php
                                    echo $faculty['email'];
                                ?>
                            </td>

                            <td><?php
                                  echo  $student['name'];
                                ?></td>
                            <td><?php
                                  echo  $student['email'];
                                ?>
                            </td>
                            <td><?php
                                  echo  $student['cgpa'];
                                ?></td>

                            <td>
                                <?php echo findCourse($db, $data['course_id']) ?>
                            </td>
                            <td>
                                <?php echo $data['section'] ?>
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
</body>

</html>