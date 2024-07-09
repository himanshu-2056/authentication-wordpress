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
    <div class="login-form">
        <form action="<?php echo get_the_permalink(); ?>" method="post">
            <div class="container">
                <h1>Login</h1>
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" id="username" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="user-pass" id="user-pass" required>
                <button type="submit" class="button" name="user_login">Login</button>
            </div>
        </form>
    </div>

</body>

</html>