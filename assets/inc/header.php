<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@400;700&family=Montserrat:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">
    <title><?php echo $title ?></title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <link rel="stylesheet" href="assets/css/styles.css">
    
</head>
<body>
<div id="wrapper">

    <div class="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="history.php">History</a></li>
    
            <li class="dropdown"><a href="#">Files and Folders</a>
                <ul class="submenu">
                    <li class="dropdown"><a href="files.php">Files</a>
                    <!-- <li class="dropdown"><a href="files.php">Files<span class="expand">»</span></a> -->
                        <!-- <ul class="submenu">
                            <li><a href=#>File page 1</a></li>
                            <li><a href=#>File page 2</a></li>
                            <li><a href=#>File page 3</a></li>
                        </ul> -->
                    </li>
            
                    <li><a href="directories.php">Folders</a>
                    <li><a href="terminal.php">Terminal</a>
                    <li><a href="vim.php">VIM</a>
                        <!-- <ul class="submenu">
                            <li><a href=#>What Are Directories?</a></li>
                            <li><a href=#>Making/Removing</a></li>
                            <li><a href=#>editing</a></li>
                            <li><a href=#>Moving</a></li>
                        </ul> -->
                    </li>
                </ul>
            </li> <!--end of files and filders li-->
    
            <li><a href="permissions.php">File Permissions</a></li>
    
            <li><a href="vocab.php">Vocab Index</a></li>
            <li><a href="faq.php">FAQ/Help</a></li>
        </uL>  <!--all menu items enclosed in here-->
    </div> <!--dropdown div end-->

    <div class="content-block">
        <div class="textBlock">
