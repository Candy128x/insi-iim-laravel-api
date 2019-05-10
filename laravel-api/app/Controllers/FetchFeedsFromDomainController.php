<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\FetchFeedsFromDomainRepository;
use App\Http\Requests\FetchFeedsFromDomainRequest;

class FetchFeedsFromDomainController extends Controller
{

	protected $reqData;

	public function __construct()
	{
		$this->reqData = NULL;
	}


	public function getData(Request $searchTags)
    {
    	 // dd("--START--");
    	$this->reqData = $searchTags;

    	// echo "--this->reqData--";
    	// dump($this->reqData);

    	$this->make($this->reqData);

    	 return 0;
    }

    // API process for result..
    // public function make(FetchFeedsFromDomainRequest $request)
    public function make(Request $request)
    {
    	// dd("---START--FetchFeedsFromDomainController@make--");
    	// dd("--request--",$request);
    	// dd("--request->all--",$request->all());
    	
    	$input = $request->all();
    	$repoFetchData = App(FetchFeedsFromDomainRepository::class);


    	// Varify Tocken
    	$token = $input['token'];
    	// dd("--token--",$token);
    	$flagVerifyToken = $repoFetchData->verifyToken($token);
    	// dd("--TOKEN-data--",$flagVerifyToken);
    	if(!$flagVerifyToken){
            // $ret['results']['status'] = "error";
            // $ret['results']['title'] = "Invalid Token!";
            $ret = ['results' =>[['status' => 'error', 'msg' => 'Invalid Token!']]]; 
    		return response()->JSON($ret);
    	}


    	//fetch data
    	$searchTags = $input['search_tags'];
    	$dataFetchFeedData = $repoFetchData->fetchFeedDataFromDomain($searchTags);
    	// dump("--dataFetchFeedData--",$dataFetchFeedData);
        $statusDataFetchFeedData = isset($dataFetchFeedData['status']) ? TRUE : FALSE;
    	if($statusDataFetchFeedData){
    		return $dataFetchFeedData['msg'];	
    	}

    	return $dataFetchFeedData;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}