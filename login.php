<?php

session_start();

$Title = "Login"

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

        if(isset($_SESSION["users"][$email])){
            $user_email = $_SESSION["users"][$email];

            if($user_email == $password){
                $messageText = "Login Success";
                $messageType = "success";

                $_SESSION['logged_in_user'] = "Hello you are logged in";

                header("Location: dashboard.php");
            }
            else{
                $messageText = "Invalid Email or Password";
                $messageType = "danger";
            }
        }

        else{
        $messageText = "Invaliv Email or Password";
        $messageType = "danger";
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

    <button type="submit" class="btn btn-primary">Login</button>
    </form>





    <?php
    include 'includes/footer.php';
    ?>