<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/admin.css">
    <title>Machinovate | Manage Account</title>
</head>
<body>
 <?php include 'header_after_login.php';?>
 <div class="container">
    <div class="row">
        <form enctype="multipart/form-data" action="edit_events.php" method="post" class="form-horizontal col-sm-6" role="form">
            <fieldset>

                <legend>Edit Account Credentials:</legend>
                
                <div class="form-group">
                     <label class="col-sm-3" for="username">Username</label>
                     <div class="col-sm-9">
                        <input id="username" name="username" type="text" placeholder="Enter new username" class="form-control" required autofocus> 
                     </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                     <label class="col-sm-3" for="password">Old Password</label>
                     <div class="col-sm-9">
                        <input id="pass" name="pass" type="password" placeholder="Enter old password" class="form-control" required>
                     </div>
                </div>

                <div class="form-group">
                     <label class="col-sm-3" for="password">New Password</label>
                     <div class="col-sm-9">
                        <input id="pass" name="pass" type="password" placeholder="Enter new password" class="form-control" required>
                     </div>
                </div>

                <div class="form-group">
                     <label class="col-sm-3" for="password">Confirm Password</label>
                     <div class="col-sm-9">
                        <input id="pass" name="pass" type="password" placeholder="Confirm new password" class="form-control" required> 
                     </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button class="btn btn-default" id="add-to-cart-btn" type="submit">
                            Edit Account</button>
                        <a class="btn btn-default" id="cancel-btn" href="order_list.php">
                            Cancel</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div> <!-- /.row -->
</div> <!-- /.container -->
<script type="text/javascript" src="../scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
<script type="text/javascript">
document.getElementById("edit-account").className = "active";
</script>

</body>
</html>