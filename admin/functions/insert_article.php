<form action="../functions/insert_article.php" method="post">
<input type="file" name="article_img" />
<input type="text" name="tbx_articel_name" />
<input type="text" name="tbx_articel_title" />
<textarea type="text" name="tbx_text_area" rows="8"></textarea>
<input type="submit" name="article_save" value="Speichern" />
</form>

<?php
	include '../includes/inc-connect-db.php';

	$articleNAME = $_POST['tbx_articel_name'];
	$articleIMG = $_POST['article_img'];
	$articleTITLE = $_POST['tbx_articel_title'];
	$articleNAME = $_POST['tbx_articel_name'];


	$sql = mysql_query("INSERT INTO article (articleName, articleTitle, articleDescription, articleImage)
	VALUES ('Peter', 'Griffin',35)");
?>