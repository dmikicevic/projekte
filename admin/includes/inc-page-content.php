<div class="middle_fix">

	<?php if (isset($_GET['id'])) { ?>
		<?php if ($_GET['id'] == "adminArticle") { ?>
			<h1>Article</h1>
		<? } ?>
	<? } ?>

	<?php if (isset($_GET['id'])) { ?>
		<?php if ($_GET['id'] == "adminHome") { ?>
			<h1>Home</h1>
		<? } ?>
	<? } ?>


	<?php if (!isset($_GET['id'])) { ?>
		<h1>Admin Login</h1>
	<? } ?>
</div>