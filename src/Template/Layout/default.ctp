<?php use Cake\Core\Configure; ?> 

<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width">
    <?php echo $this->Html->charset(); ?>
    <title>
        <?= Configure::read('title') ?>
    </title>
    <?= $this->Html->meta('icon'); ?>
    <?= $this->Html->css('styles'); ?>
    

	<!-- SCRIPTS -->
	<?php echo $this->Html->script(['jquery.min', 'jquery.sparkline.min', 'highcharts', 'lazyfoot']); ?>

	<?php //echo $scripts_for_layout; ?>
</head>

<body>

<div id="container">
	<div id="header">
		<div id="logo"><?php echo $this->Html->link(Configure::read('title'), array('controller' => 'Games', 'action' => 'index')); ?></div>
		<ul id="menu">
	        <li><?php echo $this->Html->link('Jogos', array('controller' => 'Games', 'action' => 'index')); ?></li>
	        <li><?php echo $this->Html->link('Jogadores c/'.Configure::read('n_min_pre').' pre', array('controller' => 'Players', 'action' => 'index', Configure::read('n_min_pre'))); ?></li>
	        <li><?php echo $this->Html->link('Jogadores', array('controller' => 'Players', 'action' => 'index')); ?></li>
	    </ul>
	</div>

	<div id="wrapper">
	<div id="navigation">
		<?= $this->element('sidebar_menu') ?>
		<?= $this->element('sidebar') ?>		
	</div>

	<div id="content"> <?= $this->fetch('content') ?></div>
	</div>
<div id="footer"><p><u>LazyFoot</u> beta...<?php echo date('F Y'); ?></p></div>
</div>

<?php echo $this->Js->writeBuffer(); ?>
<script src="//0.0.0.0:35729/livereload.js"></script>
</body>


</html>