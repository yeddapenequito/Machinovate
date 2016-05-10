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
    
   <div class="container">
            
            <form id="formcutter" action="order_list.php" role="form" class="form form-horizontal" method="post">
                <legend>
                    <h1>Cutter Machine Requirements Form</h1>
                </legend>
                
                <p style="color:red;font-style:italic">* Required fields.</p>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <img src="../images/CT-115E.png" id="cutter-images" style="height: 
                        200px; width: 230px;">
                        <img src="../images/CT-137E.png" id="cutter-images" style="height: 
                        200px; width: 230px;">
                        <img src="../images/CT-155E.png" id="cutter-images" style="height: 
                        200px; width: 230px;">
                        <img src="../images/CT-260E.png" id="cutter-images" style="height: 
                        200px; width: 230px;">
                    </div>
                </div>

                <!-- Type -->
                <div class="form-group required">
                    <label for="type" class="control-label col-sm-2">Type:</label>

                    <div class="col-sm-10">
                        <div class="radio">
                            <label><input  checked class="type" name="cutterRadio" type="radio" id="CT_115E" value="CT_115E"/>
                                CT-115E (115 cm/45.2in)</label>
                        </div>
                        <div class="radio">
                            <label><input class="type" name="cutterRadio" type="radio" id="CT_137E" value="CT_137E"/>
                                CT-137E (137 cm/53.9in)</label>
                        </div>
                        <div class="radio">
                            <label><input class="type" name="cutterRadio" type="radio" id="CT_155E" value="CT_155E"/>
                                CT-155E (155cm/61in)</label>
                        </div>
                        <div class="radio">
                            <label><input class="type" name="cutterRadio" type="radio" id="CT_185E" value="CT_185E"/>
                                CT-185E (185cm/72.8in)</label>
                        </div>
                        <div class="radio">
                            <label><input class="type" name="cutterRadio" type="radio" id="CT_220E" value="CT_220E"/>
                                CT-220E (220cm/86.6in)</label>
                        </div>
                        <div class="radio">
                            <label><input class="type" name="cutterRadio" type="radio" id="CT_260E" value="CT_260E"/>
                                CT-260E (260cm/102.3in)</label>
                        </div>
                        <div class="radio">
                            <label><input class="type" name="cutterRadio" type="radio" id="CT_300E" value="CT_300E"/>
                                CT-300E (300cm/118.1in)</label>
                        </div>
                    </div>
                </div>

                <!-- Other Details -->
                <div class="form-group">
                    <label for="type" class="control-label col-sm-2">Other Details:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="comment" rows="8"  placeholder="Place your additional requirements here if any." style="width:80%;" name="otherDetails"></textarea>
                    </div>
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input class="btn btn-primary" type="submit">
                        <a id="cancel-btn" onclick="window.history.back()">Cancel</a>
                    </div>
                </div>
            </form>
            
        </div> <!-- /.container -->
        <script type="text/javascript" src="../scripts/jquery.min.js"></script>
        <script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
        <script type="text/javascript" src="../scripts/validator.min.js"></script>
</body>
</html>
