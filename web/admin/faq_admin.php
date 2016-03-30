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
    <title>Machinovate | Help/FAQ</title>
</head>
<body>
    <?php include 'header_after_login.php';?>
    
    <div id="faq" class="container">
    <h2 style="text-align: center;">Help/FAQ</h2>
    <h1 style="text-align: center;"><small>Frequently Asked Questions</small></h1>
    <div class="panel-group" id="accordion">
        <div class="faqHeader">General</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">How to generate report?</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                   <p>You could generate a report in the Generate Reports page.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">How to change status of the order?</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  <p> In the order list page where in the tables, there will be a "move" button available at the rightmost part of the table. This button will allow you to change the status of the order.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">How to edit the orders?</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <p> After submitting your order, you will be directed to a summary page which will show the details you have ordered. You will be able to review your order, and choose whether to change the specifications or finally submit your order. Worst case scenario, you can tell the administrator, during the phone call, of what changes you want to create.</p> 
                </div>
            </div>
        </div>

       
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">How can you retrieve deleted orders?</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                   <p>The orders would be only marked as "cancelled," giving you the option to void the deletion of the order.</p> 
                </div>
            </div>
        </div>
           <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">How to add events and agents</a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>  The steps involved in adding events and agents
                    <ul>
                      <a><li>First click the Manage Websites tab.</li></a>
                        <a><li>Choose your desired action.</li></a>
                        <a><li>In adding events, fill up the necessary information and upload a picture file with a file type of blob.</li></a>
                        <a><li>In adding agents, fill up the necessary information.</li></a>
                        <a><li>Click Add Agents of Add Events button to finish.</li></a>
                    </ul></p>
                </div>
            </div>
        </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Will there be more than one admin account?</a>
                </h4>
            </div>

            <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>This would be considered for future company requirements. As of now, only one account for all administrators, only one would be made available.</p>
                </div>
            </div>
           </div>
             <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">How to recover forgotten password?</a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
                   <p>You could recover forgotten password by </p>
                </div>
            </div>
           </div>


     <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Will I be able to delete the admin account?</a>
                </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse">
                <div class="panel-body">
                   <p>Since there will be only one administrator account available, deletion would not be an option. This will be considered with the future improvements of the system regarding the addition of additional administrator accounts.</p>
                </div>
            </div>
    </div>
    </div>

    
    </div>
    </div>
</div>
<style>
    p{
      color: black;
    }
    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "\e072"; /* "play" icon */
        float: right;
        color: #153a7e;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
</style>
    <script type="text/javascript" src="../scripts/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
    <script type="text/javascript">
        document.getElementById("faq").className = "active";
    </script>
</body>
</html>
