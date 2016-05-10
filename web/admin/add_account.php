<html>
	<head>
		<title>Machinovate | Add Account </title>
	</head>

	<body>
		<form action="add_account.php" method="post">
			<input id="last_name" name="last_name" type="text" placeholder="Enter your last name" class="form-control" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>" required autofocus>

			<input id="first_name" name="first_name" type="text" placeholder="Enter your first name" class="form-control" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" required autofocus>

			<input id="username" name="username" type="text" placeholder="Enter username" class="form-control" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" required autofocus>

			<input id="password" name="password" type="password" placeholder="Enter your password" class="form-control" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>" required autofocus>

			<input id="pass1" name="pass1" type="password placeholder="Confirm password" class="form-control" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" required autofocus>

			<input id="email" name="email" type="text" placeholder="Enter your email address" class="form-control" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required autofocus>


		</form>
	</body>
</html>