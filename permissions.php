<?php
    $title = "Permissions - UNIX Survival Guide by the Pina Koalas - ISTE240";
    $path = "./";
    $previousPage = "vim.php"; 
    $nextPage = "vocab.php"; 
    include($path . "assets/inc/header.php");
?>

<div>
    <h1>Permissions</h1>
    <p>UNIX commands allow you to set permissions for every file which allows you to control who can read, write, or view a file on a Web page. You are automatically the owner of files you create so unless you give permission for others to edit or change a file, they are unable to do so.</p>
    <h2>The three actions you can perform a file:</h2>
    <ul class="formatlist">
        <li>read (view the file)</li>
        <li>write (create, edit or delete)</li>
        <li>execute (run a script/program or enter a directory)</li>
    </ul>    
    <p>-- Below is a UNIX string of information that shows an example of what permissions for a file look like:</br>-rwxr-xr-x</br></p>
    <ul class="formatlist">
        <li>The first three positions after the "-" are the owner's permissions. The “r” indicates the owner is able to read the file, the “w” indicates the owner can write the file, and the “x” indicates that the owner is able to execute the file.</li>
        <li>The next three positions are the group permissions. In the example above, the group members can read and execute it, but not write to it.</li>
        <li>The last three positions are for everyone else. In order for your Web pages to be viewed using a browser, you need to ensure that this permission is  set to "read."</li>
    </ul>   
</div>

<h1>Quiz Yourself!</h1>
<h2 class="quizheaderspace">Want to test your knowledge? Take the quiz!</h2>

<div class="flex-container">

  <div>
    <form method="post">
    <h4 id="permissionsq1">What are the three permission types?</h4>
        <div>
            <input type="radio" id="permissionsq1a" name="threepermissions" value="permissionsq1a">
            <label for="permissionsq1a">read, write, and examine</label>
        </div>
        <div>
            <!-- Correct Answer -->
            <input type="radio" id="permissionsq1b" name="threepermissions" value="permissionsq1b">
            <label for="permissionsq1b">read, write, and execute</label>
        </div>
        <div>            
            <input type="radio" id="permissionsq1c" name="threepermissions" value="permissionsq1c">
            <label for="permissionsq1c">reach, write, and examine</label>
        </div>

        <div>
            <input type="radio" id="permissionsq1d" name="threepermissions" value="permissionsq1d">
            <label for="permissionsq1d">read, writer, and execute</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>

  <div>
    <form method="post">
    <h4 id="permissionsq2">The first three positions after the "-" are the owner's permissions:</h4>
        <div>
            <!-- Correct Answer -->
            <input type="radio" id="permissionsq2a" name="firstthree" value="permissionsq2a">
            <label for="permissionsq2a">True</label>
        </div>

        <div>            
            <input type="radio" id="permissionsq2b" name="firstthree" value="permissionsq2b">
            <label for="permissionsq2b">False</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>

  <div>
  <form method="post">
    <h4 id="permissionsq3">The three middle positions are the group permissions:</h4>
        <div>
            <!-- Correct Answer -->
            <input type="radio" id="permissionsq3a" name="midthree" value="permissionsq3a">
            <label for="permissionsq3a">True</label>
        </div>

        <div>
            <input type="radio" id="permissionsq3b" name="midthree" value="permissionsq3b">
            <label for="permissionsq3b">False</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>

  <div>
    <form method="post">
    <h4 id="permissionsq4">Who are the last three positions for?</h4>
        <div>
            <input type="radio" id="permissionsq4a" name="lastthree" value="permissionsq4a">
            <label for="permissionsq4a">The owner</label>
        </div>
        <div>
            <input type="radio" id="permissionsq4b" name="lastthree" value="permissionsq4b">
            <label for="permissionsq4b">The group</label>
        </div>
        <div>            
            <input type="radio" id="permissionsq4c" name="lastthree" value="permissionsq4c">
            <label for="permissionsq4c">The owner and the group</label>
        </div>
        <div>
            <!-- Correct Answer -->
            <input type="radio" id="permissionsq4d" name="lastthree" value="permissionsq4d">
            <label for="permissionsq4d">Everyone else</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>

  <div>
  <form method="post">
    <h4 id="permissionsq5a">You are not automatically the owner of files you create:</h4>
        <div>            
            <input type="radio" id="permissionsq5a" name="fileowner" value="permissionsq5a">
            <label for="permissionsq5a">True</label>
        </div>

        <div>
            <!-- Correct Answer -->
            <input type="radio" id="permissionsq5b" name="fileowner" value="permissionsq5b">
            <label for="permissionsq5b">False</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>
</div>

<?php
    include($path . "assets/inc/footer.php");
?>