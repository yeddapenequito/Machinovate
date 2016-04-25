<?php # Script 12.12 - login.php #4
// This page processes the login form submission.
// The script now stores the HTTP_USER_AGENT value for added security.

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Need two helper files:
	require ('includes/login_functions.inc.php');
	require ('../../mysqli_connect.php');
		
	// Check the login:
	list ($check, $data) = check_login($dbc, $_POST['username'], $_POST['password']);
	
	if ($check) { // OK!
		
		// Set the session data:
		session_start();
		$_SESSION['user_id'] = $data['user_id'];
		$_SESSION['first_name'] = $data['first_name'];
		
		 //session_start();
    	/*if($_POST['captcha'] != $_SESSION['digit']){
    		echo "Wrong Captcha!";
    		redirect_user("index.inc.php");


    	}*/
    

		// Store the HTTP_USER_AGENT:
		$_SESSION['agent'] = md5($_SERVER['HTTP_USER_AGENT']);

		// Redirect:
		redirect_user('order_list.php');
			
	} else { // Unsuccessful!

		// Assign $data to $errors for index.inc.php:
		$errors = $data;
		redirect_user('error_login.php');
		
	}
		
	mysqli_close($dbc); // Close the database connection.
	

} // End of the main submit conditional.

// Create the page:
	
?>
