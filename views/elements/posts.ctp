<?php 
$section = "Blog Posts";
$level = 1;
$data = ClassRegistry::init('Post')->find('all', array(
    'fields' => array('title', 'slug'),
    'conditions' => array('Post.status' => 1),
	'order' => array('Post.post_date' => 'desc'),
    'contain' => false
));
foreach ($data as $item) {
    $url = Router::url(array(
        'plugin' => false, 'controller' => 'posts', 
        'action' => 'view', $item['Post']['slug']
    ));
    $sitemap->add($url, array(
        'title'=>$item['Post']['title'],
        'section'=>$section,
        'level'=>$level
    ));
}
