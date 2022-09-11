<?php 

        include 'config.php';

        session_start();

        error_reporting(0);

        if (isset($_SESSION['username'])) {
            header("Location: welcome.php");
        }

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            $sql = " SELECT * FROM users WHERE email ='$email' AND password='$password' ";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['username'] = $row['username'];
                header("Location: welcome.php");
            }
            else 
            {
                echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
            }
        }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

	<title>FILM INFORMATION SYSTEM</title>
	<style>
        .hl{
                padding-top: 10px;
                padding-bottom: 100px;
                /* text-align: center; */
                font-family:Times New Roman ;
                font-size: 6.2rem; 
                color:white;
                position:relative;top:-320px;right:-400px;
        }
                @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            width: 100%;
            min-height: 100vh;
            background-image:url('images/bg3.jpg');
            /* linear-gradient(rgba(90,0,50,.5), rgba(50,100,100,.5)),  */
            background-position: center;
            background-size: cover;
            height:100vh;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 400px;
            min-height: 400px;
            background: #FFF;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,.3);
            padding: 60px 30px;
        }

        .container .login-text {
            color: #111;
            font-weight: 500;
            font-size: 1.1rem;
            text-align: center;
            margin-bottom: 20px;
            display: block;
            text-transform: capitalize;
        }

        .container .login-social {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(50%, 1fr));
            margin-bottom: 25px;
        }

        .container .login-social a {
            padding: 12px;
            margin: 10px;
            border-radius: 3px;
            box-shadow: 0 0 5px rgba(0,0,0,.3);
            text-decoration: none;
            font-size: 1rem;
            text-align: center;
            color: #FFF;
            transition: .3s;
        }

        .container .login-social a i {
            margin-right: 5px;
        }

        .container .login-social a.facebook {
            background: #4267B2;
        }

        .container .login-social a.twitter {
            background: #1DA1F2;
        }

        .container .login-social a.google-plus {
            background: #db4a39;
        }

        .container .login-social a.linkedin {
            background: #0e76a8;
        }

        .container .login-social a.facebook:hover {
            background: #3d5fa3;
        }

        .container .login-social a.twitter:hover {
            background: #1991db;
        }

        .container .login-social a.google-plus:hover {
            background: #ca4334;
        }

        .container .login-social a.linkedin:hover {
            background: #0b5c81;
        }

        .container .login-email .input-group {
            width: 100%;
            height: 50px;
            margin-bottom: 25px;
        }

        .container .login-email .input-group input {
            width: 100%;
            height: 100%;
            border: 2px solid #e7e7e7;
            padding: 15px 20px;
            font-size: 1rem;
            border-radius: 30px;
            background: transparent;
            outline: none;
            transition: .3s;
        }

        .container .login-email .input-group input:focus, .container .login-email .input-group input:valid {
            border-color: #A9A9A9;
        }

        .container .login-email .input-group .btn {
            display: block;
            width: 100%;
            padding: 15px 20px;
            text-align: center;
            border: none;
            background: #A9A9A9;
            outline: none;
            border-radius: 30px;
            font-size: 1.2rem;
            color: #FFF;
            cursor: pointer;
            transition: .3s;
        }

        .container .login-email .input-group .btn:hover {
            transform: translateY(-5px);
            background: 	#36454F;
        }

        .login-register-text {
            color: #111;
            font-weight: 600;
        }

        .login-register-text a {
            text-decoration: none;
            color: #7393B3;
        }

        @media (max-width: 430px) {
            .container {
                width: 300px;
            }
            .container .login-social {
                display: block;
            }
            .container .login-social a {
                display: block;
            }
        }

	</style>

</head>
<body >
    <div class= "container">
        <div class="row">

            <div class="col-9" style="align:center">

                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="login-email">

                    <p class="login-text" style="font-size: 2rem; font-weight: 800;">USER LOGIN</p>
                    <div class="input-group">
                        <input type="email" placeholder="Email" name="email" required>
                        
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Password" name="password" required>
                        
                    </div>
                    <div class="input-group">
                        <button name="submit" class="btn">Login</button>
                    </div>
                    <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
                    <br>
                    <p class="login-register-text">Click here for Admin mode.  <a href="admin.php">Admin mode</a>.</p>

                </form>

            </div>

            <div class="col-3" style="position:absolute">
            
                <h1 class="hl" > Film <br>Information <br>System </h1>  
                
            </div>

        </div>
       
    </div>
    


</body>
</html>