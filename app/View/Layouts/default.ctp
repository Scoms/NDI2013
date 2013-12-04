<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,500' rel='stylesheet' type='text/css'>
	</head>

	<body>

		<?php
			echo $this->element("navbar"); 
					echo $this->Session->flash(); 
					echo $this->fetch('content');
		?>
	</body>
</html>