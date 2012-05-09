<?php
	$this->element('xml/posts', array('priority'=>0.5));
	echo $sitemap->generate();
?>
