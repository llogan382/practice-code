<?php
/**
 *
 * Takes the string of words and turns
 * it into an array
 * @ sentence_array
 */
function wordcount( $input ) {
	$sentence_array = explode( ' ', $input );
	return( array_count_values( $sentence_array ) );
}


?>
