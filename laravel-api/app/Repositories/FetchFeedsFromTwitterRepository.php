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
		// echo "--Repository-searchTags--";
		// dump($searchTags);

		// $endpoint = Config::get('appn.SEARCH_FEED_URL') .'/' . $searchTags .'?src=hash';
		$endpoint = 'https://jsonplaceholder.typicode.com/todos/1';
		// dump("--endpoint--",$endpoint);dd();
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
		// dump("--content--",$	content);


		// $data12 = $this->client->get('https://jsonplaceholder.typicode.com/todos/1');
		// dump("--data12--",$data12);



		// using cURL
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://www.recipepuppy.com/api/?i=" . $searchTags);
		// SSL important
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$output = curl_exec($ch);
		curl_close($ch);
		// dump("--output--",$output);
		// dump("--output-json_decode--",json_decode($output));

		// $result = json_decode($output, true);
		$result = $output;

		// dd("--EXIT--1216--");
		return $result;
	}

}