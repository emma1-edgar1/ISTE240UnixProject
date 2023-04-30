<?php
    $title = "Vocab - UNIX Survival Guide by the Pina Koalas - ISTE240";
    $path = "./";
    include($path . "assets/inc/header.php");
?>
<script>
    function validate() {
        errormsg = "";

        sortBy = document.forms[0].sort.value;

        if(sortBy == ""){
            errormsg += "Select a search option\n";
        }

        // return 
        if(errormsg != ""){
            alert(errormsg);
            return false;
        }
        else{
            return true;
        }
    }
</script>
<?php

    // variables 
    $sql = "";
    $sort = "default";
    $searchBy = "";

    $test = "!";

    // validate form 

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
            <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validate()"> 
                <fieldset>
                    <input type="radio" name="sort" value="default" id="default">
                    <label for="default">Default</label>

                    <input type="radio" name="sort" value="alphabetical" id="alphabetical">
                    <label for="alphabetical">A-Z</label>
                </fieldset>

                <input type="text" id="search" name="search" placeholder="Search for a term (optional)">

                <input type="submit" value="Enter">
            </form>
        </div><!--end of sortFormBox-->
        <div class="vocabBox">
        <?php 
            if(empty($records)){
                echo "<p>No results found.</p>";
            }
            else{
                foreach($records as $record){
                    echo "<div class = 'termBox'";
                    echo "<div class='term'>" . $record['term'] . "</div>";
                    echo "<div class='description'>" . $record['description'] . "</div>";
                    echo "</div>";
                }
            }
        ?>
        </div>
<?php
    include($path . "assets/inc/footer_no_nextprevious.php");
?>
