<?php
include_once("functions.php");

connect();
$owner = getPost("owner");
$prevStats = getAllStats($owner);

		while($row = mysql_fetch_object($prevStats))
		{
			?>
			<div class="row-fluid">
				<div class="span3"><?php echo $row->dato ?></div>
				<div class="span3"><?php echo $row->permission ?></div>
				<div class="span2"><?php echo $row->salg ?></div>
			</div>
<?php	}			

?>