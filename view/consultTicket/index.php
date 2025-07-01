<?php
	require_once("../../config/conection.php");
	if(isset($_SESSION["id_usuario"])){
?>
<!DOCTYPE html>
<html>
	<?php require_once("../mainHead/head.php");?>
	<title>Consultar Ticket</title>
</head>
<body class="with-side-menu">

	<?php require_once("../mainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>

	<?php require_once("../mainNav/nav.php");?>

	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
                    <div class="tbl">
                        <div class="tbl-row">
                            <div class="tbl-cell">
                                <h3>Consultar Ticket</h3>
                                <ol class="breadcrumb breadcrumb-simple">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Consultar Ticket</li>
                                </ol>
                            </div>
                        </div>
                    </div>
            </header>

			<div class="box-typical box-typical-padding">
				<table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
							<th style="width: 10%;">Nro. Ticket</th>
							<th style="width: 15%;">Oficina</th>
							<th class="d-none d-sm-table-cell" style="width: 25%;">Título</th>
							<th class="text-center" style="width: 15%;"></th>
							
						</tr>
					</thead>
					<tbody>
						<!-- Los datos se cargarán mediante AJAX -->
					</tbody>

				</table>
			</div>

		</div>
	</div>
	<!-- Contenido -->

	<?php require_once("../mainJs/js.php");?>
	
	<script type="text/javascript" src="consultTicket.js"></script>
</body>
</html>
<?php
	} else {
		header("Location: http://localhost/sis_incidencia/index.php?");
	}
?>