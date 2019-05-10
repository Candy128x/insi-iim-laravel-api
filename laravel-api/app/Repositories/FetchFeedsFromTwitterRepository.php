<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Config;

class FetchFeedsFromDomainRepository
{

	public function verifyToken($token)
	{
		return (Config::get('appn.API_TOKEN') == $token) ? TRUE : FALSE;
	}

	public function fetchFeedDataFromDomain($searchTags)
	{
		// using cURL
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://www.recipepuppy.com/api/?i=" . $searchTags);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT,10);
		$output = curl_exec($ch);
		$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);

		
		// Validate Response with statatus code
		if(200 != $statusCode) {
			return ['results' => [['status' => 'error', 'msg' => 'Invalid Response from API domain :(']]]; 
		}

		return $output;
	}

}