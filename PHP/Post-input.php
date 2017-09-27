<head>
    <link rel="stylesheet" type="text/css" href="<?php $url?>/CSS/Main.css">
    <link rel="stylesheet" type="text/css" href="<?php $url?>/CSS/Post-input.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating Form</title>
</head>

<body>
    <nav id="navbar">
        <ul>
            <div class="dropper">
                <span><li><a href ="<?php $url?>Main.php"><img src="<?php $url?>/Images/Home.png" alt="Home" style="height: 4%;"></a></li></span>
            </div>
            <div class="dropper">
                <span><li>One</li></span>
                <div class="dropper-content">
                    <p> Content</p>
                </div>
            </div>
            <div class="dropper">
                <span><li>One</li></span>
                <div class="dropper-content">
                    <p> Content</p>
                </div>
            </div>
            <div class="dropper">
                <span><li>Support</li></span>
                <div class="dropper-content">
                    <li><a href="#">Rules</a>
                    </li>
                    <li><a href="#">Contact</a>
                    </li>
                </div>
            </div>
        </ul>
    </nav>
    <text-align-cent>
        <div class="post-box">

            <div class="filler"></div>
            <p1>Title</p1>
            <form class="signup">

                <div class="u-form">
                    <input type="title" placeholder="Title..." style="margin-left: 121px; margin-top: 13px; width: 575px;">
                </div>
                <p1>Title</p1>
                <div class="u-form">
                    <input type="title" placeholder="Title..." style="height: 47px; width: 574px; margin-left: 124px; margin-top: 13px;">
                </div>
                <p1>Title</p1>
                <div class="u-form">
                    <textarea name="textarea" placeholder="Tell something about yourself" style="margin-left: 126px; margin-top: 62px; width: 572px; height: 193px;"></textarea>
                </div>
                <button class="button buttonc" style="margin-top: 2px; margin-left: 129px; width: 568px;">Post...</button>
            </form>
        </div>
    </text-align-cent>





</body>