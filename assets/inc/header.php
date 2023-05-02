<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@400;700&family=Montserrat:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src='assets/js/validate.js'></script>
    <title><?php echo $title ?></title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    
</head>
<body>
<div id="wrapper">

    <div class="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="history.php">History</a></li>
    
            <li class="dropdown"><a href="#">Files and Folders</a>
                <ul class="submenu">
                    <li class="dropdown"><a href="files.php">Files</a></li>
                    <li><a href="directories.php">Folders</a></li>
                    <li><a href="terminal.php">Terminal</a></li>
                    <li><a href="vim.php">VIM</a></li>
                </ul>
            </li> <!--end of files and folders li-->
    
            <li><a href="permissions.php">File Permissions</a></li>
    
            <li><a href="vocab.php">Vocab Index</a></li>
            <li><a href="faq.php">FAQ/Help</a></li>
        </uL>  <!--all menu items enclosed in here-->
    </div> <!--dropdown div end-->

    <div class="mobile-container">
        <!-- Top Navigation Menu -->
        <div class="topnav">
            <div id="myPages">
                <a href="index.php">Home</a>
                <a href="history.php">History</a>
                <a href="files.php">Files</a>
                <a href="directories.php">Folders</a>
                <a href="terminal.php">Terminal</a>
                <a href="vim.php">VIM</a>
                <a href="permissions.php">File Permissions</a>
                <a href="vocab.php">Vocab Index</a>
                <a href="faq.php">FAQ</a>
            </div>
        <a href="javascript:void(0);" class="icon" onclick="menuFunc()">
            <i class="fa fa-bars"></i>
        </a>
        </div>
        <!-- End of hamburger menu -->
    </div>

        <script>
        function menuFunc() {
        var x = document.getElementById("myPages");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
        }
        </script>

    <div class="content-block">
        <div class="textBlock">
