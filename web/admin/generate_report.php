<?php
	session_start();
	// The function header by sending raw excel
	header("Content-type: application/vnd-ms-excel");
	 
	// Defines the name of the export file "<insert name here>.xls"
	header("Content-Disposition: attachment; filename=order-report.xls");
	
	// Add data table
	include 'data.php';
?>