<!-- ########## START: LEFT PANEL ########## -->
<div class="sl-logo" style="font-size: 19px;"><a href="index.php"><i class="icon ion-android-star-outline"></i> UIU
        Solution</a></div>

<div class="sl-sideleft">

    <label class="sidebar-label">Activities</label>
    <div class="sl-sideleft-menu">


        <a href="issues_index.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">Complaint/Issues</span>
            </div>
        </a>






        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">Job Portal</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="job_portal_form.php" class="nav-link">Post Job</a></li>
            <li class="nav-item"><a href="job_portal_index.php" class="nav-link">Job list</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">Q/A Section</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="qa_create.php" class="nav-link">Post Q/A</a></li>
            <li class="nav-item"><a href="qa_index.php" class="nav-link">Q/A list</a></li>
            <li class="nav-item"><a href="qa_answer_index.php" class="nav-link">Answer Request</a></li>
        </ul>

        <a href="grader_request.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">UA/Grader Request</span>
            </div>
        </a>
        <a href="course_list.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">Course List</span>
            </div>
        </a>
        <a href="sub.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">Subscription Section</span>
            </div>
        </a>

        <a href="requsition.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">Requsition</span>
            </div>
        </a>


        <a href="notice_board.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">Notice Board</span>
            </div>
        </a>
        <a href="project_show_index.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">Project Show Form</span>
            </div>
        </a>
        <a href="academic_section.php" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">Academic Section</span>
            </div>
        </a>

        <?php 
    require '../db_config.php';
         function fetch_all_data_usingDB111($db,$sql){
			
			$result = mysqli_query($db,$sql);
		    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		    mysqli_free_result($result);
		    return $row;
		}
            $grader_section = fetch_all_data_usingDB111($db,"select * from grader_section where id = 1 ");

            if($grader_section['status']== 1)
            {
        ?>

        <a href="action.php?closeGrader=1" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">Close Grader Section</span>
            </div>
        </a>
        <?php 
            }
            else{

        ?>
        <a href="action.php?openGrader=1" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">Open Grader Section</span>
            </div>
        </a>
        <?php 
            }
            
        ?>



    </div><!-- sl-sideleft-menu -->

    <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->