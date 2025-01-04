
<html>
<head>
    <title>StarMobile Register</title>
    <link rel="stylesheet" type="text/css" href="../css/login,sign,main.css">
</head>
<body class="Blogin">
    <form name="login" action="" method="post">
        <div class="navbar">
            <img class="logo" src="../other pic/logo.png">

            <dl>
                <dt><a href="login.html"> Home </a></dt>
                <dt><a href="About.html"> About </a></dt>
                <dt><a href="Contact.html"> Contact </a></dt>
                <dt><a href="main.html"> <input class="back" type="submit" value="Back"></a></dt>
            </dl>
        </div>
        <div class="signup">
                <table class="signupTable" border="0">
                    <tr>
                        <td colspan="2"><h1 class="register"> Register </h1></td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td> <input type="text" name="txtFname" required> </td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td> <input type="text" name="txtLname" required> </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> <input type="text" name="txtEmail" required> </td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td> <input type="number" name="txtNumber" required> </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td> <input type="password" name="txtPassword" required> </td>
                    </tr>
                    <tr class="se">
                        <td><input type="submit" class="register" value="Register" name="btnSubmit"></td>
                        <td> <input type="reset" class="reset" value="Reset" name="btnReset"> </td>
                    </tr>
                    <tr>
                        <td colspan="2"> By clicking the Login button, You agree to our <a class="rules" href="">Terms & Conditions</a> & <a class="rules" href="">Privacy</a> </td>
                    </tr>
                </table>
        </div>
    </form>
    <p style="color: white; text-align: center;">
        Already have an Account <a style="color: white;" href="login signin.php">Login Now</a>
    </p>

    <?php
    
		if (isset($_POST["btnSubmit"])) {
			$fName = $_POST["txtFname"];
            $lName = $_POST["txtLname"];
			$email = $_POST["txtEmail"];
			$phoneNumber = $_POST["txtNumber"];
			$password = $_POST["txtPassword"];
			
			
			$connection = mysqli_connect("localhost", "root", "", "wad", "3308");
			
			if(!$connection) {
				die("Connection Failed");
			}
			
			$sql = "INSERT INTO register VALUES ('".$fName."', '".$lName."', '".$email."', '".$phoneNumber."', '".$password."')";
			
			mysqli_query($connection, $sql);
			
			
			mysqli_close($connection);
			header('Location:login signin.php');
		}
		
	?>
</body>
</html>