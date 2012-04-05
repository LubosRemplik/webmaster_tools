<?php
	$this->element('xml/pages', array('id'=>2, 'priority'=>1.0));
	$this->element('xml/pages', array('id'=>105, 'priority'=>1.0));
	$this->element('xml/social_links', array('priority'=>0.5));
	echo $sitemap->generate('XmlMobile');
?>
