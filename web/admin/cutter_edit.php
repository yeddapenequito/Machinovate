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
    <title>Machinovate | Cutter Form</title>
</head>
<body>
    <?php include 'header_after_login.php';?>
    
   <div  id="order-slitter" class="container">
            <h1 class="page-header">Cutter Form Requirements</h1>
            <form action="cutter_form_success.php" role="form" class="form-horizontal" method="post">
                <fieldset>
                    <legend>General Section</legend>

                    <!-- Type -->
                    <div class="form-group">

                        <label for="type" class="control-label col-sm-2">Type:</label>

                        <div class="col-sm-10">
                            <div class="radio">
                                <label><input class="type" name="cutterRadio" type="radio" value="115E">
                                    CT-115E (115 cm/45.2in)</label>
                            </div>
                            <div class="radio">
                                <label><input class="type" name="cutterRadio" type="radio" value="137E">
                                    CT-137E (137 cm/53.9in)</label>
                            </div>
                            <div class="radio">
                                <label><input class="type" name="cutterRadio" type="radio" value="155E">
                                    CT-155E (155cm/61in)</label>
                            </div>
                            <div class="radio">
                                <label><input class="type" name="cutterRadio" type="radio" value="185E">
                                    CT-185E (185cm/72.8in)</label>
                            </div>
                            <div class="radio">
                                <label><input class="type" name="cutterRadio" type="radio" value="220E">
                                    CT-220E (220cm/86.6in)</label>
                            </div>
                            <div class="radio">
                                <label><input class="type" name="cutterRadio" type="radio" value="260E">
                                    CT-260E (260cm/102.3in)</label>
                            </div>
                            <div class="radio">
                                <label><input class="type" name="cutterRadio" type="radio" value="300E">
                                    CT-300E (300cm/118.1in)</label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset> <!--Price Details Section-->
                    <legend>Price Details</legend>

                    <div class="form-group">
                        <label for="comment" class="control-label col-sm-2">FOB Price:</label>
                        <div class="col-sm-10">
                           <div class="input-group">
                                <span class="input-group-addon">&#8369;</span>
                                <input class="form-control" id="quantity" min="0" name="fob" step="1" type="number" style="width:30%;" />
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="comment" class="control-label col-sm-2">CIF Price:</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">&#8369;</span>
                                <input class="form-control" id="quantity" min="0" name="cif" step="1" type="number" style="width:30%;" />
                            </div>
                        </div>
                    </div>
                </fieldset>
                <br>
                
                <fieldset>
                    <legend>Other Details</legend>

                    <div class="form-group">

                        <div class="col-sm-offset-2 col-sm-10">
                            <textarea class="form-control" id="comment" rows="8"  name="otherDetails" value="<?php if (isset($_POST['otherDetails'])) echo $_POST['otherDetails']; ?>"></textarea>
                        </div>
                    </div>
                </fieldset>

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
