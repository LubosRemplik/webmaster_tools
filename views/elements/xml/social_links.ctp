<?php
$socialLinks = array(
	'facebook' => array('title' => 'Facebook', 'url' => 'https://www.facebook.com/elementalcomms'),
	'flickr' => array('title' => 'Flickr', 'url' => 'http://www.flickr.com/elementalcomms'),
	'linkedin' => array('title' => 'LinkedIn', 'url' => 'http://www.linkedin.com/company/elemental-communications'),
	'twitter' => array('title' => 'Twitter', 'url' => 'http://twitter.com/elementalcomms'),
	'youtube' => array('title' => 'YouTube', 'url' => 'http://youtube.com/elementalcomms'),
	'slideshare' => array('title' => 'Slideshare', 'url' => 'http://www.slideshare.net/elementalcomms'),
	'rss-feeds' => array('title' => 'RSS feeds', 'url' => '/rss'),
);
foreach($socialLinks as $link) {
	$sitemap->add($link['url'], array(
		'title'=>$link['url']['title'],
		'modified'=>'2011-06-20 17:00:00',
		'priority'=>$priority
	));
}
