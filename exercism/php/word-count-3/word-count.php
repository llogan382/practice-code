<?php
/**
 *
 * Takes the string of words and turns
 * it into an array
 * @ sentence_array
 */

function wordcount( $input ) {

	$lower_case = strtolower( $only_words );
	$only_words = preg_replace( "/[\W]/", ' ', $lower_case );
	$word_array = explode( ' ', $only_words );
	$remove_empty_values = array_filter( $word_array );
	return( array_count_values( $remove_empty_values ) );
}

?>
