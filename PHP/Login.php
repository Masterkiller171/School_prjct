<html lang=en>
    <head>

    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="<?php $url?>/CSS/Reg.css">
    <?php include 'Functions.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

   <text-align-cent>
    <p> Some Shit to explain</p>
    </text-align-cent>

    <form class="login">
        <div class="u-form">
            <input type="email" placeholder="Email">
        </div>
        <div class="u-form">
            <input type="password" placeholder="Password">
        </div>
        <div class="u-form">
            <button class="button">Log in</button>
        </div>
    </form>

    <text-align-cent>
        <p>Don't have an account yet? Sign one up here:
            <a href="Reg.php">
                <button class=" button buttonc">Sign Up!</button>
            </a>Or Go Back to the homepage here:
            <a href="Main.php">
                <button class=" button buttonc">GoBack! </button>
            </a>
        </p>
    </text-align-cent>

</body>
</html>