<!DOCTYPE HTML>
<html>
<head>
<title><?=$this->pageTitle?></title>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8; user-scalable=0;" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dealer Price" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(
hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?=Yii::app()->theme->baseUrl?>/mob/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=Yii::app()->theme->baseUrl?>/mob/css/jquery-ui.min.css" rel="stylesheet">
<link href="<?=Yii::app()->theme->baseUrl?>/mob/css/jquery-ui.theme.min.css" rel="stylesheet">
<link href="<?=Yii::app()->theme->baseUrl?>/mob/css/font-awesome.css" rel="stylesheet">
<link href="<?=Yii::app()->theme->baseUrl?>/mob/css/owl.carousel.css" rel="stylesheet">
<link href="<?=Yii::app()->theme->baseUrl?>/mob/css/owl.theme.css" rel="stylesheet">
<link href="<?=Yii::app()->theme->baseUrl?>/mob/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=Yii::app()->theme->baseUrl?>/mob/css/fontello.css" rel="stylesheet">
<link href="<?=Yii::app()->theme->baseUrl?>/mob/css/mmenu.css" rel="stylesheet" />
<script src="<?=Yii::app()->theme->baseUrl?>/mob/js/jquery.min.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/mob/js/jquery-ui.min.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/mob/js/jquery.mmenu.min.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/mob/js/owl.carousel.js"></script>
<script src="<?=Yii::app()->theme->baseUrl?>/mob/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function() {
		$('nav#menu').mmenu();
	});
</script>
<script>
	$(function() {
		$( "#accordion" ).accordion({
			heightStyle: "content"
		});
	});
</script>
<script>
	$(document).ready(function() {
		$("#owl-example").owlCarousel(); 
	});
</script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php include('header.php'); ?>
	<?=$content?>
	</body>
</html>		