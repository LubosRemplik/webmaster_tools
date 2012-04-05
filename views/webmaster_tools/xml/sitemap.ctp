<?php
	$this->element('xml/pages', array('id'=>2, 'priority'=>1.0));
	$this->element('xml/pages', array('id'=>105, 'priority'=>0.1));
	$this->element('xml/press_releases', array('priority'=>0.5));
	$this->element('xml/media_coverages', array('priority'=>0.5));
	$this->element('xml/case_studies', array('priority'=>0.5));
	$this->element('xml/posts', array('priority'=>0.5));
	$this->element('xml/social_links', array('priority'=>0.5));
	echo $sitemap->generate();
?>
