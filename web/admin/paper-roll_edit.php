<?php

    //session
    session_start(); // Start the session.

    // If no session value is present, redirect the user:
    // Also validate the HTTP_USER_AGENT!
    if (!isset($_SESSION['agent']) OR ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT']) )) {

        // Need the functions:
        require ('includes/login_functions.inc.php');
        redirect_user();    

    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/admin.css">
    <title>Machinovate | Paper Roll Truck Form</title>
</head>
<body>
    <?php include 'header_after_login.php';?>
    
  <div  id="order-slitter" class="container">
            <h1 class="page-header">Paper Roll Truck Form Requirements</h1>
            <!-- please change the form action... to what name if ever wrong-->
            <form action="paper_roll_form_success.php" role="form" class="form-horizontal" method="post">
                <!-- Quantity -->
                    <div class="form-group">
                    <label for="type" class="control-label col-sm-2">Quantity:</label>
                        <div class="col-sm-10">
                        
                            <input class="form-control" id="quantity" min="1" name="bailingQuantity" step="1" type="number" style="width:10%;" value='<?php if (isset($_POST['bailingQuantity'])) echo $_POST['bailingQuantity']; ?>'/>
                        </div>
                    </div>
                    <!-- Price -->
                    <div class="form-group">
                        <label for="comment" class="control-label col-sm-2">FOB Price:</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">&#8369;</span>
                                <input class="form-control" id="quantity" min="0.001" name="fob" step="1" type="number" style="width:30%;" />
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                        <label for="comment" class="control-label col-sm-2">CIF Price:</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">&#8369;</span>
                                <input class="form-control" id="quantity" min="0.001" name="cif" step="1" type="number" style="width:30%;" />
                            </div>
                        </div>
                    </div>

                    </div>
                    <div class="form-group">
                    <label for="type" class="control-label col-sm-2">Comments/Suggestions:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="comment" rows="8"  placeholder="Please input your comments/suggestions here" style="width:80%;" name="otherDetails" value="<?php if (isset($_POST['otherDetails'])) echo $_POST['otherDetails']; ?>"></textarea>
                        </div>
                    </div>

                <div class="form-group">

                    <div class="col-sm-offset-2 col-sm-10">

                        <button class="btn btn-default" id="add-to-cart-btn" type="submit">
                            Finish</button>
                        <a class="btn btn-default" id="cancel-btn" href="order_list.php">
                            Cancel</a>
                    </div>
                </div>
            </form>
        </div> <!-- /.container -->
    <script type="text/javascript" src="../scripts/jquery.min.js"></script>
    <script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
    <style>
   
    </style>
</body>
</html>
