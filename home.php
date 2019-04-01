<?php
session_start();
?>
<html>
<head>
	<title>home page</title>
</head>
<body>
<h1> Welcome <?php echo $_SESSION['firstnsme']; ?></h1>
</body>
</html>