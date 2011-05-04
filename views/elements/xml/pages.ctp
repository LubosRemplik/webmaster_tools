<?php
if(isset($id)) { 
	$data = $frontpage->getPages($id);
	foreach ($data as $item) {
		if($item['Page']['slug'] == 'home') $url = '/';
		else $url = $item['Page']['url'];
		$sitemap->add($url, array(
			'title'=>$item['Page']['title'],
			'modified'=>$item['Page']['modified'],
			'priority'=>number_format($priority, 1)
		));
		$this->element('xml/pages', array('id'=>$item['Page']['id'], 'priority'=>$priority*0.9));
	}
}