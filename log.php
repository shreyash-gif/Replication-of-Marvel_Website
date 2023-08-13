
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marvel Login | Sign In To Marvel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="icon" href="favicon.png" type="image/png" sizes="76x76" />
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }

        .loginbox {
            width: 380px;
            height: 525px;
            background-color: #ffffff;
            color: #ffff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            border: 0px;
            border-top: 10px solid;
            border-color: rgb(232, 37, 37);
        }

        .avatar {
            background-size: cover;
            width: 100px;
            height: 100px;
            margin-left: 135px;
            border-radius: 300px;
            position: absolute;
            top: -50px;
        }

        .name {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            padding-top: 55px;
            color: rgb(0, 0, 0);
            text-align: center;
            letter-spacing: 0;
        }

        .loginbox p {
            padding-top: 5px;
            padding-left: 1cm;
            font-weight: 400px;
        }

        .loginbox input[type="password"],
        input[type="text"] {
            border: none;
            border-bottom: 1px solid rgb(0, 0, 0);
            background: transparent;
            outline: none;
            height: 40px;
            margin-left: 35px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            caret-color: red;
        }

        input[type="password"]:focus {
            border-bottom: 1px solid red;
            border-radius: 5px;
        }

        input[type="text"]:focus {
            border-bottom: 1px solid red;
            border-radius: 5px;

        }

        .loginbox input {
            width: 80%;
            margin-bottom: 20px;
        }

        .submit {
            width: 300px;
            padding-left: 11px;
            border: none;
            background-color: red;
            outline: none;
            color: rgb(255, 255, 255);
            height: 41px;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 20px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            text-transform: uppercase;
            letter-spacing: 0;
            text-align: center;
        }

        .submit:hover {
            cursor: pointer;
            color: black;
        }

        .create_account {
            margin: 35px 35px;
            text-decoration: none;
            color: black;
            font-family: Roboto;
            font-size: 15px;
        }

        a {
            font-weight: 300px;
            color: red;
        }
        .submit_button{
                padding-left: 0;
                display: flex;
                justify-content: center;
            }
        @media (max-width: 400px){
            .loginbox{

                width: 80%;
            }
            .avatar{
                margin-left: 35%;
            }
            .submit_button{
                padding-left: 0;
                display: flex;
                justify-content: center;
            }
            .submit{
                width: 50%;
            }

        }
    </style>
</head>

<body>



    <video autoplay muted loop id="myVideo">
        <source src="body4.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="loginbox">
        <img src="marvel-comic-logo-badge-modified.png" class="avatar" />
        <form  action="registration2.php" method="POST" enctype="multipart/form-data">
            <h3 class="name">LOGIN WITH YOUR EMAIL</h3>

            <p>
                <font face=" -apple-system, BlinkMacSystemFont, Segoe UI, Roboto,
            Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif" size="4px" color="black">Username</font>
            </p>
            <?php
            if(isset($_GET['error'])) {
                ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } 
            ?>
            <div class="input-container">
                <input type="text" name="username" value="" class="animate" placeholder="Enter Username" required/>
            </div>
            <div class="input-container">
                <p>
                    <font face=" -apple-system, BlinkMacSystemFont, Segoe UI, Roboto,
            Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif" size="4px" color="black">Password</font>
                </p>
                <input type="password" name="password" value="" class="animate" placeholder="Enter Password" required   />
                <div class="submit_button">
                    <button class="submit" type="submit" name="submit">Login    </button>
            </div>
            </div>
            <div class="create_account">
                Dont Have An Account? <a href="http://localhost/php/signin.php"> Create Account</a>
            </div>
        </form>
    </div>
</body>

</html>