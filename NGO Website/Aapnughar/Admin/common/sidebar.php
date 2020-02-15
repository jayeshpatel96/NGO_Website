<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>&nbsp</h3>
                            <ul class="nav side-menu">

                               
                                <li><a href="viewcompany.php"><i class="fa fa-info-circle"></i>Company Info</a></li>

                                <li><a><i class="fa fa-user"></i>Users<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="createuser.php">Add User</a>
                                        </li>
                                        <li><a href="viewuser.php">View User</a>
                                        </li>
                                        <li><a href="addrole.php">Add Role</a>
                                        </li>
                                        <li><a href="viewrole.php">View Roletype</a>
                                        </li>
                                    </ul>
                                </li>
                                      
                                <li><a><i class="fa fa-picture-o"></i>Gallery<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="addimages.php">Add Images</a>
                                        </li>
                                        <li><a href="viewimages.php">View Images</a>
                                        </li>
                                    </ul>
                                </li>  
                                
                                <li><a href="donation.php"><i class="fa fa-money"></i>Donations</a></li>

                                <li><a><i class="fa fa-calendar-o"></i>Events<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="create_event.php">Create Event</a>
                                        </li>
                                        <li><a href="viewevent.php">View Events</a>
                                        </li>
                                    </ul>

                                </li>

                                <li><a><i class="fa fa-users"></i>Volunteer<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="addvolunteer.php">Add Volunteer</a>
                                        </li>
                                        <li><a href="viewvolunteer.php">View Volunteer</a>
                                        </li>
                                    </ul>

                                </li>

                               <!-- <li><a href="viewcompany.php"><i class="fa fa-question-circle"></i>FAQ</a></li>
                                <li><a href="feedback.php"><i class="fa fa-comments-o"></i>Feedback</a></li>-->
                                <li><a href="changepassword.php"><i class="fa fa-key"></i>Change Password</a></li>
                                
                                <!--<li><a href="viewcompany.php"><i class="fa fa-newspaper-o"></i>News</a></li>
                                <li><a href="viewcompany.php"><i class="fa fa-question-circle"></i>Post Query</a></li>

                                <li><a><i class="fa fa-sliders"></i>Sliders<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="createuser.php">Add Images</a>
                                        </li>
                                        <li><a href="viewuser.php">View Images</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="viewcompany.php"><i class="fa fa-share-square-o "></i>Social Media Info.</a></li>
                                <li><a href="viewcompany.php"><i class="fa fa-pencil-square-o"></i>Subscribes</a></li>
                                <li><a href="viewcompany.php"><i class="fa fa-caret-square-o-down "></i>Sub Categorys</a></li>-->
                                                            
                            </ul>
                        </div>
                       

                    </div>
                    </div>
</div>
                     <!-- top navigation -->
<div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                             <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/<?php echo $_SESSION['profile']; ?>" alt="">
                                    <?php echo $_SESSION['username']; ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;"> Profile</a></li>
                                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i>Log Out</a>
                                    </li>
                                </ul>
                            </li>
                       <!--  <div class="form-group">
                                        <a href="Logout.php"><button class="btn btn-primary pull-right">Log out</button></a>
                        </div> -->
                    </nav>
                </div></div>
            <!-- /top navigation -->