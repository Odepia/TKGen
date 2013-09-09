<?php

class TKGen {

	private $lenTK = 10;

	/**
	* [token function that create a token value]
	* @param  [string] $token_id     [value that needs to be converted into a token string - optional]
	* @param  [int]    $token_lenght [token's lenght - optional]
	* @return [string]               [token returned by the function]
	*/

	public function token($token_id = NULL, $token_lenght = NULL) {
		if (is_null($token_id) || strlen($token_id) > $this->lenTK) {
			$token = "0ab1cd2ef3gh4ij5km7no6pq8rs9tuvwxyz"; // Define a token work base value
		} else {
			$token = $token_id;                             // Use the value passed as argument
		}

		$valDate = date("Ymds") * rand(5,255);              // Use the current date as a random value.

		if(is_null($token_lenght)) {
			$token = trim(substr(sha1($token_id + rand(5,255) + $valDate), 0, 10));
		} else {
			$token = trim(substr(sha1($token_id + rand(5,255) + $valDate), 0, $token_lenght));
		}
		return $token;
	}
}
