<!-- <html>
	<head>
		<title>Machinovate | Add Account </title>
	</head>

	<body>
		<form action="add_account.php" method="post">
			<input id="last_name" name="last_name" type="text" placeholder="Enter your last name" class="form-control" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>" required autofocus>

			<input id="first_name" name="first_name" type="text" placeholder="Enter your first name" class="form-control" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" required autofocus>

			<input id="username" name="username" type="text" placeholder="Enter username" class="form-control" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" required autofocus>

			<input id="password" name="password" type="password" placeholder="Enter your password" class="form-control" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>" required autofocus>

			<input id="pass1" name="pass1" type="password" placeholder="Confirm password" class="form-control" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" required autofocus>

			<input id="email" name="email" type="text" placeholder="Enter your email address" class="form-control" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required autofocus>


		</form>
	</body>
</html> -->
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/admin.css">
    <title>Machinovate | Add New Account</title>
</head>
<body>
 <?php include 'header_after_login.php';?>
 <div class="container">
    <div class="row">
        <form enctype="multipart/form-data" action="add_account.php" method="post" class="form form-horizontal col-sm-6" role="form">
            <fieldset>

                <legend>Add New Account:</legend>
                
                <div class="form-group">
                     <label class="col-sm-3" for="last_name">Last Name: </label>
                     <div class="col-sm-9">
                        <input id="last_name" name="last_name" type="text" placeholder="Enter your last name" class="form-control" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>" required autofocus>
                        <div class="help-block with-errors"></div>
                     </div>
                </div>
                <br>
                 <div class="form-group">
                     <label class="col-sm-3" for="first_name">First Name: </label>
                     <div class="col-sm-9">
                        <input id="first_name" name="first_name" type="text" placeholder="Enter your first name" class="form-control" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" required autofocus>
                     </div>
                </div>
                <br>
               <div class="form-group">
                     <label class="col-sm-3" for="username">Username: </label>
                     <div class="col-sm-9">
                           <input id="username" name="username" type="text" placeholder="Enter username" class="form-control" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" required autofocus>
                     </div>
                </div>
                <br>
                <div class="form-group">
                     <label class="col-sm-3" for="password">Password: </label>
                     <div class="col-sm-9">
                        <input id="password" name="password" type="password" placeholder="Enter your password" class="form-control" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>" required autofocus>
                        <div class="help-block with-errors"></div>
                     </div>
                </div>

                <div class="form-group">
                     <label class="col-sm-3" for="password">Confirm Password: </label>
                     <div class="col-sm-9">
                       <input id="pass1" name="pass1" type="password" placeholder="Confirm password" class="form-control" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" required autofocus>
                        <div class="help-block with-errors"></div>
                     </div>
                </div>

  				<div class="form-group">
                     <label class="col-sm-3" for="password">Email Address: </label>
                     <div class="col-sm-9">
                        <input id="email" name="email" type="text" placeholder="Enter your email address" class="form-control" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required autofocus>

                        <div class="help-block with-errors"></div>
                     </div>
                </div>
               
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <input class="btn btn-default" id="add-to-cart-btn" type="submit" value="Edit Account">
                        <a class="btn btn-default" id="cancel-btn" href="order_list.php">
                            Cancel</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div> <!-- /.row -->
</div> <!-- /.container -->
<script type="text/javascript" src="../scripts/jquery.min.js"></script>
<script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="../scripts/validator.min.js"></script>
<script type="text/javascript">
document.getElementById("edit-account").className = "active";
</script>

</body>
</html>