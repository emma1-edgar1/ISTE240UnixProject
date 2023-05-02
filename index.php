<?php
    $title = "UNIX Survival Guide by the Pina Koalas - ISTE240";
    $path = "./";
    $nextPage = "history.php"; 
    include($path . "assets/inc/header.php");
?>

    <div id="homepage-block">
        <div class="siteTitle">
            <h1>Unix Survival Guide</h1>
            <h2>Brought to you by</h2>
            <img src="assets/images/pinaKoalaLogo.png" alt="Pina Koalas Logo" id="teamlogo">                                                         
        </div> <!-- end .siteTitle -->
        
        <h2 id="readyToLearn">Ready to Learn Unix?</h2>
        <a href="<?php echo $nextPage?>" class="getstarted">Get Started!</a>

        <div id="homepage-h2"><h2>Know what you're looking for? Check out the topics at the top of the page.</h2></div>
    </div>

<?php
    include($path . "assets/inc/footer_no_nextprevious.php");
?>
