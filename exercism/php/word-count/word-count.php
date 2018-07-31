<?php
/**
 *
 * Takes the string of words and turns
 * it into an array
 * @ sentence_array
 */
function wordcount( $input ) {
	//clean the string

	// ^ means "not"
	//. means range
	//* means anything
	//*m means end at "m"
	//  "/1.*2/" means get everything from 1 until 2
	//  "/1.*?2/" means get everything from 1 until 2, even
	//if it is more than 1 time (called lazy)
	//D{2} can specify the number of matches you might want to find,
	// like DD
	// \w is words, \W is non-word characters
	// \S is non-space
	$input = strtolower( $input );
	//search for non-word characters, replace with blank
	$input = preg_replace( "/[\W]/", ' ', $input );
	//split into an array
	$input = explode( ' ', $input );
	//removes blank values in the array
	$input = array_filter( $input );
	return( array_count_values( $input ) );
}


?>
