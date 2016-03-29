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
    <title>Machinovate | Sheeter Form</title>
</head>
<body>
    <?php include 'header_after_login.php';?>
    
  <div  id="order-sheeter" class="container">
            <h1 class="page-header">Paper Sheeter Form Requirements</h1>

            <form action="sheeter_form_success.php" role="form" class="form-horizontal" method="post">
                <fieldset>
                    <legend>General Section</legend>

                    <!-- Type -->
                    <div class="form-group">

                        <label for="type" class="control-label col-sm-2">Type:</label>

                        <div class="col-sm-10">
                            <div class="radio">
                                <label><input class="type" name="sheeterType" type="radio" value="SH_PIV">
                                    MACH-SV (PIV - Overlapping)</label>
                            </div>
                            <div class="radio">
                                <label><input class="type" name="sheeterType" type="radio" value="SH_SRV">
                                    MACH-SRV (Servo - Overlapping)</label>
                            </div>
                            <div class="radio">
                                <label><input class="type" name="sheeterType" type="radio" value="SH_Compact">
                                    MACH-Compact (Standard)</label>
                            </div>
                            <div class="radio">
                                <label><input class="type" name="sheeterType" type="radio" value="SH_Sync">
                                    MACH-Sync (Twin Knife - Overlapping)</label>
                            </div>
                        </div>
                    </div>

                    <!-- Production Vol. -->
                    <div class="form-group">

                        <label class="control-label col-sm-2" for="production-vol">Production Volume:</label>

                        <div class="col-sm-10">
                            <div class="input-group">
                                
                                <input class="form-control" id="production-vol" min="0" name="productionVolume" step=".01" type="number"/>
                                <span class="input-group-addon">Tons per day</span>
                            </div>
                        </div>
                    </div>

                    <!-- Paper Type -->
                    <div class="form-group">

                        <label class="control-label col-sm-2" for="paper-type">Paper Type:</label>

                        <div class="col-sm-10">
                            <input class="form-control" id="paper-type" name="paperType" placeholder="e.g. Ledger, Newsprint, Carbonless" type="text"/>
                        </div>
                    </div>

                    <!-- GSM -->
                    <div class="form-group">

                        <label  class="control-label col-sm-2" for="gsm">GSM:</label>

                        <div class="col-sm-10">
                            <div class="form-inline">
                                <input class="form-control" min="0" name="gsmMin" placeholder="Min" size="5" step=".01" type="number">

                                <span>to</span>

                                <input class="form-control" min="0" name="gsmMax" placeholder="Max" size="5" step=".01" type="number">

                                <select class="form-control" name="gsmUnit"> 
                                    <option value="inches">inches</option>
                                    <option value="millimeters">millimeters</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <!-- Roll Diameter -->
                    <div class="form-group">

                        <label class="control-label col-sm-2" for="roll-diameter">Roll Diameter:</label>

                        <div class="col-sm-10">
                            <div class="form-inline">

                                    <input class="form-control" min="0" name="rollDiameterMin" placeholder="Min" size="5" step=".01" type="number">

                                    <span>to</span>

                                    <input class="form-control" min="0" name="rollDiameterMax" placeholder="Max" size="5" step=".01" type="number">

                                    <select class="form-control" name="rollDiameterUnit"> 
                                        <option value="inches">inches</option>
                                        <option value="millimeters">millimeters</option>
                                    </select>
                            </div>
                        </div>
                    </div>

                    <!-- Cut off Length -->
                    <div class="form-group">

                        <label  class="control-label col-sm-2" for="gsm">Cut off Length:</label>

                        <div class="col-sm-10">
                            <div class="form-inline">
                                <input class="form-control" min="0" name="cutOffLengthMin" placeholder="Min" size="5" step=".01" type="number">

                                <span>to</span>

                                <input class="form-control" min="0" name="cutOffLengthMax" placeholder="Max" size="5" step=".01" type="number">

                                <select class="form-control" name="cutOffLengthUnit"> 
                                    <option value="inches">inches</option>
                                    <option value="millimeters">millimeters</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Slitting Width -->
                    <div class="form-group">

                        <label class="control-label col-sm-2" for="slitting-width">Slitting Width:</label>

                        <div class="col-sm-10">
                            <div class="form-inline">
                                <input class="form-control" min="0" name="slittingWidthMin" placeholder="Min" size="5" step=".01" type="number">

                                <span>to</span>

                                <input class="form-control" min="0" name="slittingWidthMax" placeholder="Max" size="5" step=".01" type="number">

                                <select class="form-control" name="slittingWidthUnit"> 
                                    <option value="inches">inches</option>
                                    <option value="millimeters">millimeters</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset> <!--Cutting Section-->
                    <legend>Cutting Section</legend>
                    
                    <!-- Main Drive -->
                    <div class="form-group">

                        <label for="main-drive" class="control-label col-sm-2">Main Drive:</label>

                        <div class="col-sm-10">
                            <div class="radio">
                                <label><input id="main-drive" name="mainDriveRadio" type="radio" value="Inverter">
                                    Inverter</label>
                            </div>
                            <div class="radio">
                                <label><input id="main-drive" name="mainDriveRadio" type="radio" value="Servo Motor and Touch Screen">
                                    Servo Motor and Touch Screen</label>
                            </div>
                        </div>
                    </div>

                    <!-- Knife -->
                    <div class="form-group">

                        <label for="knife" class="control-label col-sm-2">Knife:</label>

                        <div class="col-sm-10">
                            <div class="radio">
                                <label><input id="knife" name="knifeRadio" type="radio" value="Single Knife">
                                    Single Knife</label>
                            </div>
                            <div class="radio">
                                <label><input id="knife" name="knifeRadio" type="radio" value="Twin Knife">
                                    Twin Knife</label>
                            </div>
                        </div>
                    </div>

                    <!-- Slitter -->
                    <div class="form-group">
                        <label class="control-label col-sm-2">Slitter:</label>
                        <div class="col-sm-10">
                            
                            <div class="checkbox">
                                <label><input id="slitter" name="slitterCheckbox" type="checkbox">
                                    <div class="form-inline">
                                        <div class="form-group">

                                            <label class="control-label" for="slitter-max">
                                                3 Station Slitter Attachment with
                                                <input class="form-control" disabled id="slitter-max" name="slitterMax" type="text">
                                                max. Side Trim Removal Blower w/ Tab Inserter Unit
                                            </label>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                
                
                <fieldset>
                    <legend>Unwind Roll Stand Section</legend>
                    
                    <!-- Reel Stand -->
                    <div class="form-group">
                        <label for="sheeter" class="control-label col-sm-2">Reel Stand:</label>
                        <div class="col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input class="reel-stand-checkbox" id="reel-stand-hydraulic" name="reelStand[]" type="checkbox" value="1">
                                    Hydraulic Shaftless with Air

                                    <div class="radio">
                                        <label><input disabled class="reel-hydraulic-radio" name="reelHydraulicRadio" type="radio" value="Single">
                                            Single</label>
                                    </div>
                                    <div class="radio">
                                        <label><input disabled class="reel-hydraulic-radio" name="reelHydraulicRadio" type="radio" value="Double">
                                            Double</label>
                                    </div>
                                    <div class="radio">
                                        <label><input disabled class="reel-hydraulic-radio" name="reelHydraulicRadio" type="radio" value="Others">
                                            Others</label>
                                    </div>
                                </label>
                            </div>

                            <div class="checkbox">
                                
                                <label>
                                    <input class="reel-stand-checkbox" id="reel-stand-standard" name="reelStand[]" type="checkbox" value="2)">
                                    Standard Reel Stand (H-Type)

                                    <div class="radio">
                                        <label><input class="reel-standard-radio" disabled name="reelStandardRadio" type="radio" value="Four(4) Rolls">
                                            Four(4) Rolls</label>
                                    </div>
                                    <div class="radio">
                                        <label><input class="reel-standard-radio" disabled name="reelStandardRadio" type="radio" value="Eight(8) Rolls">
                                            Eight(8) Rolls</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <div class="form-inline">
                                                
                                                <input class="reel-standard-radio" disabled id="ten-rolls-radio" name="reelStandardRadio" type="radio" value="Ten(10) Rolls">
                                                Ten(10) Rolls + <input class="form-control" disabled id="ten-rolls-text" name="noOfAdditionalRolls" type="number"  value="<?php if (isset($_POST['noOfAdditionalRolls'])) echo $_POST['noOfAdditionalRolls']; ?>"> Rolls
                                            </div>
                                        </label>
                                    </div>
                                </label>
                            </div>

                            <div class="checkbox">
                                
                                <label>
                                    <input class="reel-stand-checkbox" name="reelStand[]" type="checkbox" value="3">
                                    Auto Tension Control with Decurler System
                                </label>
                            </div>

                            <div class="checkbox">
                                
                                <label>
                                    <input class="reel-stand-checkbox" name="reelStand[]" type="checkbox" value="4">
                                    Individual Auto Tension for Stationary Stand
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Shaft -->
                    <div class="form-group">
                        
                        <label for="sheeter" class="col-sm-2 control-label">Shaft:</label>

                        <div class="col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input class="shaft-check" name="shaft[]" type="checkbox" value="1">
                                    Mechanical Shaft
                                </label>
                            </div>  
                            <div class="checkbox">
                                <label>
                                    <input class="shaft-check" name="shaft[]" type="checkbox" value="2">
                                    Air Shaft (Heavy Duty)
                                </label>
                            </div>  
                            <div class="checkbox">
                                <label>
                                    <input class="shaft-check" name="shaft[]" type="checkbox" value="3">
                                    Others
                                </label>
                            </div>                          
                        </div>
                    </div>

                    <!-- Roll Weight -->
                    <div class="form-group">

                        <label for="roll-weight" class="col-sm-2 control-label">Roll Weight:</label>
                        
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input class="form-control" id="roll-weight"  name="rollWeight"  value="<?php if (isset($_POST['rollWeight'])) echo $_POST['rollWeight']; ?>" type="number">
                                <span class="input-group-addon">Tons</span>
                            </div>
                        </div>
                    </div>

                </fieldset>

                <fieldset>
                    <legend>Systems Section</legend>
                        <div class="form-group">
                            <label for="sheeter" class="col-sm-2 control-label ">Systems:</label>
                            <div class="col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input name="systems[]" type="checkbox" value="1">
                                        Computer Control with Auto Length Setting with Auto Squareness and Auto Quantity Control
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="systems[]" type="checkbox" value="2">
                                        Web Guide Hydraulic EPC Control and Mechanism
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input id="systems-others-check" name="systems[]" type="checkbox" value="3">
                                        <div class="form-inline">
                                            Others
                                            <input disabled class="form-control" id="systems-others-text" value="<?php if (isset($_POST['systemsOthers'])) echo $_POST['systemsOthers']; ?>" type="text">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>

                </fieldset>

                <fieldset> <!--Price Details Section-->
                    <legend>Price Details</legend>

                    <div class="form-group">
                        <label for="comment" class="control-label col-sm-2">Price:</label>
                        <div class="col-sm-10">
                           <div class="input-group">
                             <span class="input-group-addon">&#8369;</span>
                             <input class="form-control" id="quantity" min="0" name="cutter-price" step="1" type="number" style="width:30%;" />
                               </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset> <!--Other Details Section-->
                    <legend>Other Details</legend>

                    <div class="form-group">
                        <label for="comment" class="control-label col-sm-2">Details:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="8" id="comment" name="otherDetails" value="<?php if (isset($_POST['otherDetails'])) echo $_POST['otherDetails']; ?>"></textarea>
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

        <script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
        <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
        <script type="text/javascript">
            document.getElementById("slitter").onchange = function() {
                    
                if(document.getElementById("slitter").checked) {
                    document.getElementById("slitter-max").removeAttribute("disabled");
                }
                else {
                    document.getElementById("slitter-max").setAttribute("disabled", "disabled");
                    document.getElementById("slitter-max").value = "";
                }
            };

            document.getElementById("ten-rolls-radio").onchange = function() {
                    
                if(document.getElementById("ten-rolls-radio").checked) {
                    document.getElementById("ten-rolls-text").removeAttribute("disabled");
                }
                else {
                    document.getElementById("ten-rolls-text").setAttribute("disabled", "disabled");
                    document.getElementById("ten-rolls-text").value = "";
                }
            };

            document.getElementById("systems-others-check").onchange = function() {
                    
                if(document.getElementById("systems-others-check").checked) {
                    document.getElementById("systems-others-text").removeAttribute("disabled");
                }
                else {
                    document.getElementById("systems-others-text").setAttribute("disabled", "disabled");
                    document.getElementById("systems-others-text").value = "";
                }
            };

            document.getElementById("reel-stand-hydraulic").onchange = function() {
                var radioButtons = document.getElementsByClassName("reel-hydraulic-radio");
                if(document.getElementById("reel-stand-hydraulic").checked) {
                    for (var i = 0; i < radioButtons.length; i++) {
                        radioButtons[i].removeAttribute("disabled");
                    };
                }
                else {
                    for (var i = 0; i < radioButtons.length; i++) {
                        radioButtons[i].setAttribute("disabled", "disabled");
                        radioButtons[i].checked = false;
                    };
                }
            };

            document.getElementById("reel-stand-standard").onchange = function() {
                var radioButtons = document.getElementsByClassName("reel-standard-radio");
                var checkBox = document.getElementsByClassName("shaft-check");
                if(document.getElementById("reel-stand-standard").checked) {
                    for (var i = 0; i < radioButtons.length; i++) {
                        radioButtons[i].removeAttribute("disabled");
                    };
                    for (var i = 0; i < checkBox.length; i++) {
                        checkBox[i].removeAttribute("disabled");
                    };
                }
                else {
                    for (var i = 0; i < radioButtons.length; i++) {
                        radioButtons[i].setAttribute("disabled", "disabled");
                        radioButtons[i].checked = false;
                    };
                    for (var i = 0; i < checkBox.length; i++) {
                        checkBox[i].setAttribute("disabled", "disabled");
                        checkBox[i].checked = false;
                    };
                    document.getElementById("ten-rolls-text").setAttribute("disabled", "disabled");
                    document.getElementById("ten-rolls-text").value = "";
                }
            };
        </script>
</body>
</html>
