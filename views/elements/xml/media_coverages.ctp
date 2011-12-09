<?php
$data = ClassRegistry::init('MediaCoverage')->find('all', array(
    'fields' => array('title', 'slug', 'modified'),
    'conditions' => array('MediaCoverage.status' => 1),
	'order' => array('MediaCoverage.date' => 'desc'),
    'contain' => false
));
foreach ($data as $item) {
    $url = Router::url(array(
        'plugin' => false, 'controller' => 'media_coverage', 
        'action' => 'view', $item['MediaCoverage']['slug']
    ));
    $sitemap->add($url, array(
        'title'=>$item['MediaCoverage']['title'],
        'modified'=>$item['MediaCoverage']['modified'],
        'priority'=>number_format($priority, 1)
    ));
}
