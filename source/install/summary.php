<!DOCTYPE html>
<html>
    <head>
        <title>PHP User Management - Shameem</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/ico" href="favicon.ico">

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../fonts/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">

        <link href="css/styles.css" rel="stylesheet">
        
    </head>

    <body>
        
        <!-- Pen Title-->
        <div class="pen-title">
            <h1><span>PHP User Management by <a href='https://shameem.me'>Shameem Reza</a></span>
        </div>
        
        <!-- Form Module-->
        <div class="module form-module">
            <!-- Login -->
            <div class="form" id="form-login">
                <?php 
                if(isset($_GET['error'])) {
                        if($_GET['error'] == 1 ) { echo "Could not connect to the database. Please check the connection details and try again."; }
                        if($_GET['error'] == 2 ) { echo "Cannot edit constants.php file. Please check the location, permissions or chmod permissions on your webserver."; }
                        if($_GET['error'] == 3 ) { echo "Cannot process or access the db_dump.sql file."; }
                } else if (isset($_GET['success'])) {
                        echo "Congratulations, you've successfully set up your database and created your admin account with the username <strong>". $_GET['username'] ."</strong>. <br><br>Rename or delete the install folder, then click <a href='../index.php'>here</a> to log in.";
                }
                ?>
            </div>
        </div>
        
        <div class="text-muted text-center" id="login-footer">
            <small><span id="year-copy"><?php echo date("Y"); ?></span> © <a href="https://shameem.me" target="_blank">PHP User Management - Shameem</a></small>
        </div>

        <!-- JavaScript Resources -->
        <script src="../js/jquery-2.1.3.min.js"></script>
        <script src="../js/jquery-ui.js"></script>
        <script src="../js/bootstrap.min.js"></script>

    </body>
</html>
