<?php

namespace App\Repositories;

class FetchFeedsFromTwitterRepository
{
	public function fetchFeedDataFromTwitter($searchTags)
	{
		echo "--Repository-searchTags--";
		dump($searchTags);

		return 0;
	}

}