<?php
if(isset($id)) { 
	$data = $frontpage->getPages($id);
	foreach ($data as $item) {
		if($item['Page']['slug'] == 'home') $url = '/';
		else $url = $item['Page']['url'];
		$priority2 = false;
		switch ($item['Page']['slug']) {
			case 'sitemap':
			case 'creds':
			case 'showreel':
				$priority2 = 1;
				break;
		}
		$sitemap->add($url, array(
			'title'=>$item['Page']['title'],
			'modified'=>$item['Page']['modified'],
			'priority'=>number_format($priority2 ? $priority2 : $priority, 1)
		));
		$this->element('xml/pages', array('id'=>$item['Page']['id'], 'priority'=>$priority*0.9));
	}
}
