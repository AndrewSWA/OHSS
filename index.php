<?php 

require_once("scan_form.php");
require_once("scanned_items.php");
require_once("scanned_results.php");

//TODO: if form posted handle request.
if(!isset($_SESSION)){
	session_start();
}

print print_scan_form();
print render_scanned_results();
// print_scan_order_details();
