<?php
	require_once("../../config/conection.php");
	if(isset($_SESSION["id_usuario"])){
?>
<!DOCTYPE html>
<html>
	<?php require_once("../mainHead/head.php");?>
	<title>Reporte de incidencias</title>
</head>
<body class="with-side-menu">

	<?php require_once("../mainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>

	<?php require_once("../mainNav/nav.php");?>

	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
			Blank page.
		</div>
	</div>
	<!-- Contenido -->

	<?php require_once("../mainJs/js.php");?>

	<script type="text/javascript" src="home.js"></script>
</body>
</html>
<?php
	} else {
		header("Location: http://localhost/sis_incidencia/index.php?");
	}
?>