<?php
$data = ClassRegistry::init('CaseStudy')->find('all', array(
    'fields' => array('title', 'slug', 'modified'),
    'conditions' => array('CaseStudy.status' => 1),
	'order' => array('CaseStudy.date' => 'desc'),
    'contain' => false
));
foreach ($data as $item) {
    $url = Router::url(array(
        'plugin' => false, 'controller' => 'case_studies', 
        'action' => 'view', $item['CaseStudy']['slug']
    ));
    $sitemap->add($url, array(
        'title'=>$item['CaseStudy']['title'],
        'modified'=>$item['CaseStudy']['modified'],
        'priority'=>number_format($priority, 1)
    ));
}
