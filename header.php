<?php

 require_once 'db_connect.php';

require_once 'head.php';

?>


    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    --> 
            <div class="logo">
                <a href="dashboard.php">
                <div class="logo-container">
                    <div class="row">
                        <div class="col-md-4">
                        <img src="assets/img/lpg.png" style="width: 60px;display: inline-block;" alt="Creative Tim Logo" rel="tooltip" title="<b>LPG</b> XYZ" data-placement="bottom" data-html="true">
</div>
<div class="col-md-8">
                <b class="simple-text">
                    LPG
                </b>
            </div>
        </div>
        
                </div>
            </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <?php
                    if(basename($_SERVER['REQUEST_URI']) === "dashboard.php"){
                        
                        echo '<li class="active">';
                    }else{
                        echo '<li>';
                     }

                    ?>
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>


                    <?php
                    if(basename($_SERVER['REQUEST_URI']) === "updateaccount.php"){
                        
                        echo '<li class="active">';
                    }else{
                        echo '<li>';
                     }

                    ?>
                        <a href="updateaccount.php">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li> <?php
                    if(basename($_SERVER['REQUEST_URI']) === "book.php"){
                        
                        echo '<li class="active">';
                    }else{
                        echo '<li>';
                     }

                    ?>
                        <a href="book.php">
                            <i class="material-icons">content_paste</i>
                            <p>Book Your Cylinder</p>
                        </a>
                    </li>
                     <?php
                    if(basename($_SERVER['REQUEST_URI']) === "newregister1.php"){
                        
                        echo '<li class="active">';
                    }else{
                        echo '<li>';
                     }

                    ?>
                        <a href="newregister1.php">
                            <i class="material-icons">library_books</i>
                            <p>Register new Connection</p>
                        </a>
                    </li>  
                    <?php
                    if(basename($_SERVER['REQUEST_URI']) === "maps.php"){
                        
                        echo '<li class="active">';
                    }else{
                        echo '<li>';
                     }

                    ?>
                        <a href="maps.php">
                            <i class="material-icons">location_on</i>
                            <p>Maps</p>
                        </a>
                    </li>
                <!--    <li>
                        <a href="./notifications.php">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="upgrade.php">
                            <i class="material-icons">unarchive</i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>-->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Dashboard </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <!--<li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>-->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <li>
                                    <div class="content">
                                        <?php if (isset($_SESSION['success'])) : ?>
                                            <div class="error success" >
                                                <h3>
                                                    <?php 
                                                    echo $_SESSION['success']; 
                                                    unset($_SESSION['success']);
                                                    ?>
                                                </h3>
                                            </div>
                                        <?php endif ?>

    <!-- logged in user information -->
                                        <?php  if (isset($_SESSION['username'])) : ?>
                                            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                                            <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                                        <?php endif ?>
                                    </div>
                                </li>
 <!-- Modal --> 
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </nav>
