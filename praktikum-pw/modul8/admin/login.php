<?php if (isset($_POST["submit"])) {
	if($_POST["username"] == "adit" && $_POST["password"] == "1234") {
		header("location: index.php");
		exit;
	} else {
		$error = true;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/login.css">
	
</head>
<body>

	<div class="outter-form-login">
            <form action="" method="POST" class="inner-login">
            <h2 class="text-center title-login">Login Admin</h2>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" autofocus="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
                <input type="submit" name="submit" class="btn btn-block btn-custom-green" value="LOGIN">
            </form>
            <p style="font-style: italic; padding: 10px;">Username : adit <br>Password : 1234</p>
            <?php if(isset($error)): ?>
				<p style="color: red; font-style: italic;">username / password salah</p>
			<?php endif; ?>
        </div>
    </div>

	
</body>
</html>


