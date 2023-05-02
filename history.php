<?php
    $title = "History - UNIX Survival Guide by the Pina Koalas - ISTE240";
    $path = "./";
    $previousPage = "index.php"; //index
    $nextPage = "files.php"; //files page
    include($path . "assets/inc/header.php");
?>
<div>
    <h1>History</h1>
    <?php
        include($path . "assets/inc/quizJump.php")
    ?>
    <p>The Unix operating system was created shortly after the Multiplexed Information and Computing Service (MULTICS) was. The MULTICS project which started in the mid 1960s, was worked on by General Electric, Massachusetts Institute for Technology, and Bell Laboratories. Ultimately, Bell Laboratories left the project in 1969.</p>
    <p>UNIX, a multi user computer operating system, was developed in the late 1960s by a team of computer scientists at AT&T Corporation’s Bell Laboratories. In 1969, computer scientists Ken Thompson and Dennis Ritchie, who wrote the first C compiler, led the team that created the first version of UNIX on a PDP-7 minicomputer. The PDP-7 minicomputer was chosen primarily due to Thompson being familiar with the system since working on it was a hobby of his.</p>
    <p>Thompson had liked the potential of MULTICS, but felt that the same thing could essentially be done in a much simpler way. He wrote Unix’s first version in 1969, and named it Uniplexed Operating and Computing System (UNICS). The name ultimately stuck and eventually got shortened to Unix. By the late 1970s, after the initial creation of UNIX, the team adapted it for another computer and they ported it to the PDP-11. This was the first of what would eventually be many ports of UNIX.</p>
    <p>In the late 20th century, UNIX was used for things such as workstations, Internet servers, and mainframe computers. UNIX is said to be an open system since primary features were its simplicity and portability, meaning that it was able to be used on a variety of different systems. UNIX also was good for multitasking, multi-user capabilities, and had a hierarchical file system.</p>
    <p>One of the biggest reasons Unix is so popular is because of its networking capability. With Unix, networking capability is part of the operating system and is not additional software that needs to be purchased, unlike with some other operating systems. This means that Unix is ideal for connecting to the Internet and world wide email. Since Unix was developed by many different people each with varying needs, it has become an operating system that is incredibly easy to adapt and flexible.</p>
    <p>After Thompson left Bell Laboratories, he taught a UNIX course in the mid-1970s at the University of California at Berkeley. This allowed for students and professors to further enhance UNIX, which led to a version of UNIX called Berkeley Software Distribution (BSD) being created. This allowed many people to work on and develop the source code  and led to the creation of C shell, the vi editor, Sendmail, virtual memory, and TCP/IP support.</p>
    <p>Since AT&T continued to work on UNIX, they released a new version of UNIX called System V in 1983. Other companies such as Sun Microsystems, Inc., and Silicon Graphics, Inc., also created UNIX versions as well as continued to develop UNIX which allowed for it to stay relevant. Since UNIX was incredibly successful, it was used as the inspiration for many free open-source operating systems, including Linux, which has mostly replaced UNIX in recent years.</p>
</div>

<h1 id="quizAnchor">Quiz Yourself!</h1>
<h2 class="quizheaderspace">Want to test your knowledge? Take the quiz!</h2>

<form method="post">
    <div class="flex-container">
        <div>
            <h4 id="historyq1">What does MULTICS stand for?</h4>
            <div>
                <input type="radio" id="historyq1a" name="multics" value="historyq1a">
                <label for="historyq1a">Multiplexed Informational and Computing System</label>
            </div>

            <div>
                <!-- Correct Answer -->
                <input type="radio" id="historyq1b" name="multics" value="historyq1b">
                <label for="historyq1b">Multiplexed Information and Computing Service</label>
            </div>

            <div>
                <input type="radio" id="historyq1c" name="multics" value="historyq1c">
                <label for="historyq1c">Multiplex Information and Computer Service</label>
            </div>

            <div>
                <input type="radio" id="historyq1d" name="multics" value="historyq1d">
                <label for="historyq1d">Multiplex Informational and Computing System</label>
            </div>
        </div>

        <div>
            <h4 id="historyq2">UNIX was developed in the late 1980s by a team of computer scientists:</h4>
                <div>
                    <input type="radio" id="historyq2a" name="dev" value="historyq2a">
                    <label for="historyq2a">True</label>
                </div>

                <div>
                    <!-- Correct Answer -->
                    <input type="radio" id="historyq2b" name="dev" value="historyq2b">
                    <label for="historyq2b">False</label>
                </div>
        </div>

        <div>
            <h4 id="historyq3">Who led the team that created UNIX?</h4>
                <div>
                    <input type="radio" id="historyq3a" name="team" value="historyq3a">
                    <label for="historyq3a">Ken Thomas and Dennis Richard</label>
                </div>

                <div>
                    <input type="radio" id="historyq3b" name="team" value="historyq3b">
                    <label for="historyq2b">Ken Richard and Dennis Thomas</label>
                </div>

                <div>
                    <!-- Correct Answer -->
                    <input type="radio" id="historyq3c" name="team" value="historyq3c">
                    <label for="historyq3c">Ken Thompson and Dennis Ritchie</label>
                </div>

                <div>
                    <input type="radio" id="historyq3d" name="team" value="historyq3d">
                    <label for="historyq3d">Ken Ritchie and Dennis Thompson</label>
                </div>
        </div>  

        <div>
            <h4 id="historyq4">UNIX has a hierarchical file system:</h4>
            <div>
                <!-- Correct Answer -->
                <input type="radio" id="historyq4a" name="hierarchy" value="historyq4a">
                <label for="historyq4a">True</label>
            </div>

            <div>
                <input type="radio" id="historyq4b" name="hierarchy" value="historyq4b">
                <label for="historyq4b">False</label>
            </div>
        </div>

        <div>
            <h4 id="historyq5">Unix is an operating system that is not flexible:</h4>
            <div>
                <input type="radio" id="historyq5a" name="flexible" value="historyq5a">
                <label for="historyq5a">True</label>
            </div>

            <div>
                <!-- Correct Answer -->
                <input type="radio" id="historyq5b" name="flexible" value="historyq5b">
                <label for="historyq5b">False</label>
            </div>
        </div>
    </div><!-- end flex container -->
    <input class="submit" type="submit" value="Check answers!">
</form>

<?php
    include($path . "assets/inc/footer.php");
?>
