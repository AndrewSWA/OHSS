<?php 

require_once("scan_form.php");
require_once("scanned_items.php");
require_once("scanned_results.php");
require_once("process_barcode.php");

if(!isset($_SESSION)){
	session_start();
}

if(isset($_POST['barcode'])) {
	add_item(processBarcode($_POST['barcode']));
}
$output = file_get_contents('sample_barcodes.txt');
print "<a href='reset.php'>Click to restart</a><br><br>";
print "<pre>$output</pre>";
print print_scan_form();
print render_scanned_results();
// print_scan_order_details();
