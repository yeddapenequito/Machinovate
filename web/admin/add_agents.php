<!--PHP -->

<?php # Script 9.5 - register.php #2
// This script performs an INSERT query to add a record to the agents table
session_start(); // Start the session.

// If no session value is present, redirect the user:
// Also validate the HTTP_USER_AGENT!
if (!isset($_SESSION['agent']) OR ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT']) )) {

	// Need the functions:
	require ('includes/login_functions.inc.php');
	redirect_user();	

}
$page_title = 'Machinovate | Add Agent';
include ('header_after_login.php');

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('../../mysqli_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	
	// Check for a first name:
	if (empty($_POST['first_name'])) {
		$errors[] = 'You forgot to enter the first name.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
	}
	
	// Check for a last name:
	if (empty($_POST['last_name'])) {
		$errors[] = 'You forgot to enter the last name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
	}
	
	// Check for the country
	if (empty($_POST['country'])) {
		$errors[] = 'You forgot to enter the country.';
	} else {
		$countrynum = $_POST['country'];

		switch($_POST['country']){
				case "af": $country = "Afghanistan"; break;
				case "ax": $country = "Åland Islands";  break;
				case "al": $country = "Albania"; break;
				case "dz": $country = "Algeria"; break;
				case "as": $country = "American Samoa";  break;
				case "ad": $country = "Andorra";  break;
				case "ao": $country = "Angola"; break;
				case "ai": $country = "Anguilla"; break;
				case "aq": $country = "Antarctica"; break;
				case "ag": $country = "Antigua and Barbuda"; break;
				case "ar": $country = "Argentina"; break;
				case "am": $country = "Armenia"; break;
				case "aw": $country = "Aruba"; break;
				case "au": $country = "Australia"; break;
				case "at": $country = "Austria"; break;
				case "az": $country = "Azerbaijan"; break;
				case "bs": $country = "Bahamas"; break;
				case "bh": $country = "Bahrain"; break;
				case "bd": $country = "Bangladesh"; break;
				case "bb": $country = "Barbados"; break; 
				case "by": $country = "Belarus"; break;
				case "be": $country = "Belgium"; break;
				case "bz": $country = "Belize"; break;
				case "bj": $country = "Benin"; break;
				case "bm": $country = "Bermuda"; break;
				case "bt": $country = "Bhutan"; break;
				case "bo": $country = "Bolivia"; break;
				case "ba": $country = "Bosnia and Herzegovina"; break;
				case "bw": $country = "Botswana"; break;
				case "bv": $country = "Bouvet Island";  break;
				case "br": $country = "Brazil"; break;
				case "io": $country = "British Indian Ocean Territory"; break;
				case "bn": $country = "Brunei Darussalam"; break;
				case "bg": $country = "Bulgaria"; break;
				case "bf": $country = "Burkina Faso"; break;
				case "bi": $country = "Burundi"; break;
				case "kh": $country = "Cambodia"; break;
				case "cm": $country = "Cameroon"; break;
				case "ca": $country = "Canada";  break;
				case "cv": $country = "Cape Verde  "; break;
				case "ky": $country = "Cayman Islands"; break;
				case "cf": $country = "Central African Republic"; break;
				case "td": $country = "Chad"; break;
				case "cl": $country = "Chile"; break;
				case "cn": $country = "China"; break;
				case "cx": $country = "Christmas Island"; break;
				case "cc": $country = "Cocos (Keeling) Islands"; break;
				case "co": $country = "Colombia"; break;
				case "km": $country = "Comoros"; break;
				case "cg": $country = "Congo"; break;
				case "cd": $country = "Congo, The Democratic Republic of The"; break;
				case "ck": $country = "Cook Islands"; break;
				case "cr": $country = "Costa Rica"; break;
				case "ci": $country = "Cote D'ivoire"; break;
				case "hr": $country = "Croatia"; break;
				case "cu": $country = "Cuba"; break;
				case "cy": $country = "Cyprus"; break;
				case "cz": $country = "Czech Republic"; break;
				case "dk": $country = "Denmark"; break;
				case "dj": $country = "Djibouti"; break;
				case "dm": $country = "Dominica"; break;
				case "do": $country = "Dominican Republic"; break;
				case "ec": $country = "Ecuador"; break;
				case "eg": $country = "Egypt"; break;
				case "sv": $country = "El Salvador"; break;
				case "gq": $country = "Equatorial Guinea"; break;
				case "er": $country = "Eritrea"; break;
				case "ee": $country = "Estonia"; break;
				case "et": $country = "Ethiopia"; break;
				case "fk": $country = "Falkland Islands (Malvinas)"; break;
				case "fo": $country = "Faroe Islands"; break;
				case "fj": $country = "Fiji"; break;
				case "fi": $country = "Finland"; break;
				case "fr": $country = "France"; break;
				case "gf": $country = "French Guiana"; break;
				case "pf": $country = "French Polynesia"; break;
				case "tf": $country = "French Southern Territories"; break;
				case "ga": $country = "Gabon"; break;
				case "gm": $country = "Gambia"; break;
				case "ge": $country = "Georgia"; break;
				case "de": $country = "Germany"; break;
				case "gh": $country = "Ghana"; break;
				case "gi": $country = "Gibraltar"; break;
				case "gr": $country = "Greece"; break;
				case "gl": $country = "Greenland"; break;
				case "gd": $country = "Grenada"; break;
				case "gp": $country = "Guadeloupe"; break;
				case "gu": $country = "Guam"; break;
				case "gt": $country = "Guatemala"; break;
				case "gg": $country = "Guernsey"; break;
				case "gn": $country = "Guinea"; break;
				case "gw": $country = "Guinea-bissau"; break;
				case "gy": $country = "Guyana"; break;
				case "ht": $country = "Haiti";  break;
				case "hm": $country = "Heard Island and Mcdonald Islands"; break;
				case "va": $country = "Holy See (Vatican City State)"; break;
				case "hn": $country = "Honduras"; break;
				case "hk": $country = "Hong Kong"; break;
				case "hu": $country = "Hungary"; break;
				case "is": $country = "Iceland"; break;
				case "in": $country = "India"; break;
				case "id": $country = "Indonesia"; break;
				case "ir": $country = "Iran, Islamic Republic of"; break;
				case "iq": $country = "Iraq"; break;
				case "ie": $country = "Ireland"; break;
				case "im": $country = "Isle of Ma"; break;
				case "il": $country = "Israel"; break;
				case "it": $country = "Italy"; break;
				case "jm": $country = "Jamaica"; break;
				case "jp": $country = "Japan"; break;
				case "je": $country = "Jersey"; break;
				case "jo": $country = "Jordan"; break;
				case "kz": $country = "Kazakhstan"; break;
				case "ke": $country = "Kenya"; break;
				case "ki": $country = "Kiribati"; break;
				case "kp": $country = "Korea, Democratic People's Republic of"; break;
				case "kr": $country = "Korea, Republic of"; break;
				case "kw": $country = "Kuwait"; break;
				case "kg": $country = "Kyrgyzstan"; break;
				case "la": $country = "Lao People's Democratic Republic"; break;
				case "lv": $country = "Latvia "; break;
				case "lb": $country = "Lebanon"; break;
				case "ls": $country = "Lesotho"; break;
				case "lr": $country = "Liberia"; break;
				case "ly": $country = "Libyan Arab Jamahiriya"; break;
				case "li": $country = "Liechtenstein"; break;
				case "lt": $country = "Lithuania"; break;
				case "lu": $country = "Luxembourg"; break;
				case "mo": $country = "Macao"; break;
				case "mk": $country = "Macedonia, The Former Yugoslav Republic of"; break;
				case "mg": $country = "Madagascar"; break;
				case "mw": $country = "Malawi"; break;
				case "my": $country = "Malaysia"; break;
				case "mv": $country = "Maldives"; break;
				case "ml": $country = "Mali"; break;
				case "mt": $country = "Malta"; break;
				case "mh": $country = "Marshall Islands"; break;
				case "mq": $country = "Martinique"; break;
				case "mr": $country = "Mauritania"; break;
				case "mu": $country = "Mauritius"; break;
				case "yt": $country = "Mayotte"; break;
				case "mx": $country = "Mexico"; break;
				case "fm": $country = "Micronesia, Federated States of"; break;
				case "md": $country = "Moldova, Republic of"; break;
				case "mc": $country = "Monaco"; break;
				case "mn": $country = "Mongolia"; break;
				case "me": $country = "Montenegro"; break;
				case "ms": $country = "Montserrat"; break;
				case "ma": $country = "Morocco"; break;
				case "mz": $country = "Mozambique"; break;
				case "mm": $country = "Myanmar"; break;
				case "na": $country = "Namibia"; break;
				case "nr": $country = "Nauru"; break;
				case "np": $country = "Nepal"; break;
				case "nl": $country = "Netherlands"; break;
				case "an": $country = "Netherlands Antilles"; break;
				case "nc": $country = "New Caledonia"; break; 
				case "nz": $country = "New Zealand"; break;
				case "ni": $country = "Nicaragua";  break;
				case "ne": $country = "Niger"; break;
				case "ng": $country = "Nigeria"; break;
				case "nu": $country = "Niue"; break;
				case "nf": $country = "Norfolk Island"; break;
				case "mp": $country = "Northern Mariana Islands"; break;
				case "no": $country = "Norway"; break;
				case "om": $country = "Oman"; break;
				case "pk": $country = "Pakistan"; break;
				case "pw": $country = "Palau"; break;
				case "ps": $country = "Palestinian Territory, Occupied"; break;
				case "pa": $country = "Panama"; break;
				case "pg": $country = "Papua New Guinea"; break;
				case "py": $country = "Paraguay"; break;
				case "pe": $country = "Peru"; break;
				case "ph": $country = "Philippines"; break;
				case "pn": $country = "Pitcairn"; break;
				case "pl": $country = "Poland"; break;
				case "pt": $country = "Portugal"; break;
				case "pr": $country = "Puerto Rico"; break;
				case "qa": $country = "Qatar"; break;
				case "re": $country = "Reunion"; break;
				case "ro": $country = "Romania"; break;
				case "ru": $country = "Russian Federation"; break;
				case "rw": $country = "Rwanda"; break;
				case "sh": $country = "Saint Helena"; break;
				case "kn": $country = "Saint Kitts and Nevis"; break;
				case "lc": $country = "Saint Lucia"; break;
				case "pm": $country = "Saint Pierre and Miquelon"; break;
				case "vc": $country = "Saint Vincent and The Grenadines"; break;
				case "ws": $country = "Samoa"; break;
				case "sm": $country = "San Marino"; break;
				case "st": $country = "Sao Tome and Principe"; break;
				case "sa": $country = "Saudi Arabia"; break;
				case "sn": $country = "Senegal"; break;
				case "rs": $country = "Serbia"; break;
				case "sc": $country = "Seychelles"; break;
				case "sl": $country = "Sierra Leone"; break;
				case "sg": $country = "Singapore"; break;
				case "sk": $country = "Slovakia"; break;
				case "si": $country = "Slovenia"; break;
				case "sb": $country = "Solomon Islands"; break;
				case "so": $country = "Somalia"; break;
				case "za": $country = "South Africa"; break;
				case "gs": $country = "South Georgia and The South Sandwich Islands"; break;
				case "es": $country = "Spain"; break;
				case "lk": $country = "Sri Lanka"; break;
				case "sd": $country = "Sudan"; break;
				case "sr": $country = "Suriname"; break;
				case "sj": $country = "Svalbard and Jan Mayen"; break;
				case "sz": $country = "Swaziland"; break;
				case "se": $country = "Sweden"; break;
				case "ch": $country = "Switzerland"; break;
				case "sy": $country = "Syrian Arab Republic"; break;
				case "tw": $country = "Taiwan, Province of China"; break;
				case "tj": $country = "Tajikistan"; break;
				case "tz": $country = "Tanzania, United Republic of"; break;
				case "th": $country = "Thailand"; break;
				case "tl": $country = "Timor-leste"; break;
				case "tg": $country = "Togo"; break;
				case "tk": $country = "Tokelau"; break;
				case "to": $country = "Tonga"; break;
				case "tt": $country = "Trinidad and Tobago"; break;
				case "tn": $country = "Tunisia"; break;
				case "tr": $country = "Turkey"; break;
				case "tm": $country = "Turkmenistan"; break;
				case "tc": $country = "Turks and Caicos Islands"; break;
				case "tv": $country = "Tuvalu"; break;
				case "ug": $country = "Uganda"; break;
				case "ua": $country = "Ukraine"; break;
				case "gb": $country = "United Kingdom"; break;
				case "us": $country = "United States"; break;
				case "um": $country = "United States Minor Outlying Islands";  break;
				case "uy": $country = "Uruguay"; break;
				case "uz": $country = "Uzbekistan"; break;
				case "vu": $country = "Vanuatu"; break;
				case "ve": $country = "Venezuela"; break;
				case "vn": $country = "Viet Nam "; break;
				case "vg": $country = "Virgin Islands, British"; break;
				case "vi": $country = "Virgin Islands, U.S."; break;
				case "wf": $country = "Wallis and Futuna"; break;
				case "eh": $country = "Western Sahara"; break;
				case "ye": $country = "Yemen"; break;
				case "zm": $country = "Zambia"; break;
				case "zw": $country = "Zimbabwe";  break;
		}
	}

	// Check for an email address:
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$email = mysqli_real_escape_string($dbc, trim($_POST['email']));
	}


	//Check for the contact number:
	if (empty($_POST['contact'])) {
		$errors[] = 'You forgot to enter the contact details.';
	} else {
		$contact = mysqli_real_escape_string($dbc, trim($_POST['contact']));
	}

	if (empty($errors)) { // If everything's OK.
	
		// Register the agent in the database...
		
		// Make the query:
		$q = "INSERT INTO agents (first_name, last_name, country, country_num, email, contact) VALUES ('$fn', '$ln', '$country', '$countrynum', '$email', '$contact')";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>An agent has been registered!</p><p><br /></p>';	
		header('Location: /Machinovate/web/admin/account_successful.php');
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">The agent could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			header('Location: /Machinovate/web/admin/account_failed.php');
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						
		} // End of if ($r) IF.
		
		mysqli_close($dbc); // Close the database connection.

		// Include the footer and quit the script:
		exit();
		
	} else { // Report the errors.
	
		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';
		
	} // End of if (empty($errors)) IF.
	
	mysqli_close($dbc); // Close the database connection.

} // End of the main Submit conditional.
?>


<!--HTML -->
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../styles/bootstrap.min.css">
		<link rel="stylesheet" href="../styles/main.css">
		<link rel="stylesheet" href="../styles/admin.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<form action="add_agents.php" method="post" class="form-horizontal col-sm-6" role="form">
					<div class="form-group">
						<legend>Add Agents</legend>
					</div>
					<div class="form-group">
						<label for="country" class="col-sm-3 control-label">Country:</label>
						<div class="col-sm-9">
							<select class="form-control" id="<?php if (isset($_POST['country'])) echo $country; ?>" name="country">
								<option> Select Country... </option>
								<option value="af">Afghanistan </option>
								<option value="ax">Åland Islands </option>
								<option value="al">Albania </option>
								<option value="dz">Algeria </option>
								<option value="as">American Samoa </option>
								<option value="ad">Andorra </option>
								<option value="ao">Angola </option>
								<option value="ai">Anguilla </option>
								<option value="aq">Antarctica </option>
								<option value="ag">Antigua and Barbuda </option>
								<option value="ar">Argentina </option>
								<option value="am">Armenia </option>
								<option value="aw">Aruba </option>
								<option value="au">Australia </option>
								<option value="at">Austria </option>
								<option value="az">Azerbaijan </option>
								<option value="bs">Bahamas </option>
								<option value="bh">Bahrain </option>
								<option value="bd">Bangladesh </option>
								<option value="bb">Barbados </option>
								<option value="by">Belarus </option>
								<option value="be">Belgium </option>
								<option value="bz">Belize </option>
								<option value="bj">Benin </option>
								<option value="bm">Bermuda </option>
								<option value="bt">Bhutan </option>
								<option value="bo">Bolivia </option>
								<option value="ba">Bosnia and Herzegovina </option>
								<option value="bw">Botswana </option>
								<option value="bv">Bouvet Island </option>
								<option value="br">Brazil </option>
								<option value="io">British Indian Ocean Territory </option>
								<option value="bn">Brunei Darussalam </option>
								<option value="bg">Bulgaria </option>
								<option value="bf">Burkina Faso </option>
								<option value="bi">Burundi </option>
								<option value="kh">Cambodia </option>
								<option value="cm">Cameroon </option>
								<option value="ca">Canada </option>
								<option value="cv">Cape Verde </option>
								<option value="ky">Cayman Islands </option>
								<option value="cf">Central African Republic </option>
								<option value="td">Chad </option>
								<option value="cl">Chile </option>
								<option value="cn">China </option>
								<option value="cx">Christmas Island </option>
								<option value="cc">Cocos (Keeling) Islands </option>
								<option value="co">Colombia </option>
								<option value="km">Comoros </option>
								<option value="cg">Congo </option>
								<option value="cd">Congo, The Democratic Republic of The </option>
								<option value="ck">Cook Islands </option>
								<option value="cr">Costa Rica </option>
								<option value="ci">Cote D'ivoire </option>
								<option value="hr">Croatia </option>
								<option value="cu">Cuba </option>
								<option value="cy">Cyprus </option>
								<option value="cz">Czech Republic </option>
								<option value="dk">Denmark </option>
								<option value="dj">Djibouti </option>
								<option value="dm">Dominica </option>
								<option value="do">Dominican Republic </option>
								<option value="ec">Ecuador </option>
								<option value="eg">Egypt </option>
								<option value="sv">El Salvador </option>
								<option value="gq">Equatorial Guinea </option>
								<option value="er">Eritrea </option>
								<option value="ee">Estonia </option>
								<option value="et">Ethiopia </option>
								<option value="fk">Falkland Islands (Malvinas) </option>
								<option value="fo">Faroe Islands </option>
								<option value="fj">Fiji </option>
								<option value="fi">Finland </option>
								<option value="fr">France </option>
								<option value="gf">French Guiana </option>
								<option value="pf">French Polynesia </option>
								<option value="tf">French Southern Territories </option>
								<option value="ga">Gabon </option>
								<option value="gm">Gambia </option>
								<option value="ge">Georgia </option>
								<option value="de">Germany </option>
								<option value="gh">Ghana </option>
								<option value="gi">Gibraltar </option>
								<option value="gr">Greece </option>
								<option value="gl">Greenland </option>
								<option value="gd">Grenada </option>
								<option value="gp">Guadeloupe </option>
								<option value="gu">Guam </option>
								<option value="gt">Guatemala </option>
								<option value="gg">Guernsey </option>
								<option value="gn">Guinea </option>
								<option value="gw">Guinea-bissau </option>
								<option value="gy">Guyana </option>
								<option value="ht">Haiti </option>
								<option value="hm">Heard Island and Mcdonald Islands </option>
								<option value="va">Holy See (Vatican City State) </option>
								<option value="hn">Honduras </option>
								<option value="hk">Hong Kong </option>
								<option value="hu">Hungary </option>
								<option value="is">Iceland </option>
								<option value="in">India </option>
								<option value="id">Indonesia </option>
								<option value="ir">Iran, Islamic Republic of </option>
								<option value="iq">Iraq </option>
								<option value="ie">Ireland </option>
								<option value="im">Isle of Man </option>
								<option value="il">Israel </option>
								<option value="it">Italy </option>
								<option value="jm">Jamaica </option>
								<option value="jp">Japan </option>
								<option value="je">Jersey </option>
								<option value="jo">Jordan </option>
								<option value="kz">Kazakhstan </option>
								<option value="ke">Kenya </option>
								<option value="ki">Kiribati </option>
								<option value="kp">Korea, Democratic People's Republic of </option>
								<option value="kr">Korea, Republic of </option>
								<option value="kw">Kuwait </option>
								<option value="kg">Kyrgyzstan </option>
								<option value="la">Lao People's Democratic Republic </option>
								<option value="lv">Latvia </option>
								<option value="lb">Lebanon </option>
								<option value="ls">Lesotho </option>
								<option value="lr">Liberia </option>
								<option value="ly">Libyan Arab Jamahiriya </option>
								<option value="li">Liechtenstein </option>
								<option value="lt">Lithuania </option>
								<option value="lu">Luxembourg </option>
								<option value="mo">Macao </option>
								<option value="mk">Macedonia, The Former Yugoslav Republic of </option>
								<option value="mg">Madagascar </option>
								<option value="mw">Malawi </option>
								<option value="my">Malaysia </option>
								<option value="mv">Maldives </option>
								<option value="ml">Mali </option>
								<option value="mt">Malta </option>
								<option value="mh">Marshall Islands </option>
								<option value="mq">Martinique </option>
								<option value="mr">Mauritania </option>
								<option value="mu">Mauritius </option>
								<option value="yt">Mayotte </option>
								<option value="mx">Mexico </option>
								<option value="fm">Micronesia, Federated States of </option>
								<option value="md">Moldova, Republic of </option>
								<option value="mc">Monaco </option>
								<option value="mn">Mongolia </option>
								<option value="me">Montenegro </option>
								<option value="ms">Montserrat </option>
								<option value="ma">Morocco </option>
								<option value="mz">Mozambique </option>
								<option value="mm">Myanmar </option>
								<option value="na">Namibia </option>
								<option value="nr">Nauru </option>
								<option value="np">Nepal </option>
								<option value="nl">Netherlands </option>
								<option value="an">Netherlands Antilles </option>
								<option value="nc">New Caledonia </option>
								<option value="nz">New Zealand </option>
								<option value="ni">Nicaragua </option>
								<option value="ne">Niger </option>
								<option value="ng">Nigeria </option>
								<option value="nu">Niue </option>
								<option value="nf">Norfolk Island </option>
								<option value="mp">Northern Mariana Islands </option>
								<option value="no">Norway </option>
								<option value="om">Oman </option>
								<option value="pk">Pakistan </option>
								<option value="pw">Palau </option>
								<option value="ps">Palestinian Territory, Occupied </option>
								<option value="pa">Panama </option>
								<option value="pg">Papua New Guinea </option>
								<option value="py">Paraguay </option>
								<option value="pe">Peru </option>
								<option value="ph">Philippines </option>
								<option value="pn">Pitcairn </option>
								<option value="pl">Poland </option>
								<option value="pt">Portugal </option>
								<option value="pr">Puerto Rico </option>
								<option value="qa">Qatar </option>
								<option value="re">Reunion </option>
								<option value="ro">Romania </option>
								<option value="ru">Russian Federation </option>
								<option value="rw">Rwanda </option>
								<option value="sh">Saint Helena </option>
								<option value="kn">Saint Kitts and Nevis </option>
								<option value="lc">Saint Lucia </option>
								<option value="pm">Saint Pierre and Miquelon </option>
								<option value="vc">Saint Vincent and The Grenadines </option>
								<option value="ws">Samoa </option>
								<option value="sm">San Marino </option>
								<option value="st">Sao Tome and Principe </option>
								<option value="sa">Saudi Arabia </option>
								<option value="sn">Senegal </option>
								<option value="rs">Serbia </option>
								<option value="sc">Seychelles </option>
								<option value="sl">Sierra Leone </option>
								<option value="sg">Singapore </option>
								<option value="sk">Slovakia </option>
								<option value="si">Slovenia </option>
								<option value="sb">Solomon Islands </option>
								<option value="so">Somalia </option>
								<option value="za">South Africa </option>
								<option value="gs">South Georgia and The South Sandwich Islands </option>
								<option value="es">Spain </option>
								<option value="lk">Sri Lanka </option>
								<option value="sd">Sudan </option>
								<option value="sr">Suriname </option>
								<option value="sj">Svalbard and Jan Mayen </option>
								<option value="sz">Swaziland </option>
								<option value="se">Sweden </option>
								<option value="ch">Switzerland </option>
								<option value="sy">Syrian Arab Republic </option>
								<option value="tw">Taiwan, Province of China </option>
								<option value="tj">Tajikistan </option>
								<option value="tz">Tanzania, United Republic of </option>
								<option value="th">Thailand </option>
								<option value="tl">Timor-leste </option>
								<option value="tg">Togo </option>
								<option value="tk">Tokelau </option>
								<option value="to">Tonga </option>
								<option value="tt">Trinidad and Tobago </option>
								<option value="tn">Tunisia </option>
								<option value="tr">Turkey </option>
								<option value="tm">Turkmenistan </option>
								<option value="tc">Turks and Caicos Islands </option>
								<option value="tv">Tuvalu </option>
								<option value="ug">Uganda </option>
								<option value="ua">Ukraine </option>
								<option value="ae">United Arab Emirates </option>
								<option value="gb">United Kingdom </option>
								<option value="us">United States </option>
								<option value="um">United States Minor Outlying Islands </option>
								<option value="uy">Uruguay </option>
								<option value="uz">Uzbekistan </option>
								<option value="vu">Vanuatu </option>
								<option value="ve">Venezuela </option>
								<option value="vn">Viet Nam </option>
								<option value="vg">Virgin Islands, British </option>
								<option value="vi">Virgin Islands, U.S. </option>
								<option value="wf">Wallis and Futuna </option>
								<option value="eh">Western Sahara </option>
								<option value="ye">Yemen </option>
								<option value="zm">Zambia </option>
								<option value="zw">Zimbabwe </option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="last-name" class="col-sm-3 control-label">Last Name:</label>
						<div class="col-sm-9">
							<input placeholder="Enter agent's last name"type="text" class="form-control" id="last-name" name="last_name" maxlength="40" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>" />
						</div>
					</div>
					<div class="form-group">
						<label for="first-name" class="col-sm-3 control-label">First Name:</label>
						<div class="col-sm-9">
							<input placeholder="Enter agent's first name"type="text" class="form-control" id="first-name" name="first_name" maxlength="20" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" />
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-3 control-label">Email Address:</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  />
						</div>
					</div>
					<div class="form-group">
						<label for="contact" class="col-sm-3 control-label">Mobile Number:</label>
						<div class="col-sm-9">
							<input id="contact" class="form-control" type="text" name="contact" maxlength="60" value="<?php if (isset($_POST['contact'])) echo $_POST['contact']; ?>"  />
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="Add" class="btn btn-primary">Add agent</button>
						</div>
					</div>
				</form>
			</div> <!-- /.row -->
		</div> <!-- /.container -->

		<script type="text/javascript" src="../scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
	</body>
</html>


