<?php

function add_item($item_data) {
	//TODO: proccess and order the data here
	//TODO: returns id, which is the scan order.
	if(!isset($_SESSION['scanned'])) {
		$_SESSION['scanned'] = array();
		$_SESSION['sorted'] = array();
	}

	$_SESSION['scanned'][] = $item_data;
	$_SESSION['sorted'][] = $item_data;
	return get_next_id();
}

function delete_item($id) {
	//TODO:remove the item.
}

function get_next_id() {
	if(!isset($_SESSION['next_id'])) {
		$_SESSION['next_id'] = 0;
	}

	$_SESSION['next_id']++;

	return $_SESSION['next_id'];
}