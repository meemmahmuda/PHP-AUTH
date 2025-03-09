<?php

session_start();

$Title = "Login";

include 'includes/header.php';

include 'includes/navbar.php';

    ?>



    
    <div class="mb-3">
        <h1 class="text-success">
            <?php 
                    if (isset($_SESSION["logged_in_user"])){
                        echo $_SESSION["logged_in_user"];
                    }
            ?>
        </h1>
    </div>


   





    <?php
    include 'includes/footer.php';
    ?>