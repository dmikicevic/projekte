<?php include '../config.php'; ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?= $BASE_PATH;?>css/global.css" />   
	<link rel="stylesheet" type="text/css" href="<?= $BASE_PATH;?>css/style.css" />  <!-- Frontend Style CSS -->
	
</head>
<body>
	<div class="holder cf">
		<div class="wrapper cf">
			<?php include '../includes/inc-header.php'; ?>
			<ul class="menu">
				<li><a href="<?= $BASE_PATH;?>index.php"><span>zur&uuml;ck zur Homepage</span></a></li>
			</ul>
			<div class="middle_fix cf">
				<div class="login">
					<h4>Login</h4><input type=""
				</div>
			</div>
			<?php include '../includes/inc-footer.php'; ?>
		</div>
	</div>
</body>
</html>