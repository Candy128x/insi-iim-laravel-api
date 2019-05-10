<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\FetchFeedsFromDomainRepository;
use App\Http\Requests\FetchFeedsFromDomainRequest;

class FetchFeedsFromDomainController extends Controller
{
    /**
     * Fetch the Data from Domain
     *
     * @param  Request $request
     * @return json Response
     */
    public function make(Request $request)
    {
    	$input = $request->all();
    	$repoFetchData = App(FetchFeedsFromDomainRepository::class);


    	// Varify Tocken
    	$token = $input['token'];
    	$flagVerifyToken = $repoFetchData->verifyToken($token);
    	if(!$flagVerifyToken){
            $ret = ['results' =>[['status' => 'error', 'msg' => 'Invalid Token!']]]; 
    		return response()->JSON($ret);
    	}


    	// Fetch Result Data
    	$searchTags = $input['search_tags'];
    	$dataFetchFeedData = $repoFetchData->fetchFeedDataFromDomain($searchTags);
        if(isset($dataFetchFeedData['results'][0]['status'])) {
            $hasError = ('error' == $dataFetchFeedData['results'][0]['status']) ? TRUE : FALSE;
        	if($hasError){
        		return response()->JSON($dataFetchFeedData);
        	}
        }

    	return $dataFetchFeedData;
    }

}