<?php
    $title = "Terminal - UNIX Survival Guide by the Pina Koalas - ISTE240";
    $path = "./";
    $previousPage = "directories.php"; 
    $nextPage = "vim.php"; 
    include($path . "assets/inc/header.php");

    // form sanitization method
    function sanitize($str){
        $str = trim($str); 
        $str = strip_tags($str);
        $str = htmlentities($str);
        return $str;
    }

    if(!empty($_POST['root']) && !empty($_POST['navigate']) && !empty($_POST['pwd']) && !empty($_POST['change']) && !empty($_POST['branch'])){
        $root = sanitize($_POST['root']);
        $navigate = sanitize($_POST['navigate']);
        $pwd = sanitize($_POST['pwd']);
        $change = sanitize($_POST['change']);
        $branch = sanitize($_POST['branch']);

        $root = filter_var($root, FILTER_SANITIZE_STRING);
        $navigate = filter_var($navigate, FILTER_SANITIZE_STRING);
        $pwd = filter_var($pwd, FILTER_SANITIZE_STRING);
        $change = filter_var($change, FILTER_SANITIZE_STRING);
        $branch = filter_var($branch, FILTER_SANITIZE_STRING);
    }
?>
<div>
    <h1>Terminal</h1>
    <?php
        include($path . "assets/inc/quizJump.php")
    ?>
    <p>Like many other operating systems, Unix organizes its files and folders using a system called a directory tree which sometimes is also referred to as a directory structure, or directory hierarchy. At the top of the structure there is a folder called the root which is written as a forward slash and is the highest level of the structure. All other folders (also called directories) in this structure are located within that root folder. These folders can also contain folders, which explains why the system is sometimes referred to as a directory tree. Understand that this file system is shaped like an upside-down tree where the root is the tree trunk and all other folders are the branches that extend from it.</p>
    <p>The Root folder contains important folders such as the bin folder which contains binaries, or Unix commands, the mnt folder which shows any currently mounted drives like an external hard drive, and the Users folder. These folders may also house other folders such as the User's directory containing a folder name “Robert”, a Desktop folder, and a Downloads folder. This is how folders and files within a directory structure are organized.</p>
    <p>In order to navigate throughout your computer, you will need to know several commands such as “pwd”, “cd”, and “ls”. To understand what these commands mean; “pwd” is short for “print working directory”, “cd” is short for “change directory”, and “ls” is short for “list”. This is essentially the equivalent of clicking on a folder that is located on your Desktop, and opening it to see its contents. For example, if you have the folder “MyFolder” on your Desktop, double-clicking on it to open it is the same exact thing as typing “cd ~/Desktop/MyFolder” in the Terminal followed by typing ls to list what is contained within the folder. It is also important to note that “folder” and “directory” are able to be used interchangeably as they mean the same thing.</p>
</div>

<h1 id="quizAnchor">Quiz Yourself!</h1>
<h2 class="quizheaderspace">Want to test your knowledge? Take the quiz!</h2>

<form method="post" action = "<?php echo $_SERVER['PHP_SELF']; ?>" class="quizForm" onsubmit="return validateTerminal();">
    <div class="flex-container">
        <div>
            <h4 id="terminalq1">The Root folder does not contain important folders: </h4>
            <div>
                <input type="radio" id="terminalq1a" name="root" value="terminalq1a">
                <label for="terminalq1a">True</label>
            </div>

            <div>
                <!-- Correct Answer -->
                <input type="radio" id="terminalq1b" name="root" value="terminalq1b">
                <label for="terminalq1b">False</label>
            </div>
        </div>

        <div>
            <h4 id="terminalq2">To navigate throughout your computer, you can use commands such as:</h4>
            <div>
                <!-- Correct Answer -->
                <input type="radio" id="terminalq2a" name="navigate" value="terminalq2a">
                <label for="terminalq2a">“pwd”, “cd”, and “ls”</label>
            </div>

            <div>
                <input type="radio" id="terminalq2b" name="navigate" value="terminalq2b">
                <label for="terminalq2b">“pwd”, “mv”, and “ls”</label>
            </div>

            <div>
                <input type="radio" id="terminalq2c" name="navigate" value="terminalq2c">
                <label for="terminalq2c">“pwd”, “cd”, and “rm”</label>
            </div>

            <div>
                <input type="radio" id="terminalq2d" name="navigate" value="terminalq2d">
                <label for="terminalq2d">“pwd”, “cd”, and “ls”</label>
            </div>
        </div>

        <div>
            <h4 id="terminalq3">What is “pwd” short for?</h4>
            <div>
                <input type="radio" id="terminalq3a" name="pwd" value="terminalq3a">
                <label for="terminalq3a">“print working directions”</label>
            </div>

            <div>
                <input type="radio" id="terminalq3b" name="pwd" value="terminalq3b">
                <label for="terminalq3b">“print work directory”</label>
            </div>

            <div>
                <!-- Correct Answer -->
                <input type="radio" id="terminalq3c" name="pwd" value="terminalq3c">
                <label for="terminalq3c">“print working directory”</label>
            </div>

            <div>
                <input type="radio" id="terminalq3d" name="pwd" value="terminalq3d">
                <label for="terminalq3d">“print work directions”</label>
            </div>
        </div>  

        <div>
            <h4 id="terminalq4">“cd” is short for “change directory”: </h4>
            <div>
                <!-- Correct Answer -->
                <input type="radio" id="terminalq4a" name="change" value="terminalq4a">
                <label for="terminalq4a">True</label>
            </div>

            <div>
                <input type="radio" id="terminalq4b" name="change" value="terminalq4b">
                <label for="terminalq4b">False</label>
            </div>
        </div>

        <div>
            <h4 id="terminalq5">The file system is shaped like a tree where the root is a branch: </h4>
            <div>
                <input type="radio" id="terminalq5a" name="branch" value="terminalq5a">
                <label for="terminalq5a">True</label>
            </div>

            <div>
                <!-- Correct Answer -->
                <input type="radio" id="terminalq5b" name="branch" value="terminalq5b">
                <label for="terminalq5b">False</label>
            </div>
        </div>
    </div><!-- end flex container -->
    <input class="submit" type="submit" value="Check answers!">
</form>

<?php
    include($path . "assets/inc/footer.php");
?>
