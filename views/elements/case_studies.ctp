<?php 
$section = "Case Studies";
$level = 1;
$data = ClassRegistry::init('CaseStudy')->find('all', array(
    'fields' => array('title', 'slug'),
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
        'section'=>$section,
        'level'=>$level
    ));
}
