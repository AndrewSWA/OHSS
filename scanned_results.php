<?php

function render_scanned_results() {
	$prev = reset($_SESSION['scanned']);
	$curr = next($_SESSION['scanned']);
	
	if ($curr && $prev['call_number_norm'] >= $curr['call_number_norm']) {
		$prev['error'] = true;
	}

	print('<table border="3">');
	print('<tr>');

	foreach (array_keys($prev) as $key) {
		if ($key === 'error') {
			continue;
		}

		print('<th>');
		print(ucwords(str_replace('_', ' ', $key)));
		print('</th>');
	}

	print('</tr>');

	render_scanned_individual_result($prev);

	while ($curr) {
		$next = next($_SESSION['scanned']);

		if ($curr['call_number_norm'] <= $prev['call_number_norm']) {
			$curr['error'] = true;
		} elseif ($next && $curr['call_number_norm'] >= $next['call_number_norm']) {
			$curr['error'] = true;
		}

		render_scanned_individual_result($curr);

		$prev = $curr;
		$curr = $next;
	}

	print('</table>');
}

function render_scanned_individual_result($curr) {
	if (empty($curr['error'])) {
		print('<tr>');
	} else {
		print('<tr style="background:red">');
	}

	foreach ($curr as $key => $value) {
		if ($key === 'error') {
			continue;
		}

		print('<td>' . $value . '</td>');
	}

	print('</tr>');
}
