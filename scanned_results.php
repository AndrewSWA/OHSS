<?php

function render_scanned_results() {
	$scanned = print_r($_SESSION['scanned'], true);
	$sorted =  print_r($_SESSION['sorted'], true);
	return <<<OUTPUT
	<h3>SCANNED ORDER</h3>
	<pre>$scanned</pre>
	<h3>SORT ORDER</h3>
	<pre>$sorted</pre>
OUTPUT;
}