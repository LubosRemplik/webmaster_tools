<?php
$data = ClassRegistry::init('PressRelease')->find('all', array(
    'fields' => array('title', 'slug', 'modified'),
    'conditions' => array('PressRelease.status' => 1),
	'order' => array('PressRelease.date' => 'desc'),
    'contain' => false
));
foreach ($data as $item) {
    $url = Router::url(array(
        'plugin' => false, 'controller' => 'press_releases', 
        'action' => 'view', $item['PressRelease']['slug']
    ));
	$priority2 = false;
	switch ($item['PressRelease']['slug']) {
		case 'elemental-to-guest-speak-on-content-strategy-at-ses-london-2012':
			$priority2 = 1;
			break;
	}
    $sitemap->add($url, array(
        'title'=>$item['PressRelease']['title'],
        'modified'=>$item['PressRelease']['modified'],
		'priority'=>number_format($priority2 ? $priority2 : $priority, 1)
    ));
}
