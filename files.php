<?php
    $title = "Files - UNIX Survival Guide by the Pina Koalas - ISTE240";
    $path = "./";
    include($path . "assets/inc/header.php");
?>
<div>
    <h1>Files</h1>
    <p>To create a blank file you can use the touch command followed by what you want to name the file and its extension:</br> touch file.txt</br> In order to move a file to a different location, use the mv command. This moves the file, not copies it, so you still have only one file instead of two. The mv command can also be used to rename a file by moving the file into the directory that it is in and giving it a different name:</br> mv oldfile newfile</br> This mv command renames oldfile to newfile.</br></p>
    <h2>Copying Files:</h2>
    <p>The “cp” command makes a copy of your file. It can be used to make copies of files in your directory or copy files from one directory into another.</br> Example: cp myfirstfile mysecondfile </br> This copies the contents of myfirstfile to a file named mysecondfile which means that there are now two separate files.</br></p>
    <h2>Removing Files:</h2>
    <p>The rm command is used to delete/remove a file. Here is an example where a file is both created and removed. </br> touch deletefile.txt</br> ls</br> rm deletefile.txt</br> ls</br> The first ls command is used to ensure that this file has been created and the second ls command is to see if the file has been deleted.</br></p>
    <h2>Searching File Contents:</h2>
    <p>Using less, you can search for a keyword in a text file. For example, in order to search for the word file in a file named myfile.txt, you would type:</br> less myfile.txt</br> While less is still running, type a forward slash followed by the word you are searching for:</br> /file</br> Less will find and highlight the keyword. If you type [n], it will search for where that word next occurs.</br></p>
</div>

<h1>Quiz Yourself!</h1>
<h2>Want to test your knowledge? Take the quiz!</h2>

<div class="flex-container">
<div>
    <form>
    <h4>The cp command makes a copy of your file:</h4>
        <div>
            <!-- Correct Answer -->
            <input type="radio" id="filesq2a" name="copy" value="filesq2a">
            <label for="filesq2a">True</label>
        </div>

        <div>            
            <input type="radio" id="filesq2b" name="copy" value="filesq2b">
            <label for="filesq2b">False</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>
  <div>
    <form>
    <h4>What can the mv command do?</h4>
        <div>
            <input type="radio" id="filesq1a" name="mvcommand" value="filesq1a">
            <label for="filesq1a">Only move a file to a different location</label>
        </div>
        <div>
            <input type="radio" id="filesq1b" name="mvcommand" value="filesq1b">
            <label for="filesq1b">Only rename a file</label>
        </div>
        <div>
            <!-- Correct Answer -->
            <input type="radio" id="filesq1c" name="mvcommand" value="filesq1c">
            <label for="filesq1c">Move and rename a file</label>
        </div>

        <div>
            <input type="radio" id="filesq1d" name="mvcommand" value="filesq1d">
            <label for="filesq1d">None of the above</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>

  <div>
  <form>
    <h4>The rm command is used to delete a file:</h4>
        <div>
            <!-- Correct Answer -->
            <input type="radio" id="filesq4a" name="rmcommand" value="filesq4a">
            <label for="filesq4a">True</label>
        </div>

        <div>
            <input type="radio" id="filesq4b" name="rmcommand" value="filesq4b">
            <label for="filesq4b">False</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>

  <div>
  <form>
    <h4>To create a blank file you can use the feel command:</h4>
        <div>
            <input type="radio" id="filesq4a" name="blankfile" value="filesq4a">
            <label for="filesq4a">True</label>
        </div>

        <div>
            <!-- Correct Answer -->
            <input type="radio" id="filesq4b" name="blankfile" value="filesq4b">
            <label for="filesq4b">False</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>

  <div>
  <form>
    <h4>You can search the contents of a file: </h4>
        <div>
            <!-- Correct Answer -->
            <input type="radio" id="filesq5a" name="searchcontent" value="filesq5a">
            <label for="filesq5a">True</label>
        </div>

        <div>
            <input type="radio" id="filesq5b" name="searchcontent" value="filesq5b">
            <label for="filesq5b">False</label>
        </div>
        <input class="submit" type="submit" value="Check answer!">
    </form>
  </div>
</div>

<?php
    include($path . "assets/inc/footer.php");
?>