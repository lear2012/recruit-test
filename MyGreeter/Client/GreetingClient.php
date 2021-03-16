<?php

namespace MyGreeter\Client;

/**
 * Class GreetingClient
 * @package MyGreeter\Client
 * @author Lear
 *
 * This is a test for recruitment
 */
class GreetingClient {

    public function __construct() {
	    date_default_timezone_set('PRC'); // set timezone
    }

	/**
	 * Return respective message according to the current hour
	 *
	 * @param int $hour
	 *
	 * @return string
	 */
    public function greet(int $hour) : string
    {
    	if (empty($hour) || !is_integer($hour) || $hour < 0 || $hour > 24) {
		    return 'Wrong hour param';
	    }

	    $msgRet = ""; // return message

	    if ($hour >= 0 && $hour < 12) {
		    $msgRet = "Good morning";
	    } else if ($hour >= 12 && $hour < 18) {
		    $msgRet = "Good afternoon";
	    } else if ($hour >= 18 && $hour < 24) {
		    $msgRet = "Good evening";
	    }

	    return $msgRet;
    }

}