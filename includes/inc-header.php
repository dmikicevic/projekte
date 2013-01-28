<div class="head">
	<div class="date_time">
		<?php
			$timestamp = time();
			$datum = date("d.m.Y", $timestamp); // für stunden und minuten noch dazu date("d.m.Y - H:i", $timestamp);
			echo $datum;
		?>
	</div>
</div>