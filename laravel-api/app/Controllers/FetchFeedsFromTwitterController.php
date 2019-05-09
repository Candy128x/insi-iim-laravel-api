<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\FetchFeedsFromTwitterRepository;

class FetchFeedsFromTwitterController extends Controller
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
    public function make(Request $request)
    {
    	$input = $request->all();
    	$searchTags = $input;

    	// echo "--@searchTags-Request--";
    	// dump(Request);


    	echo "--@searchTags--";
    	dump($searchTags);
    	exit;

    	// echo "--@searchTags-all--";
    	// dump($searchTags->all());

		$this->reqData = $searchTags;

    	$repoFetchData = App(FetchFeedsFromTwitterRepository::class);
    	$data = $repoFetchData->fetchFeedDataFromTwitter($this->reqData);

    	return 0;
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