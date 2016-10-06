<?php 

require_once("scan_form.php");

//TODO: if form posted handle request.
if(!isset($_SESSION)){
	session_start();
}

if(!isset($_SESSION['TEST'])) {
	$_SESSION['TEST'] = 1;
}
else {
	$_SESSION['TEST']++;
}

print($_SESSION['TEST']);
print print_scan_form();
// print_scan_order_details();
