<?php
    $title = "Terminal - UNIX Survival Guide by the Pina Koalas - ISTE240";
    $path = "./";
    $previousPage = "directories.php"; 
    $nextPage = "vim.php"; 
    include($path . "assets/inc/header.php");
?>
<div>
    <h1>Terminal</h1>
    <p>Like many other operating systems, Unix organizes its files and folders using a system called a directory tree which sometimes is also referred to as a directory structure, or directory hierarchy. At the top of the structure there is a folder called the root which is written as a forward slash and is the highest level of the structure. All other folders (also called directories) in this structure are located within that root folder. These folders can also contain folders, which explains why the system is sometimes referred to as a directory tree. Understand that this file system is shaped like an upside-down tree where the root is the tree trunk and all other folders are the branches that extend from it.</p>
    <p>The Root folder contains important folders such as the bin folder which contains binaries, or Unix commands, the mnt folder which shows any currently mounted drives like an external hard drive, and the Users folder. These folders may also house other folders such as the User's directory containing a folder name “Robert”, a Desktop folder, and a Downloads folder. This is how folders and files within a directory structure are organized.</p>
    <p>In order to navigate throughout your computer, you will need to know several commands such as “pwd”, “cd”, and “ls”. To understand what these commands mean; “pwd” is short for “print working directory”, “cd” is short for “change directory”, and “ls” is short for “list”. This is essentially the equivalent of clicking on a folder that is located on your Desktop, and opening it to see its contents. For example, if you have the folder “MyFolder” on your Desktop, double-clicking on it to open it is the same exact thing as typing “cd ~/Desktop/MyFolder” in the Terminal followed by typing ls to list what is contained within the folder. It is also important to note that “folder” and “directory” are able to be used interchangeably as they mean the same thing.</p>
</div>

<h1>Quiz Yourself!</h1>
<h2 class="quizheaderspace">Want to test your knowledge? Take the quiz!</h2>

<div class="flex-container">
<div>
    <form>
    <h4>The Root folder does not contain important folders: </h4>
        <div>
            <input type="radio" id="terminalq2a" name="root" value="terminalq2a">
            <label for="terminalq2a">True</label>
        </div>

        <div>
            <!-- Correct Answer -->
            <input type="radio" id="terminalq2b" name="root" value="terminalq2b">
            <label for="terminalq2b">False</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>
  <div>
    <form>
    <h4 id="terminalq1">To navigate throughout your computer, you can use commands such as:</h4>
        <div>
            <!-- Correct Answer -->
            <input type="radio" id="terminalq1a" name="navigate" value="terminalq1a">
            <label for="terminalq1a">“pwd”, “cd”, and “ls”</label>
        </div>

        <div>
            <input type="radio" id="terminalq1b" name="navigate" value="terminalq1b">
            <label for="terminalq1b">“pwd”, “mv”, and “ls”</label>
        </div>

        <div>
            <input type="radio" id="terminalq1c" name="navigate" value="terminalq1c">
            <label for="terminalq1c">“pwd”, “cd”, and “rm”</label>
        </div>

        <div>
            <input type="radio" id="terminalq1d" name="navigate" value="terminalq1d">
            <label for="terminalq1d">“pwd”, “cd”, and “ls”</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>

  <div>
    <form>
    <h4 id="terminalq2">What is “pwd” short for?</h4>
        <div>
            <input type="radio" id="terminalq2a" name="pwd" value="terminalq2a">
            <label for="terminalq2a">“print working directions”</label>
        </div>

        <div>
            <input type="radio" id="terminalq2b" name="pwd" value="terminalq2b">
            <label for="terminalq2b">“print work directory”</label>
        </div>

        <div>
            <!-- Correct Answer -->
            <input type="radio" id="terminalq2c" name="pwd" value="terminalq2c">
            <label for="terminalq2c">“print working directory”</label>
        </div>

        <div>
            <input type="radio" id="terminalq2d" name="pwd" value="terminalq2d">
            <label for="terminalq2d">“print work directions”</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>  

  <div>
  <form>
    <h4 id="terminalq3">“cd” is short for “change directory”: </h4>
        <div>
            <!-- Correct Answer -->
            <input type="radio" id="terminalq3a" name="change" value="terminalq3a">
            <label for="terminalq3a">True</label>
        </div>

        <div>
            <input type="radio" id="terminalq3b" name="change" value="terminalq3b">
            <label for="terminalq3b">False</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>

  <div>
  <form>
    <h4 id="terminalq4">The file system is shaped like a tree where the root is a branch: </h4>
        <div>
            <input type="radio" id="terminalq4a" name="branch" value="terminalq4a">
            <label for="terminalq4a">True</label>
        </div>

        <div>
            <!-- Correct Answer -->
            <input type="radio" id="terminalq4b" name="branch" value="terminalq4b">
            <label for="terminalq4b">False</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>
</div>

<?php
    include($path . "assets/inc/footer.php");
?>