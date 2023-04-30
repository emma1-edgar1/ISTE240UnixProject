<?php
    $title = "Vocab - UNIX Survival Guide by the Pina Koalas - ISTE240";
    $path = "./";
    include($path . "assets/inc/header.php");

    // variables 
    $sql = "";
    $sort = "default";
    $searchBy = "";

    $test = "!";

    // sort form - sanitze and set variables 
    if(!empty($_POST['sort'])){

        // sanitize 
        $sort = filter_var($_POST['sort'], FILTER_SANITIZE_STRING);

        // set query
        $test = "sort: " . $sort . " search: " . $searchBy;
    }
    if(!empty($_POST['search'])){
        $searchBy = filter_var($_POST['search'], FILTER_SANITIZE_STRING);
    }

    // connect to database
    include("./dbcon.php");

    // set sql statement 
    if($sort == "alphabetical"){
        if($searchBy != ""){
            $sql = "SELECT * FROM `vocabIndex` WHERE `term` = ? ORDER BY `term` ASC";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s",$searchBy);
        }
        else{
            $sql = "SELECT * FROM `vocabIndex` ORDER BY `term` ASC";
            $stmt = $conn->prepare($sql);
        }
    }
    elseif($sort == "default"){
        if($searchBy != ""){
            $sql = "SELECT * FROM `vocabIndex` WHERE `term` = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s",$searchBy);
        }
        else{
            $sql = "SELECT * FROM `vocabIndex`"; // default
            $stmt = $conn->prepare($sql);
        }
    }

    // execute sql and get data 
    $stmt->execute();
    $results = $stmt->get_result();
    while($row = $results->fetch_assoc()){
        $records[] = $row; 
    }
?>
        <h1>Vocab Index</h1>
        <div class="sortFormBox">
            <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> <!-- onsubmit="return validate()"-->
                <fieldset>
                    <input type="radio" name="sort" value="default" id="default" checked="checked">
                    <label for="default">Default</label>

                    <input type="radio" name="sort" value="alphabetical" id="alphabetical">
                    <label for="alphabetical">A-Z</label>
                </fieldset>

                <input type="text" id="search" name="search" placeholder="Search for a term...">

                <input type="submit" value="Enter">
            </form>
        </div><!--end of sortFormBox-->
        <div class="vocabBox">
        <?php 
            foreach($records as $record){
                echo "<div class='term'>" . $record['term'] . "</div>";
                echo "<div class='description'>" . $record['description'] . "</div>";
            }
        ?>
        </div><!--end of vocabBox-->
        <!--
        <div id="vocab-grid">
            <h2>ls</h2>
            <p>Short for list, this command is used to list all the files and folders in your current directory</p>

            <div class="compound-vocab-h2"><h2 class="greyout-h2">ls</h2><h2>-la</h2></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore sunt, molestiae veritatis quaerat</p>

            <div class="compound-vocab-h2"><h2 class="greyout-h2">ls</h2><h2>-a</h2></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam sunt veritatis, mollitia distinctio ut</p>
        </div> --><!--end of vocab-grid-->

<?php
    include($path . "assets/inc/footer_no_nextprevious.php");
?>
