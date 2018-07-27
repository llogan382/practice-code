<?php
$used = array();

class Robot {
	private $name;
	private $name_array;

	public function __construct() {
		$this->name_array = array();
	}

	public function reset() {
			$this->name = null;
			$this->getName();
		}

	public function getName() {
		global $used;
		if ( ! $this->name ) {
			do {
				$new_name = $this->get_new_name();
			} while ( array_key_exists( $new_name, $used ) );

			$used[ $new_name ] = 1;

			$this->name = $new_name;
		}
		return $this->name;
	}

	/**
	 * Gets a new name for the robot
	 *
	 * @return string   New name.
	 */
	private function get_new_name() {
		$letters  = range( 'A', 'Z' );
		$number   = str_pad( rand( 1, 999 ), 3, '0', STR_PAD_LEFT );
		$name     = array_rand( $letters, 2 );
		$new_name = $letters [ $name[0] ] . $letters [ $name[1] ] . $number;
		return $new_name;
	}

}
