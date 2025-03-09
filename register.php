<?php

session_start();

$Title = "Register";

include 'includes/header.php';

include 'includes/navbar.php';

    $messageText = '';
    $messageType = '';

    
    if($_SERVER['REQUEST_METHOD']== 'POST'){

        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($email) || empty($password)){
            // echo "Please Fill the form";
            $messageText = "Please fill the field";
            $messageType = "danger";
        }

        else { $_SESSION["users"][$email] = $password;


        $messageText = "Registered Success";
        $messageType = "success";
    }

    }

    ?>

    <?php if($messageText != ''){ ?>
        <div class="alert alert-<?php echo $messageType ?>" role="alert">
            <?php echo $messageText ?> 
        </div>
    <?php } ?>


    <form method="POST" action="">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
  
    <button type="submit" class="btn btn-primary">Register</button>
    </form>





    <?php
    include 'includes/footer.php';
    ?>