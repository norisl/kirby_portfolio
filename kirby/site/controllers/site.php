<?php


return function($site, $pages, $page) {

	if(kirby()->request()->ajax()) {
		
		$data = [];	
	    $data['project'] = $page;

		die(snippet('project', $data));
	}
	else {
		$data = [];

	  	if ($page->isHomePage()) {
	  		$data['project'] = page('projects')->children()->first();
	  	} else {
	  		$data['project'] = $page;
	  	}

	  	$data['projects'] = page('projects')->children();


	  	return $data;
	}

	
};
?>