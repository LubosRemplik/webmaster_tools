<?php
$category = ClassRegistry::init('PostCategory')->find('first', array(
    'conditions' => array('PostCategory.slug'=>'news')
));
$data = ClassRegistry::init('Post')->find('all', array(
    'fields' => array('title', 'slug', 'modified'),
    'conditions' => array(
        'Post.status' => 1, 
        'Post.id' => Set::extract('/Post/id', $category)
    ),
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
        'modified'=>$item['Post']['modified'],
        'priority'=>number_format($priority, 1)
    ));
}
