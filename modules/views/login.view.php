<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <title>Login Siswa</title>

        <!-- CSS -->
        <link href="resources/css/style.css" rel="stylesheet" />
    </head>

    <body>
        <div class="form-signin">
            <form method="post">
                <div class="form-group">
                    <div class="text-center text-header">
                        <img src="<?php echo PATH; ?>resources/images/logo.png" style="width:75px;" alt="logo">
                        <h1>SMKN 4 BUTON UTARA</h1>
                        <h2>Login Siswa</h2>
                    </div>
                </div>
                <hr>
                <?php
                if (count($message)) {
                    ?>
                    <div class="alert <?php
                    if ($message["success"] == false)
                        echo "alert-danger";
                    else
                        echo "alert-success";
                    ?>"><?php echo $message["message"]; ?></div>
                    <?php
                }
                ?>
                <div class="form-group">
                    <label for="input-username">Username</label>
                    <input type="text" id="input-username" name="username" class="form-control" placeholder="ex : abdurrahman" required autofocus>
                </div>
                <div class="form-group">
                    <label for="input-password">Password</label>
                    <input type="password" name="password" id="input-password" class="form-control" required>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Sign in</button>
            </form>
        </div>
    </body>
</html>