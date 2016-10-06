<?php
define('BARCODE_ENDPOINT', 'http://library2.udayton.edu/ray/ohss/barcode_search.php?barcode=%s');

function processBarcode($barcode) {
	if (preg_match('/^[A-Z][0-9]+$/', $barcode)) {
		$result = file_get_contents(sprintf(BARCODE_ENDPOINT, $barcode));

		if ($result) {
			return json_decode($result, true);
		}
	}

	return false;
}
