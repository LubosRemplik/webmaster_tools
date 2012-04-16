<?php echo $this->element('content', array('category' => 'main-column')) ?>
<?php
$this->element('pages', array('id'=>2, 'section'=>'Main Pages', 'level'=>1));
$this->element('press_releases');
$this->element('media_coverages');
$this->element('case_studies');
$this->element('posts');
$this->element('pages', array('id'=>105, 'section'=>'Footer Pages', 'level'=>1));
$socialLinks = array(
	'facebook' => array('title' => 'Facebook', 'url' => 'https://www.facebook.com/elementalcomms'),
    'flickr' => array('title' => 'Flickr', 'url' => 'http://www.flickr.com/photos/elementalcomms'),
    'linkedin' => array('title' => 'LinkedIn', 'url' => 'http://www.linkedin.com/companies/elemental-communications'),
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
