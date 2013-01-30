<script language="JavaScript" src="<?$BASE_PATH?>../js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script language="JavaScript" src="<?$BASE_PATH?>../js/tinymice_controlls.js"></script>

<div class="middle_fix">

	<?php if (isset($_GET['id'])) { ?>
		<?php if ($_GET['id'] == "adminHome") { ?>
			<h4>Home</h4> <!-- wysiwyg editor einfügen zum Home Seite Bearbeiten -->
			<form method="post" action="../../index.php?id=home">
                <textarea name="content" id="tinymice" style="width:100%"></textarea>
                <input type="submit" value="Save" />
			</form>
		<? } ?>
	<? } ?>

	<?php if (isset($_GET['id'])) { ?>
		<?php if ($_GET['id'] == "adminArticle") { ?>
			<div class="admin_article cf">
				<h4>Artikel Speichern</h4>
				<div class="content_left">
					<h5>Artikel ID:</h5>
					<h5>Artikel Bild:</h5>
					<h5>Artikel Name:</h5>
					<h5>Artikel Titel:</h5>
					<h5>Artikel Beschreibung:</h5>
				</div>
				<div class="content_right">
					<form action="../functions/insert_article.php" method="post">
						<input type="text" name="tbx_articel_name" />
						<input type="file" name="article_img" />
						<input type="text" name="tbx_articel_name" />
						<input type="text" name="tbx_articel_title" />
						<textarea type="text" name="tbx_text_area" rows="8"></textarea>
						<input type="submit" name="article_save" value="Speichern" />
					</form>
				</div>
				<div class="content_next_right">
					<h4>Artikel L&ouml;schen</h4>
				</div>
				<div class="content_next_right">
					<h4>Artikel Bearbeiten</h4>
				</div>
			</div>
		<? } ?>
	<? } ?>
</div>