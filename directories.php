<?php
    $title = "Directories - UNIX Survival Guide by the Pina Koalas - ISTE240";
    $path = "./";
    $previousPage = "files.php"; 
    $nextPage = "terminal.php"; 
    include($path . "assets/inc/header.php");
?>
<div>
    <h1>Directories</h1>
    <?php
        include($path . "assets/inc/quizJump.php")
    ?>
    <p>In Linux and Unix Operating Systems, a command starts with the actual command itself, such as: </br> ls </br> If you type in the ls command, a list of files, folders, and directories will be displayed. </br> Many commands also have a variety of options. For example, the ls command has many options, such as the -a which would  list all the files, including the ones that begin with a period which keeps them slightly hidden. </br> If you add a -la to an ls, it will list all of the files using option grouping in a longer format. </br> You can also add arguments at the end of a command, such as when you want to get a list of files, folders, and directories from within a specific directory. For example: </br> ls -la / </br> This command would list the files, folders, and directories from the root of the tree structure. </br></p>
    <h2>Making Directories:</h2>
    <p>The mkdir command is used to create a new directory followed by the name you would like to give the directory:</br>mkdir mydirectory</br></p>
    <h2>Removing Directories:</h2>
    <p>The rmdir command is used to remove a directory instead of a file. It is very important that you make sure that the directory is empty first, as Unix will not let a directory that still has files in it to be removed. For example:</br> mkdir mydirectory</br> ls</br> rmdir mydirectory</br> ls</br></p>
    <h2>Root Directory:</h2>
    <p>UNIX directory names start with a forward slash (/). For example, a pathname that consists of 4 directories could look like this: /users/bob/classes/math.
    <ul class="formatlist">
        <li>The root directory is only a forward slash (/)</li>
        <li>The directory you are in currently is represented by “.”</li>
        <li>Your home directory is represented by a tilde (~)</li>
        <li>Other peoples home directory is shortened to  ~username, so John’s home directory would be displayed as  ~john</li>
        <li>. represents the current directory</li>
        <li>For example,  "ls ." would list the contents of the current directory</li>
        <li>..  represents the directory one level up from the current one</li>
        <li>"cd .." changes to the directory that is one level up from the current directory</li>
    </ul>    
</div>

<h1 id="quizAnchor">Quiz Yourself!</h1>
<h2 class="quizheaderspace">Want to test your knowledge? Take the quiz!</h2>

<div class="flex-container">
<div>
    <form method="post">
    <h4 id="directq1">Directories and Folders are the same thing:</h4>
        <div>
            <!-- Correct Answer -->
            <input type="radio" id="directq1a" name="directfold" value="directq1a">
            <label for="directq1a">True</label>
        </div>

        <div>            
            <input type="radio" id="directq2b" name="directfold" value="directq1b">
            <label for="directq1b">False</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>
  <div>
    <form method="post">
    <h4 id="directq2">The ls command will list files, folders, and display directories:</h4>
        <div>
            <!-- Correct Answer -->
            <input type="radio" id="directq2a" name="lscommand" value="directq2a">
            <label for="directq2a">True</label>
        </div>

        <div>            
            <input type="radio" id="directq2b" name="lscommand" value="directq2b">
            <label for="directq2b">False</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>

  <div>
  <form method="post">
    <h4 id="directq3">If you add a -la to an ls, the result will be the exact same as an ls command:</h4>
        <div>
            <input type="radio" id="directq3a" name="lsacommand" value="directq3a">
            <label for="directq3a">True</label>
        </div>

        <div>
            <!-- Correct Answer -->
            <input type="radio" id="directq3b" name="lsacommand" value="directq3b">
            <label for="directq3b">False</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>

  <div>
  <form method="post">
    <h4 id="directq4">The mkdir command is used to create a new directory:</h4>
        <div>
            <!-- Correct Answer -->
            <input type="radio" id="directq4a" name="mkdir" value="directq4a">
            <label for="directq4a">True</label>
        </div>

        <div>
            <input type="radio" id="directq4b" name="mkdir" value="directq4b">
            <label for="directq4b">False</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>

  <div>
  <form method="post">
    <h4 id="directq5">The rm command is used to remove a directory:</h4>
        <div>
            <input type="radio" id="directq5a" name="rmdirect" value="directq5a">
            <label for="directq5a">True</label>
        </div>

        <div>
            <!-- Correct Answer -->
            <input type="radio" id="directq5b" name="rmdirect" value="directq5b">
            <label for="directq5b">False</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>
</div>

<?php
    include($path . "assets/inc/footer.php");
?>
