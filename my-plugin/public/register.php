<?php
    if(!defined('ABSPATH')){
        header("Location: /youtube");
        die();
    }
    
    if(isset($_POST['register'])){
        global $wpdb;
        $fname = $wpdb->escape($_POST['user_fname']);
        $lname = $wpdb->escape($_POST['user_lname']);
        $username =$wpdb->escape($_POST['username']);
        $email =$wpdb->escape($_POST['user_email']);
        $password = $wpdb->escape($_POST['user-pass']);
        $con_pass = $wpdb->escape($_POST['user-con-pass']);

        if($password == $con_pass){
            // wp_insert_user
            // wp_create_user

            $result = wp_create_user($username, $password, $email);

            if(!is_wp_error($result)){
                echo "User Created: " . $result;
            }else{
                echo $result->get_error_message();
            }

        }else{
            echo "Password must match";
        }
    }
?>


<?php


?>

<!DOCTYPE html>
<html>

<head>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 500px;
        margin: auto;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
        display: block;
        margin-top: 10px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0 20px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 15px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        font-size: 16px;
        border-radius: 5px;
    }

    button:hover {
        opacity: 1;
    }

    .signin {
        background-color: #f1f1f1;
        text-align: center;
        padding: 10px;
        margin-top: 20px;
        border-radius: 10px;
    }

    a {
        color: dodgerblue;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 20px;
    }

    p {
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="registration-form">
        <form action="<?php echo get_the_permalink(); ?>" method="post">
            <div class="container">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label><b>First Name</b></label>
                <input type="text" placeholder="Enter First Name" name="user_fname" id="user_fname" required>

                <label><b>Last Name</b></label>
                <input type="text" placeholder="Enter Last Name" name="user_lname" id="user_lname" required>

                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" id="username" required>

                <label><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="user_email" id="user_email" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="user-pass" id="user-pass" required>

                <label><b> Confirm Password</b></label>
                <input type="password" placeholder="Enter Password" name="user-con-pass" id="user-con-pass" required>

                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <button type="submit" class="button" name="register">Register</button>
            </div>

            <div class="container signin">
                <p>Already have an account? <a href="#">Sign in</a>.</p>
            </div>
        </form>
    </div>

</body>

</html>