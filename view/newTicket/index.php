<?php
	require_once("../../config/conection.php");
	if(isset($_SESSION["id_usuario"])){
?>
<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php require_once("../mainHead/head.php");?>
	<title>Nuevo Ticket</title>
    <!-- Scripts jQuery, Bootstrap, Summernote y CSS de Summernote se cargan desde mainHead/head.php y mainJs/js.php -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                                <h3>Nuevo Ticket</h3>
                                <ol class="breadcrumb breadcrumb-simple">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Nuevo Ticket</li>
                                </ol>
                            </div>
                        </div>
                    </div>
            </header>

            <div class="box-typical box-typical-padding">
                    <p>
                        Desde esta ventana, podrás generas nuevos tickets
                    </p>

                    <h5 class="m-t-lg with-border">Ingresar su reporte de incidencia</h5>

                    <div class="row">
						<form method="post" id="ticket_form">

							<input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $_SESSION["id_usuario"] ?>">

							<div class="col-lg-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="exampleInput">Oficina</label>
									<select id="ofi_id" name="ofi_id" class="form-control">
										
									</select>
								</fieldset>
							</div>
							<div class="col-lg-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="tick_titulo">Título</label>
									<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese título">
								</fieldset>
							</div>
							<div class="col-lg-12">
								<fieldset class="form-group">
									<label class="form-label semibold" for="ticket_descrip">Descripción</label>
									<div class="summernote-theme-1">
										<textarea id="ticket_descrip" name="ticket_descrip" class="summernote" name="name"></textarea>
									</div>
								</fieldset>
							</div>
							<div class="col-lg-12">
								<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
							</div>
						</form>
				</div>
            </div>
        </div>
	</div>
	<!-- Contenido -->

	<?php require_once("../mainJs/js.php");?>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script type="text/javascript" src="newTicket.js"></script>
</body>
</html>
<?php
	} else {
		header("Location: http://localhost/sis_incidencia/index.php?");
	}
?>