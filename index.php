<?php
    $title = "UNIX Survival Guide by the Pina Koalas - ISTE240";
    $path = "./";
    include($path . "assets/inc/header.php");
?>

    <div id="homepage-block">
        <h1>Ready to Learn Unix?</h1>
        <button class="hoverbutton" onclick="buttonFunction()">Get Started!</button>

<script>
    function buttonFunction() {
        location.replace("https://solace.ist.rit.edu/~iste240t52/ISTE240UnixProject/history.php")
    }
</script>

        <div id="homepage-h2"><h2>Know what you're looking for? Check out the topics at the top of the page.</h2></div>
    </div>

<?php
    include($path . "assets/inc/footer.php");
?>