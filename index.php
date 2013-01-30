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
	<link rel="stylesheet" type="text/css" href="<?$BASE_PATH?>css/global.css" />
	<link rel="stylesheet" type="text/css" href="<?$BASE_PATH?>css/style.css" />
</head>
<body>
	<div class="holder cf">
		<div class="wrapper cf">
			<?php include 'includes/inc-header.php'; ?>
			<?php include 'includes/inc-menu.php'; ?>
			<div class="content_left cf">
				<?php include 'includes/inc-page-content.php'; ?>
			</div>
			<div class="sidebar_right cf">
				<?php include 'includes/inc-sidebar-right.php'; ?>
			</div>
			<?php include 'includes/inc-footer.php'; ?>
		</div>
	</div>
</body>
</html>