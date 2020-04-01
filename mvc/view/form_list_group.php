<html>
<head> Listar grupos </head>

<body>

<?php
	echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
?>

	<?php

		foreach ($groups as $nom_group => $group)
		{	if (!empty($group->group)){
			
			echo '<input type="radio" name="group" value="'.$group->group.'">'.$group->group.'&nbsp;&nbsp;&nbsp;;'.'<br>';
		}
}

	?>

	<?php

	echo "<p><input type='submit' value='Menu principal ' name='principal'></p>
			<p><input type='submit' value='Delete Group' name='delete'></p>
	</form>";

	?>

</body>
</html>