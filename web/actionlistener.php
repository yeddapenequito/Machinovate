<?php
session_start();
require "DBConnection/DBConnection.php";

/**
fname : $("input[name=last_name]").val(),
				lname : $("input[name=first_name]").val(),
				company : $("input[name=company]").val(),
				address : $("input[name=address]").val(),
				mobile : $("input[name=contact_details]").val(),
				email : $("input[name=email]").val(),
				shipdep : "To Follow up",
				shipment :  $("input[name=contact_details]").val(),
				pterm : "To Follow Up",
				_downpayment : $("input[name=telegraphic-transfer-a]").val(),
				_before : $("input[name=telegraphic-transfer-b]").val(),
				_upon : $("input[name=telegraphic-transfer-c]").val()
*/

$sname = $_SESSION["cart"];


$db =  new DBConnection();
 
if(isset($_GET["slitter"])){

$selected = $_SESSION["selected_item"];


echo "

$_POST[fname] <br/>
$_POST[lname] <br/>
$_POST[company] <br/>
$_POST[address] <br/>
$_POST[mobile] <br/>
$_POST[email] <br/>
$_POST[shipdep] <br/>
$_POST[shipment] <br/>
$_POST[pterm] <br/>
$_POST[_downpayment] <br/>
$_POST[_before] <br/>
$_POST[_upon]";
}

$db->executeSql("insert into item_orders (cmsr_id, cmsr_status, fname, lname, company, address, mobile, email, ship_del_basis, shipment, pterms, _downpayment, _before, _upon) 
	values ($selected, 'Pending', '$_POST[fname]', '$_POST[lname]', '$_POST[company]', '$_POST[address]', '$_POST[mobile]', '$_POST[email]', '$_POST[shipdep]', $_POST[shipment], 
	'$_POST[pterm]', $_POST[_downpayment], $_POST[_before], $_POST[_upon])");

?>