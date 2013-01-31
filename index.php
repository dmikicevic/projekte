<?php 
	include 'config.php'; 

	session_start();

	session_unset();

	session_destroy();
?>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="<?=$BASE_PATH;?>css/global.css" />
	<link rel="stylesheet" type="text/css" href="<?=$BASE_PATH;?>css/style.css" />
	<script type="text/javascript" src="<?=$BASE_PATH;?>js/jquery.js"></script> <!-- Jquery Libary -->

	<!-- Slider for Sidebar -->
	<link rel="stylesheet" href="<?=$BASE_PATH;?>nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=$BASE_PATH;?>nivo-slider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=$BASE_PATH;?>nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=$BASE_PATH;?>nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=$BASE_PATH;?>nivo-slider/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=$BASE_PATH;?>nivo-slider/style.css" type="text/css" media="screen" />

	<script type="text/javascript" src="<?=$BASE_PATH;?>nivo-slider/demo/scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="<?=$BASE_PATH;?>nivo-slider/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    <!-- Slider for Sidebar -->
</head>
<body>
	<div class="holder cf">
		<div class="wrapper cf">
			<?php include 'includes/inc-header.php'; ?>
			<?php include 'includes/inc-menu.php'; ?>
			<div class="content_left cf">
				<?php if ($_GET['id'] != "article") { ?>
					<div class="middle_fix">
						<h1>Home</h1>
			 			<?php echo(stripslashes($_POST['content'])); ?>
			 		</div>
		 		<? } ?>
		 		<?php if ($_GET['id'] == "article") {
		 				include 'includes/inc-page-content.php';
		 			}
		 		?>
			</div>
			<div class="sidebar_right cf">
				<?php include 'includes/inc-sidebar-right.php'; ?>
			</div>
			<?php include 'includes/inc-footer.php'; ?>
		</div>
	</div>
</body>
</html>