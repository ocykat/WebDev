<?php
    require_once("../global/head_header.php");
?>
    <!-- Custom style -->
    <link href="../style/style.css" rel="stylesheet" />
    <!-- Form Handler -->
    <script type="text/javascript" src="login.js"></script>

    <title> My Website - Đăng nhập </title>
</head>

<body>

    <?php
        require_once("../global/navbar.php");
    ?>

    <div class="container">

        <h1 class="page-header"> Đăng nhập </h1>

        <div class="col-md-4">
            <form id="regform" action="login_handler.php" method="POST" onsubmit="//return validate(this);">
                <!-- <div><font color="red" size="1">$errMess</font></div> -->

                <div class="form-group">
                    <label><b>Username</b></label>
                    <input class="form-control" type="text" name="usr_username" placeholder="Username..." />
                </div>
                <div class="form-group">
                    <label><b>Password</b></label>
                    <input class="form-control" type="password" name="usr_pass" placeholder="Password..." />
                    
                <div class="form-group">
                    <input class="btn btn-default" type="submit" value="Đăng nhập" />
                </div>

                </div>
            </form>
        </div>
    </div>
</body>
</html>