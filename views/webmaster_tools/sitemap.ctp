<h1><?php echo Page::get('title') ?></h1>
<?php echo $this->element('content', array('category' => 'main-column')) ?>
<?php
$this->element('pages', array('id'=>2, 'section'=>'Main pages', 'level'=>1));
$this->element('pages', array('id'=>105, 'section'=>'Footer pages', 'level'=>1));
echo $sitemap->generate('html');
?>