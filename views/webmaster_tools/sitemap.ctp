<h1><?php echo Page::get('title') ?></h1>
<?php echo $this->element('content', array('category' => 'main-column')) ?>
<?php
$this->element('pages', array('id'=>2, 'section'=>'Main pages'));
$this->element('pages', array('id'=>105, 'section'=>'Footer pages'));
echo $sitemap->generate('html');
?>