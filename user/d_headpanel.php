<!-- ########## START: HEAD PANEL ########## -->
<div class="sl-header">
    <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a>
        </div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i
                    class="icon ion-navicon-round"></i></a></div>
    </div><!-- sl-header-left -->


    <div class="sl-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">

                    <!-- for mobile view only first name class="hidden-md-down" -->
                    <span class="logged-name" style="font-weight: 700;font-size:25px;">
                       
                        <?php
                    
                    echo $_SESSION['user_name'];
               ?></span></span>
                    <img src="img/img3.jpg" class="wd-32 rounded-circle" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">

                        <li><a href="profile.php?id=<?= $_SESSION['user_id'] ?>"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp; Edit Profile</a></li>
                        <li><a href="logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>

    </div><!-- sl-header-right -->
</div><!-- sl-header -->
<!-- ########## END: HEAD PANEL ########## -->