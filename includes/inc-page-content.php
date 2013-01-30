<div class="middle_fix">
	<?php if ($_GET['id'] == "home") { ?>
		<h1>Home</h1>
		 <?php	echo(stripslashes($_POST['content'])); ?>
	<? } ?>
	<?php if ($_GET['id'] == "article") { ?>
	<h1>Article</h1>	
	<? } ?>
</div>