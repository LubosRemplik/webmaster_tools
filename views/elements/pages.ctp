<?php 
if(isset($id)) { 
	$data = $frontpage->getPages($id);
	foreach ($data as $item) {
		if($item['Page']['slug'] == 'home') $url = '/';
		else $url = $item['Page']['url'];
		$sitemap->add($url, array(
			'title'=>$item['Page']['title'],
			'section'=>$section
		));
		$this->element('pages', array('id'=>$item['Page']['id'], 'section'=>$section));
	}
}