<?php
    $title = "UNIX Survival Guide by the Pina Koalas - ISTE240";
    $path = "./";
    include($path . "assets/inc/header.php");
?>

    <div id="homepage-block">
        <div class="siteTitle">
            <h1>Unix Survival Guide</h1>
            <h2>Brought to you by</h2>
            <img src="assets/images/pinaKoalaLogo.png" alt="Pina Koalas Logo">                                                         
        </div> <!-- end .siteTitle -->
        
        <h2 id="readyToLearn">Ready to Learn Unix?</h2>
        <button class="hoverbutton" onclick="buttonFunction()">Get Started!</button>

<script>
    function buttonFunction() {
        location.replace("https://solace.ist.rit.edu/~iste240t52/ISTE240UnixProject/history.php")
    }
</script>

        <div id="homepage-h2"><h2>Know what you're looking for? Check out the topics at the top of the page.</h2></div>
    </div>

<?php
    include($path . "assets/inc/footer_no_nextprevious.php");
?>
