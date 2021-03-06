<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection, all" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.0.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.PrintArea.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/imprimir.js"></script>
	<link rel="stylesheet" media="all" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" media="all" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" media="all" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />

	<title>SISCAE - Sistema Computacional de Auditoria Energetica.</title>
</head>

<body>

<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#"></i>SISCAE.</a>
    <ul class="nav">
      <li><a href="/energetica-php/site/index"><i class="icon-home"></i> <b>Home</b></a></li>
      <li><a href="/energetica-php/edificaciones/index"><i class="icon-briefcase"></i> <b>Clientes</b></a></li>
      <li><a href="/energetica-php/configuracion/index"><i class="icon-cog"></i> <b>Configuración</b></a></li>
    </ul>
  </div>
</div>
<!--
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Energetica!</a>
    <ul class="nav">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div>
	</div>
</div>-->
<div class="container" id="page">
	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> por SISCAE.<br/>
		Todos los Derechos Recervados.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
