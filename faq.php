<?php
    $title = "FAQ - UNIX Survival Guide by the Pina Koalas - ISTE240";
    $path = "./";
    include($path . "assets/inc/header.php");
?>
<div>
    <h1>Frequently Asked Questions</h1>
    
    <h2>What is UNIX?</h2>
    <p>UNIX, a multi user computer operating system, was developed in the late 1960s by a team of computer scientists at AT&T Corporation’s Bell Laboratories.</p>

    <h2>Why is UNIX used?</h2>
    <p>UNIX is used because it is good for multitasking, multi-user capabilities, and has a hierarchical file system. One of the biggest reasons Unix is so popular is because of its networking capability. Since UNIX was incredibly successful, it was used as the inspiration for many free open-source operating systems, including Linux, which has largely replaced UNIX in recent years.</p>

    <h2>What is UNIX used for?</h2>
    <p>In the late 20th century, UNIX was used for things such as workstations, Internet servers, and mainframe computers. UNIX is said to be an open system since primary features were its simplicity and portability, meaning that it was able to be used on a variety of different systems.</p>

    <h2>How do you create, copy, and remove files?</h2>
    <ul class="formatlist">
        <li>To create a blank file you can use the touch command followed by what you want to name the file and its extension.</li>
        <li>The “cp” command makes a copy of your file. It can be used to make copies of files in your directory or copy files from one directory into another.</li>
        <li>The rm command is used to delete/remove a file. Here is an example where a file is both created and removed.</li>
    </ul>    

    <h2>How do you make or remove a directory?</h2>
    <p>The mkdir command is used to create a new directory followed by the name you would like to give the directory. The rmdir command is used to remove a directory instead of a file. It is very important that you make sure that the directory is empty first, as Unix will not let a directory that still has files in it to be removed.</p>

    <h2>What is a directory tree?</h2>
    <p>Unix organizes its files and folders using a system called a directory tree. At the top of the structure there is a folder called the root which is the highest level of the structure. All other folders (also called directories) in this structure are located within that root folder. This file system is shaped like an upside-down tree where the root is the tree trunk and all other folders are the branches that extend from it so that is why it is sometimes referred to as a directory tree.</p>

    <h2>What are the three actions you can perform on a file?</h2>
    <p>Read (view the file), write (create, edit or delete), execute (run a script/program or enter a directory).</p>

    <h2>Who has what permissions on a file?</h2>
    <ul class="formatlist">
        <li>The first three positions after the "-" are the owner's permissions. The “r” indicates the owner is able to read the file, the “w” indicates the owner can write the file, and the “x” indicates that the owner is able to execute the file.</li>
        <li>The next three positions are the group permissions. In the example above, the group members can read and execute it, but not write to it.</li>
        <li>The last three positions are for everyone else. In order for your Web pages to be viewed using a browser, you need to ensure that this permission is set to "read."</li>
    </ul>   
</div>
<?php
    include($path . "assets/inc/footer.php");
?>