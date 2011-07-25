<?php echo $this->element('content', array('category' => 'main-column')) ?>
<?php
$this->element('pages', array('id'=>2, 'section'=>'Main pages', 'level'=>1));
$this->element('pages', array('id'=>105, 'section'=>'Footer pages', 'level'=>1));
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
		'title'=>$link['title'],
		'section'=>'Social Media',
		'level'=>1
	));
}
echo $sitemap->generate('html');
?>