<?php
/*
 * Pure Upload [VERSION]
 * An adaptation of valums ajaxupload(http://valums.com/ajax-upload/)
 * [DATE]
 * Corey Hart @ http://www.codenothing.com
 */
$result = array(
	'Post Data' => $_POST,
	'Files' => array(),
);

// Limit info shown
foreach ( $_FILES as $file ) {
	array_push( $result['Files'], array(
		'name' => $file['name'],
		'type' => $file['type'],
		'size' => $file['size'],
	));
}

print_r( $result );

?>