<?php
// Setup file:

error_reporting(0);

include("../config/connection.php");

include('./functions/data.php');
include('./functions/template.php');

# Site setup
$debug = data_setting_value($dbc, 'debug-status');


$site_title = 'Atom';


if(isset($_GET['page'])){
	// Set $pageid to equal the value given in the URL
	$pageid = $_GET['page'];
}else{
	// Set $pageid equal to 1 or to Home page
	$pageid = 1;
}

# Page Setup
$page = data_page($dbc, $pageid);

#user Setup
$user = data_user($dbc, $_SESSION['username']);

?>