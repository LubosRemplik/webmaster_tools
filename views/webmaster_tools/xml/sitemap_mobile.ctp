<?php
	$this->element('xml/pages', array('id'=>2, 'priority'=>1.0));
	$this->element('xml/pages', array('id'=>105, 'priority'=>1.0));
	echo $sitemap->generate('XmlMobile');
?>
