<?php
    $title = "VIM - UNIX Survival Guide by the Pina Koalas - ISTE240";
    $path = "./";
    $previousPage = "terminal.php"; 
    $nextPage = "permissions.php"; 
    include($path . "assets/inc/header.php");

    // form sanitization method
    function sanitize($str){
        $str = trim($str); 
        $str = strip_tags($str);
        $str = htmlentities($str);
        return $str;
    }

    if(!empty($_POST['three']) && !empty($_POST['default']) && !empty($_POST['leave']) && !empty($_POST['enter']) && !empty($_POST['line'])){
        $three = sanitize($_POST['three']);
        $default = sanitize($_POST['default']);
        $leave = sanitize($_POST['leave']);
        $enter = sanitize($_POST['enter']);
        $line = sanitize($_POST['line']);

        $three = filter_var($three, FILTER_SANITIZE_STRING);
        $default = filter_var($default, FILTER_SANITIZE_STRING);
        $leave = filter_var($leave, FILTER_SANITIZE_STRING);
        $enter = filter_var($enter, FILTER_SANITIZE_STRING);
        $line = filter_var($line, FILTER_SANITIZE_STRING);
    }
?>
<div>
    <h1>VIM</h1>
    <?php
        include($path . "assets/inc/quizJump.php")
    ?>
    <p>VIM is a text editor that pairs with Unix. </br> create/open a file: </br> To create or open a file, type: “vim filename” (ie vim index.html)</br> Example: vim index.html </br> The 3 Important Modes: </br> There are 3 important VIM modes: normal, insert, and command.</br> Normal is the default mode and the mode you start in. It is for navigating and simple editing. </br>Insert is the mode explicitly for inserting and modifying text.</br> How to use:</br> With a file open, press i to enter into insert mode. The file can now be modified. </br> To leave insert mode, press the ESC key. </br> When you are done inserting into a file, and have left insert mode, type :wq or :x! To save and exit to the command line.</br> Or, if you do not want to save, exit with :q!</br> Command mode is the command line used for operations like saving and exiting.</br> A useful command mode tool is text replacement (10)</br> Example: :%s/hello/bye/g </br> : enters command mode </br> % denotes that the change will take place across all lines </br> s means substitute </br> /hello is a regular expression to find ‘hello’ </br> /bye/ is a regular expression to replace things with ‘bye’</br> /g means global, allowing the change to execute over multiple lines</br></p>
    <h2>Navigation in VIM</h2>
    <p>One way to navigate around VIM is to use arrow keys. But, the bigger the program is, the less convenient this is.</br> There are many shortcuts to navigate in VIM:</br> :set number - enables line number</br> :# - moves your cursor to line number #</br> :$ - moves your cursor  to the end of the file</br> $ - moves your cursor  to the end of the current line </br></p>
    <h2>Editing in VIM</h2>
    <p>There are many shortcuts to edit in VIM: </br> Quickly double click D - delete the current line </br> Press U - undo</br> Press V + use the arrow keys to move the cursor - highlights text </br> Press Y - copy </br> Press O - create new line and enter insert mode (note: press ESC to go back to normal mode)</br> Press P - paste </br></p>
    <h2>Searching in VIM</h2>
    <p>To search in VIM, type :/ followed by the word or phrase you are looking for</br> Press N (for “next”) to parse through the search results </br></p>

</div>

<h1 id="quizAnchor">Quiz Yourself!</h1>
<h2 class="quizheaderspace">Want to test your knowledge? Take the quiz!</h2>

<form method="post" action = "<?php echo $_SERVER['PHP_SELF']; ?>" class="quizForm" onsubmit="return validateVim();">
    <div class="flex-container">
        <div>
            <h4 id="vimq1">What are the three important VIM modes?</h4>
            <div>
                <!-- Correct Answer -->
                <input type="radio" id="vimq1a" name="three" value="vimq1a">
                <label for="vimq1a">normal, insert, and command</label>
            </div>

            <div>
                <input type="radio" id="vimq1b" name="three" value="vimq1b">
                <label for="vimq1b">normal, insertion, and command</label>
            </div>

            <div>
                <input type="radio" id="vimq1c" name="three" value="vimq1c">
                <label for="vimq1c">normal, insert, and comment</label>
            </div>

            <div>
                <input type="radio" id="vimq1d" name="three" value="vimq1d">
                <label for="vimq1d">new, insert, and command</label>
            </div>
        </div>

        <div>
            <h4 id="vimq2">Normal is the default mode and the mode you start in:</h4>
            <div>
                <!-- Correct Answer -->
                <input type="radio" id="vimq2a" name="default" value="vimq2a">
                <label for="vimq2a">True</label>
            </div>

            <div>            
                <input type="radio" id="vimq2b" name="default" value="vimq2b">
                <label for="vimq2b">False</label>
            </div>
        </div>

        <div>
            <h4 id="vimq3">What key do you press to leave insert mode?</h4>
            <div>
                <input type="radio" id="vimq3a" name="leave" value="vimq3a">
                <label for="vimq3a">Press the CTRL key</label>
            </div>

            <div>
                <!-- Correct Answer -->
                <input type="radio" id="vimq3b" name="leave" value="vimq3b">
                <label for="vimq3b">Press the ESC key</label>
            </div>

            <div>            
                <input type="radio" id="vimq3c" name="leave" value="vimq3c">
                <label for="vimq3c">Press the ENTER key</label>
            </div>

            <div>
                <input type="radio" id="vimq3d" name="leave" value="vimq3d">
                <label for="vimq3d">Press the TAB key</label>
            </div>
        </div>  

        <div>
            <h4 id="vimq4">To enter insert mode, you press press n:</h4>
            <div>
                <input type="radio" id="vimq4a" name="enter" value="vimq4a">
                <label for="vimq4a">True</label>
            </div>

            <div>
                <!-- Correct Answer -->
                <input type="radio" id="vimq4b" name="enter" value="vimq4b">
                <label for="vimq4b">False</label>
            </div>
        </div>

        <div>
            <h4 id="vimq5">:# - moves your cursor to line number #:</h4>
            <div>
                <!-- Correct Answer -->
                <input type="radio" id="vimq5a" name="line" value="vimq5a">
                <label for="vimq5a">True</label>
            </div>

            <div>
                <input type="radio" id="vimq5b" name="line" value="vimq5b">
                <label for="vimq5b">False</label>
            </div>
        </div>
    </div><!-- end flex container -->
    <input class="submit" type="submit" value="Check answers!">
</form>

<?php
    include($path . "assets/inc/footer.php");
?>
