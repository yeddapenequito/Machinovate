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
                    <div class="form-group required">

                        <label for="type" class="control-label col-sm-2">Type:</label>

                        <div class="col-sm-10">
                            <div class="radio">
                                <label><input class="type" name="sheeterType" type="radio" value="SH_PIV"/>
                                    MACH-SV (PIV - Overlapping)</label>
                            </div>
                            <div class="radio">
                                <label><input class="type" name="sheeterType" type="radio" value="SH_SRV"/> 
                                    MACH-SRV (Servo - Overlapping)</label>
                            </div>
                            <div class="radio">
                                <label><input class="type" name="sheeterType" type="radio" value="SH_Compact" />
                                    MACH-Compact (Standard)</label>
                            </div>
                            <div class="radio">
                                <label><input class="type" name="sheeterType" type="radio" value="SH_Sync" />
                                    MACH-Sync (Twin Knife - Overlapping)</label>
                            </div>
                        </div>
                    </div>

                    <!-- Production Vol. -->
                    <div class="form-group required">

                        <label class="control-label col-sm-2" for="production-vol">Production Volume:</label>

                        <div class="col-sm-10">
                            <div class="input-group">
                                
                                <input class="form-control" id="production-vol" min="0.001" name="productionVolume" step="0.001" type="number" />
                                <span class="input-group-addon">Tons per day</span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <!-- Paper Type -->
                    <div class="form-group required">

                        <label class="control-label col-sm-2" for="paper-type">Paper Type:</label>

                        <div class="col-sm-10">
                            <input class="form-control" id="paper-type" name="paperType" placeholder="e.g. Ledger, Newsprint, Carbonless" type="text" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <!-- GSM -->
                    <div class="form-group required">

                        <label  class="control-label col-sm-2" for="gsm">GSM:</label>

                        <div class="col-sm-10">
                            <div class="form-inline">
                                <input class="form-control" min="0.001" name="gsmMin" placeholder="Min" size="5" step="0.001" type="number"/>
                                <span>to</span>
                                <input class="form-control" min="0.001" name="gsmMax" placeholder="Max" size="5" step="0.001" type="number" />
                                grams per square meter
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>


                    <!-- Roll Diameter -->
                    <div class="form-group required">

                        <label class="control-label col-sm-2" for="roll-diameter">Roll Diameter:</label>

                        <div class="col-sm-10">
                            <div class="form-inline">

                                    <input class="form-control" min="0.001" name="rollDiameterMin" placeholder="Min" size="5" step="0.001" type="number" />

                                    <span>to</span>

                                    <input class="form-control" min="0.001" name="rollDiameterMax" placeholder="Max" size="5" step="0.001" type="number" />

                                    <select id="rdUnit" class="form-control" name="rollDiameterUnit"> 
                                        <option value="&quot;" >inches</option>
                                        <option value="mm" >millimeters</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Cut off Length -->
                    <div class="form-group required">

                        <label  class="control-label col-sm-2" for="gsm">Cut off Length:</label>

                        <div class="col-sm-10">
                            <div class="form-inline">
                                <input class="form-control" min="0.001" name="cutOffLengthMin" placeholder="Min" size="5" step="0.001" type="number" />

                                <span>to</span>

                                <input class="form-control" min="0.001" name="cutOffLengthMax" placeholder="Max" size="5" step="0.001" type="number" />

                                <select  id="cutLenUnit" class="form-control" name="cutOffLengthUnit"> 
                                    <option value="&quot;" >inches</option>
                                    <option value="mm" >millimeters</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Slitting Width -->
                    <div class="form-group required">

                        <label class="control-label col-sm-2" for="slitting-width">Slitting Width:</label>

                        <div class="col-sm-10">
                            <div class="form-inline">
                                <input class="form-control" min="0.001" name="slittingWidthMin" placeholder="Min" size="5" step="0.001" type="number" />

                                <span>to</span>

                                <input class="form-control" min="0.001" name="slittingWidthMax" placeholder="Max" size="5" step="0.001" type="number" />

                                <select id="swUnit" class="form-control" name="slittingWidthUnit"> 
                                    <option value="&quot;" >inches</option>
                                    <option value="mm" >millimeters</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset> <!--Cutting Section-->
                    <legend>Cutting Section</legend>
                    
                    <!-- Main Drive -->
                    <div class="form-group required">

                        <label for="main-drive" class="control-label col-sm-2">Main Drive:</label>

                        <div class="col-sm-10">
                            <div class="radio">
                                <label><input checked id="main-drive" name="mainDriveRadio" type="radio" value="Inverter" >
                                    Inverter</label>
                            </div>
                            <div class="radio">
                                <label><input id="main-drive" name="mainDriveRadio" type="radio" value="Servo Motor and Touch Screen" >
                                    Servo Motor and Touch Screen</label>
                            </div>
                        </div>
                    </div>

                    <!-- Knife -->
                    <div class="form-group required">

                        <label for="knife" class="control-label col-sm-2">Knife:</label>

                        <div class="col-sm-10">
                            <div class="radio">
                                <label><input checked id="knife" name="knifeRadio" type="radio" value="Single Knife" >
                                    Single Knife</label>
                            </div>
                            <div class="radio">
                                <label><input id="knife" name="knifeRadio" type="radio" value="Twin Knife">
                                    Twin Knife</label>
                            </div>
                        </div>
                    </div>

                    <!-- Slitter -->
                    <div class="form-group required">
                        <label class="control-label col-sm-2">Slitter:</label>
                        <div class="col-sm-10">
                            
                            <div class="checkbox">
                                <label><input id="slitter" name="slitterCheckbox" type="checkbox"/>
                                    <div class="form-inline">
                                        <div class="form-group">

                                            <label class="control-label" for="slitter-max">
                                                3 Station Slitter Attachment with
                                                <input class="form-control" disabled id="slitter-max" name="slitterMax" type="number"/>
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
                    <div class="form-group required">
                        <label for="sheeter" class="control-label col-sm-2">Reel Stand:</label>
                        <div class="col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input class="reel-stand-checkbox" id="reel-stand-hydraulic" name="reelStand" type="checkbox" value="1">
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
                                    <input class="reel-stand-checkbox" id="reel-stand-standard" name="reelStand" type="checkbox" value="2)">
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
                                                Ten(10) Rolls + <input class="form-control" disabled id="ten-rolls-text" name="noOfAdditionalRolls" type="number"> Rolls
                                            </div>
                                        </label>
                                    </div>
                                </label>
                            </div>

                            <div class="checkbox">
                                
                                <label>
                                    <input id='atcds' class="reel-stand-checkbox" name="reelStand[]" type="checkbox" value="3" />
                                    Auto Tension Control with Decurler System
                                </label>
                            </div>

                            <div class="checkbox">
                                
                                <label>
                                    <input id='iatss' class="reel-stand-checkbox" name="reelStand[]" type="checkbox" value="4" />
                                    Individual Auto Tension for Stationary Stand
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Shaft -->
                    <div class="form-group required">
                        
                        <label for="sheeter" class="col-sm-2 control-label">Shaft:</label>

                        <div class="col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input id='ms' class="shaft-check" name="shaft[]" type="checkbox" value="1" />
                                    Mechanical Shaft
                                </label>
                            </div>  
                            <div class="checkbox">
                                <label>
                                    <input id='as' class="shaft-check" name="shaft[]" type="checkbox" value="2" />
                                    Air Shaft (Heavy Duty)
                                </label>
                            </div>  
                            <div class="checkbox">
                                <label>
                                    <input id='oth' class="shaft-check" name="shaft[]" type="checkbox" value="3" />
                                    Others
                                </label>
                            </div>                          
                        </div>
                    </div>

                    <!-- Roll Weight -->
                    <div class="form-group required">

                        <label for="roll-weight" class="col-sm-2 control-label">Roll Weight:</label>
                        
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input class="form-control" min="0.001" step="0.001" id="roll-weight"  name="rollWeight" type="number" />
                                <span class="input-group-addon">Tons</span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                </fieldset>

                <fieldset>
                    <legend>Systems Section</legend>
                        <div class="form-group required">
                            <label for="sheeter" class="col-sm-2 control-label ">Systems:</label>
                            <div class="col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input id='ccalsasaqc' name="systems[]" type="checkbox" value="1"/>
                                        Computer Control with Auto Length Setting with Auto Squareness and Auto Quantity Control
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input id='wghepc' name="systems[]" type="checkbox" value="2" />
                                        Web Guide Hydraulic EPC Control and Mechanism
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input id="systems-others-check" name="systems[]" type="checkbox" value="3" >
                                        <div class="form-inline">
                                            Others
                                            <input name='sysOthers'disabled class="form-control" id="systems-others-text" type="text" >
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                </fieldset>

                <!--Other Details Section-->
                <fieldset> 
                    <legend>Other Details</legend>

                    <div class="form-group">
                        <label for="comment" class="control-label col-sm-2">Details:</label>
                        <div class="col-sm-10">
                            <textarea placeholder="Place your additional requirements here if any." class="form-control" rows="8" id="comment" name="otherDetails"></textarea>
                        </div>
                    </div>
                </fieldset>

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
        <script type="text/javascript" src="../formlistener.js"></script>
        <script type="text/javascript">

            var type = form.sheeterType;
            var loc = window.location.href;
            var code = Number(loc.substr(loc.lastIndexOf("=") + 1));

            if (code && code < type.length) {
                type[code].checked = true;
            } else {
                type[0].checked = true;
            }

            document.getElementById("slitter").onchange = function() {
                    
                if(document.getElementById("slitter").checked) {
                    document.getElementById("slitter-max").removeAttribute("disabled");
                    document.getElementById("slitter-max").setAttribute("required", "required");
                }
                else {
                    document.getElementById("slitter-max").setAttribute("disabled", "disabled");
                    document.getElementById("slitter-max").removeAttribute("required");
                    document.getElementById("slitter-max").value = "";
                }
            };

            document.getElementById("ten-rolls-radio").onchange = function() {
                    
                if(document.getElementById("ten-rolls-radio").checked) {
                    document.getElementById("ten-rolls-text").removeAttribute("disabled");
                    document.getElementById("ten-rolls-text").setAttribute("required", "required");
                }
                else {
                    document.getElementById("ten-rolls-text").setAttribute("disabled", "disabled");
                    document.getElementById("ten-rolls-text").removeAttribute("required");
                    document.getElementById("ten-rolls-text").value = "";
                }
            };

            document.getElementById("systems-others-check").onchange = function() {
                    
                if(document.getElementById("systems-others-check").checked) {
                    document.getElementById("systems-others-text").removeAttribute("disabled");
                    document.getElementById("systems-others-text").setAttribute("required", "required");
                }
                else {
                    document.getElementById("systems-others-text").setAttribute("disabled", "disabled");
                    document.getElementById("systems-others-text").removeAttribute("required");
                    document.getElementById("systems-others-text").value = "";
                }
            };

            document.getElementById("reel-stand-hydraulic").onchange = function() {
                var radioButtons = document.getElementsByClassName("reel-hydraulic-radio");
                if(document.getElementById("reel-stand-hydraulic").checked) {
                    for (var i = 0; i < radioButtons.length; i++) {
                        radioButtons[i].removeAttribute("disabled");
                    };
                    radioButtons[0].checked = true;
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
                    radioButtons[0].checked = true;
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
