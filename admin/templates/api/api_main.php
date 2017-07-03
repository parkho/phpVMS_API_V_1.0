<h3>phpVMS API Manager</h3>
<table>
	<tr>
		<td style="vertical-align: top;">Data to publish:</td>
		<td>Total Pilots<br />
			Total Flights<br />
			Total Schedules<br />
			Total Fuel Used<br />
			Pending Pilots
		</td>
		<td style="vertical-align: top;">
			<a href="<?php echo adminurl('/api/popdata') ;?>" ><input type="button" value="Publish File"></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<?php
			$filename = $_SERVER['DOCUMENT_ROOT'].'/admin/templates/api/api.php';
			
			if(file_exists($filename))
				{
		?>
					<a href="<?php echo adminurl('/api/fileremove') ;?>" ><input type="button" value="Delete File"></a>
		<?php
				}
			else
				{
		?>
					<input disabled="disabled" type="button" value="Delete File">
		<?php
				}
		?>
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td align="center">Link To Published JSON File: </td>
		<?php
			$filename = $_SERVER['DOCUMENT_ROOT'].'/admin/templates/api/api.php';
			
			if(file_exists($filename))
				{
		?>
					<td><input style="width: 350px;" disabled="disabled" type="text" value="<?php echo SITE_URL ;?>/admin/templates/api/api.php"></td>
		<?php
				}
			else
				{
					echo'<td>No Published File Yet</td>';
				}
		?>
</table>
<br />
<br />
<br />
<h3>Published JSON Page</h3>