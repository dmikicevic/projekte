<div class="middle_fix">

	<?php if (isset($_GET['id'])) { ?>
		<?php if ($_GET['id'] == "adminHome") { ?>
			<h4>Home</h4> <!-- wysiwyg editor einfügen zum Home Seite Bearbeiten -->
		<? } ?>
	<? } ?>

	<?php if (isset($_GET['id'])) { ?>
		<?php if ($_GET['id'] == "adminArticle") { ?>
			<div class="admin_article cf">
				<h4>Article Verwaltung</h4>
				<div class="content_left">
					<h5>Artikel ID:</h5>
					<h5>Artikel Bild:</h5>
					<h5>Artikel Name:</h5>
					<h5>Artikel Titel:</h5>
				</div>
				<div class="content_right">
					<input type="text" name="tbx_articel_name" />
					<input type="file" name="article_img" />
					<input type="text" name="tbx_articel_name" />
					<input type="text" name="tbx_articel_title" />
					<input type="submit" name="article_save" value="Speichern" />
				</div>
			</div>
		<? } ?>
	<? } ?>
</div>