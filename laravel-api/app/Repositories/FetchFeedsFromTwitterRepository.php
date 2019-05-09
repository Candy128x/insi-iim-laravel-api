<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Config;

class FetchFeedsFromTwitterRepository
{

	public function verifyToken($token)
	{
		return (Config::get('appn.API_TOKEN') == $token) ? TRUE : FALSE;
	}

	public function fetchFeedDataFromTwitter($searchTags)
	{
		// echo "--Repository-searchTags--";
		// dump($searchTags);

		$endpoint = Config::get('appn.SEARCH_FEED_URL') .'/' . $searchTags .'?src=hash';
		// dump("--$endpoint--",$endpoint);dd();
		$client = new \GuzzleHttp\Client();

		// $response = $client->request('GET', $endpoint, ['query' => [
		//     'key1' => '$id', 
		//     'key2' => 'Test'
		// ]]);

		$response = $client->request('GET', $endpoint);

		$statusCode = $response->getStatusCode();
		// dump("--statusCode--",$statusCode);
		if(200 != $statusCode){
			dump("--insi--");
			return [
				"status" => FALSE, 
				"msg" => "Invalid Response from API URL :("
			];
		}

		$content = $response->getBody();
		dump("--content--",$content);

		dd("--EXIT--1216--");
		return 0;
	}

}