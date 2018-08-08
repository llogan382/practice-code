<?php
/**
 *
 * Takes the string of words and turns
 * it into an array
 * @ sentence_array
 */

function wordcount( $input ) {

	$lower_case = _lower( $input );
	$only_words = _only_words( $lower_case );
	$word_array = _set_array( $only_words );
	$remove_empty_values = _remove_blanks( $word_array );
	return( array_count_values( $remove_empty_values ) );
}

function _only_words ( $input ) {
	return preg_replace( "/[\W]/", ' ', $input );
}

function _set_array( $input ) {
	return explode( ' ', $input );
}

function _remove_blanks( $input ) {
	return array_filter( $input );
}

function _lower( $input ) {
	$only_words = preg_replace( '/[\W]/', ' ', $input );
	return strtolower($only_words);
}

?>
