<?php include  '../../config.php'; ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?= $BASE_PATH;?>css/global.css" />
	<link rel="stylesheet" type="text/css" href="<?= $BASE_PATH;?>css/style.css" />
</head>
<body>
	<div class="holder cf">
		<div class="wrapper cf">
			<?php include '../../includes/inc-header.php'; ?>
			<?php include '../includes/inc-menu.php'; ?>
			<div class="content_left cf">
				<?php include '../includes/inc-page-content.php'; ?>
			</div>
			<?php include '../../includes/inc-footer.php'; ?>
		</div>
	</div>
</body>
</html>