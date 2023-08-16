<?php include "connection.php";    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Wrapper Box Example</title>
    <title>User - Login and Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>TenPlus Tv</h2>
        <nav>

            <a href="#">HOME</a>
            <a href="#">BLOG</a>
            <a href="#">CONTACT</a>
            <a href="#">ABOUT</a>
        </nav>
    </header>>

    <style type="text/css">
        section {
            margin-top: -20px;
        }

        .box1 {
            height: 550px;
            width: 500px;
            background-color: black;
            margin: 70px auto;
            opacity: .8;
            color: white;
            padding: 20px;
        }

        label {
            font-size: 18px;
            font-weight: 600;
        }
    </style>
    </head>

    <body>

        <section>
            <div class="log_img">
                <br>
                <div class="box1">
                    <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">TenPlus Zone!!</h1>
                    <h1 style="text-align: center; font-size: 25px;">User Login </h1><br>
                    <form name="login" action="" method="post">
                        <b>
                            <p style="padding-left:50px;font-size:15px;font-weight:700;">Login as:</p>
                        </b>
                        <input style="margin-left:50px;width:18px;" type="radio" name="user" id="admin" value="admin">
                        <label for="admin">Admin</label>
                        <input style="margin-left:50px;width:18px;" type="radio" name="user" id="student" value="student" checked="">
                        <label for="student">Seller</label>


                        <div class="login">
                            <input class="form-control" type="text" name="username" placeholder="Username" required="">
                            <br>
                            <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
                            <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px">

                            <div class="container">
                                <button type="submit">Submit</button>
                            </div>


                        </div>

                        <p style="color: white; padding-left: 15px;">
                            <br><br>
                            <a style="color:yellow; text-decoration: none;" href="update_password.php">Forgot
                                password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp
                            New to this website?<a style="color: yellow; text-decoration: none;" href="registration.php">&nbspSign Up</a>


                        </p>
                    </form>
                </div>
            </div>
        </section>

        <?php

        if (isset($_POST['submit'])) {
            if ($_POST['user'] == 'admin') {
                $count = 0;
                $res = mysqli_query($db, "SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");

                $row = mysqli_fetch_assoc($res);

                $count = mysqli_num_rows($res);

                if ($count == 0) {
        ?>

                    <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
                        <strong>The username and password doesn't match</strong>
                    </div>
                <?php
                } else {
                    /*-------------if username & password matches---*/

                    $_SESSION['login_user'] = $_POST['username'];
                    $_SESSION['pic'] = $row['pic'];

                ?>
                    <script type="text/javascript">
                        window.location = "Admin/profile.php"
                    </script>
                <?php
                }
            } else {
                $count = 0;
                $res = mysqli_query($db, "SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");

                $row = mysqli_fetch_assoc($res);
                $count = mysqli_num_rows($res);

                if ($count == 0) {
                ?>

                    <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
                        <strong>The username and password doesn't match</strong>
                    </div>
                <?php
                } else {
                    $_SESSION['login_user'] = $_POST['username'];
                    $_SESSION['pic'] = $row['pic'];

                ?>
                    <script type="text/javascript">
                        window.location = "Student/profile.php"
                    </script>
        <?php
                }
            }
        }
        ?>

    </body>

</html>




<script>
    function popup(popup_name) {
        get_popup = document.getElementById(popup_name);
        if (get_popup.style.display == "flex") {
            get_popup.style.display = "none";
        } else {
            get_popup.style.display = "flex";
        }
    }
</script>


</body>

</html>