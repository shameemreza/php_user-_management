<?php 
include("includes/controller.php");
$pagename = 'help';
$container = '';
if(!$session->isAdmin()){
    header("Location: ".$configs->homePage());
    exit;
}
else{
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP User Management - Shameem</title>
        <meta charset="UTF-8">
        <meta name="author" content="Shameem Reza">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="fonts/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">

        <link href="css/navigation.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">  
        
    </head>
    <body>
        <!-- Page Wrapper -->
        <div id="page-wrapper">

            <!-- Side Menu -->
            <nav id="side-menu" class="navbar-default navbar-static-side" role="navigation">
                <div id="sidebar-collapse">
                    <div id="logo-element">
                        <a class="logo" href="index.php">
                            <span class="logo-full">Admin</span>
                        </a>
                    </div>
                    <?php include('navigation.php'); ?>
                </div>
            </nav>
            <!-- END Side Menu -->

            <?php include('top-navbar.php'); ?>        

            <!-- Page Content -->
            <div id="page-content" class="gray-bg">

                <!-- Title Header -->
                <div class="title-header white-bg">
                    <i class="fas fa-question-circle"></i>
                    <h2>Help / Support</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            Help / Support
                        </li>
                    </ol>
                </div>
                <!-- END Title Header -->
             
                <div class="row">                                     
                    <div class="col-sm-8 col-md-9">
                        <div class="panel">
                            <div class="panel-body">
                                <h4><strong>PHP User Management</strong></h4>
                                Designed and Coded by <a href="https://shameem.me" target="_blank">Shameem Reza</a>.<br><br>
                                If you need to contact with me about an issue with the code, you can ask me question <a href="https://github.com/shameemreza/askme" target="_blank">here</a>.<br><br>
                                <h4><strong>Disclaimer</strong></h4>
                                This source code is intended for general use and no warranty is implied for suitability to any given task. I hold no responsibility for your setup or any damage done while using/installing/modifying this source code or any of its plugins. 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <div class="panel">
                            <div class="panel-body">
                                <h4><strong>Stats</strong></h4>
                                <?php 
                                echo "<br>\nVersion: ".$configs->getConfig('Version')."<br>\n<br>\n";
                                $result = $db->query('select version()')->fetchColumn();
                                echo "MySQL Version : ".$result."<br>\n";
                                echo "PHP Version : ".phpversion()."<br>\n<br>\n";
                                ?>
                                Changelog : <a href="../changelog.txt" target="_blank">Changelog</a>
                            </div>
                        </div>
                    </div>
                </div>

                <footer>Copyright &copy; <?php echo date("Y"); ?> <a href="https://shameem.me" target="_blank">Shameem Reza</a> - All rights reserved.</footer>

            </div>
            <!-- END Page Content -->

            <?php include('rightsidebar.php'); ?>

        </div>
        <!-- END Page Wrapper -->
        
        <!-- Scroll to top -->
        <a href="#" id="to-top" class="to-top"><i class="fas fa-angle-double-up"></i></a>

        <!-- JavaScript Resources -->
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="js/php_user_management.js"></script>

    </body>
</html>
<?php
}
?>
