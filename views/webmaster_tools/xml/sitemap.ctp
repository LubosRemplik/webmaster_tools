<?php
	$this->element('xml/pages', array('id'=>2, 'priority'=>1.0));
	$this->element('xml/pages', array('id'=>105, 'priority'=>1.0));
	$this->element('xml/press_releases', array('priority'=>0.5));
	$socialLinks = array(
		'facebook' => array('title' => 'Facebook', 'url' => 'http://www.facebook.com/elementalcomms'),
	    'flickr' => array('title' => 'Flickr', 'url' => 'http://flickr.com/elementalcomms'),
	    'linkedin' => array('title' => 'LinkedIn', 'url' => 'http://www.linkedin.com/companies/elemental-communications-limited'),
	    'twitter' => array('title' => 'Twitter', 'url' => 'http://twitter.com/elementalcomms'),
	    'youtube' => array('title' => 'YouTube', 'url' => 'http://youtube.com/elementalcomms'),
		'slideshare' => array('title' => 'Slideshare', 'url' => 'http://www.slideshare.net/elementalcomms'),
		'rss-feeds' => array('title' => 'RSS feeds', 'url' => '/rss'),
	);
	foreach($socialLinks as $link) {
		$sitemap->add($link['url'], array(
			'title'=>$link['url']['title'],
			'modified'=>'2011-06-20 17:00:00',
			'priority'=>0.5
		));
	}
	echo $sitemap->generate();
?>
