<?php 
$section = "Press Releases";
$level = 1;
$data = ClassRegistry::init('PressRelease')->find('all', array(
    'fields' => array('title', 'slug'),
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
        'section'=>$section,
        'level'=>$level
    ));
}
