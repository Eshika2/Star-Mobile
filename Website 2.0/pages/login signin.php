<?php session_start() ?>

<html>
<head>
    <title>StarMobile Login</title>
    <link rel="stylesheet" type="text/css" href="../css/login,sign,main.css">
</head>
<body class="Blogin">
    <form action="" method="post">
        <div class="navbar">
            <img class="logo" src="../other pic/logo.png">

            <dl>
                <dt><a href="login.html"> Home </a></dt>
                <dt><a href="About.html"> About </a></dt>
                <dt><a href="Contact.html"> Contact </a></dt>
                <dt><a href="main.html"> <input class="back" type="submit" value="Back"></a></dt>
            </dl>
        </div>
        <div class="signin">
                <table class="signinTable" border="0">
                    <tr>
                        <td colspan="2"><h1><center> Login </center></h1></td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td> <input type="text" name="txtuname" required> </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td> <input type="password" name="txtpassword" required> </td>
                    </tr>
                    <tr class="s">
                        <td colspan="2"><input type="submit" class="login" value="Login" name="btnsubmit"> </td>
                    </tr>
                </table>
        </div>
    </form>
    <p style="color: white; text-align: center;">
        <b>Not  Have  an  Account  <a style="color: white;" href="login signup.php"> Register Now </a></b>
    </p> 

    <?php
		if(isset($_POST["btnsubmit"])) {
			$username = $_POST["txtuname"];
			$password = $_POST["txtpassword"];
			
			$connection = mysqli_connect("localhost", "root", "", "wad", "3308");
			
			if(!$connection) {
				die("No Database Connection");
			}
			
			$sql = "SELECT * FROM register WHERE FirstName = '".$username."' AND Password = '".$password."'";
			
			$result = mysqli_query($connection, $sql);
			
            if (mysqli_num_rows($result) > 0) {
            	$_SESSION["userEmail"] = $result->fetch_assoc()['Email'];
            	header("Location:main.html");
            }
            else {
            	header("Location:login signup.php");
            }
        }
	
	?>
</body>
</html>