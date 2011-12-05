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
    $sitemap->add($url, array(
        'title'=>$item['PressRelease']['title'],
        'modified'=>$item['PressRelease']['modified'],
        'priority'=>number_format($priority, 1)
    ));
}
