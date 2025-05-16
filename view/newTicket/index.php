<?php
	require_once("../../config/conection.php");
	if(isset($_SESSION["id_usuario"])){
?>
<!DOCTYPE html>
<html>
	<?php require_once("../mainHead/head.php");?>
	<title>Nuevo Ticket</title>
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
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Oficina</label>
							<select id="exampleSelect" class="form-control">
								<option>DEFENSORIA UNIVERSITARIA</option>
								<option>CONSEJO UNIVERSITARIO</option>
								<option>RECTORADO</option>
								<option>UNIDAD FORMULADORA DE PROYECTOS</option>
								<option>VIGILANCIA - UNJFSC</option>
								<option>IMPLEMENTACION DE RECOMENDACIONES DE AUDITORIA</option>
								<option>SECRETARIA GENERAL</option>
								<option>UNIDAD TRAMITE DOCUMENTARIO</option>
								<option>UNIDAD REGISTRO DE GRADOS Y TITULOS</option>
								<option>UNIDAD ARCHIVO CENTRAL</option>
								<option>OFICINA DE PLANIFICACION, PRESUPUESTO E INFRAESTRUCTURA</option>
								<option>UNIDAD DE INFRAESTRUCTURA Y DESARROLLO FISICO</option>
								<option>OFICINA DE ASESORIA JURIDICA</option>
								<option>OFICINA DE IMAGEN INSTITUCIONAL</option>
								<option>OFICINA RELACIONES INTERNACIONALES, COOPERACION TECNICA Y DE CONVENIOS</option>
								<option>ORGANO DE CONTROL INSTITUCIONAL</option>
								<option>INSTITUTO DE IDIOMAS</option>
								<option>OFICINA RECURSOS HUMANOS</option>
								<option>UNIDAD EJECUCION PRESUPUESTAL</option>
								<option>UNIDAD TESORERIA</option>
								<option>UNIDAD CAJA CENTRAL</option>
								<option>UNIDAD PROGRAMACION DE BIENES Y SERVICIOS</option>
								<option>OFICINA DE SERVICIOS GENERALES</option>
								<option>UNIDAD ALMACEN CENTRAL</option>
								<option>UNIDAD PROCESOS DE SELECCION</option>
								<option>OFICINA DE BIENESTAR UNIVERSITARIO</option>
								<option>VICERRECTORADO  ACADEMICO</option>
								<option>EAP EDUCACION SEMIESCOLARIZADO - EAPESE - PROFDOSA</option>
								<option>RESPONSABILIDAD SOCIAL UNIVERSITARIA</option>
								<option>BIBLIOTECA CENTRAL Y VIRTUAL</option>
								<option>CENTRO PREUNIVERSITARIO</option>
								<option>EDITORIAL UNIVERSITARIA</option>
								<option>OFICINA DE REGISTROS Y ASUNTOS ACADEMICOS</option>
								<option>OFICINA CENTRAL DE ADMISION</option>
								<option>CENTRO DE COMPUTO - ADMISION</option>
								<option>MUSEO ARQUEOLOGICO</option>
								<option>TRIBUNAL DE HONOR</option>
								<option>COMITE ELECTORAL UNIVERSITARIO</option>
								<option>ESCUELA DE POSGRADO</option>
								<option>FACULTAD DE INGENIERIA PESQUERA</option>
								<option>FACULTAD DE EDUCACION</option>
								<option>FACULTAD DE MEDICINA HUMANA</option>
								<option>FACULTAD DE CIENCIAS</option>
								<option>FACULTAD DE INGENIERIA QUIMICA Y METALURGICA</option>
								<option>FACULTAD DE INGENIERIA INDUSTRIAL, SISTEMAS E INFORMATICA</option>
								<option>FACULTAD DE CIENCIAS SOCIALES</option>
								<option>FACULTAD DE DERECHO Y CIENCIAS POLITICAS</option>
								<option>FACULTAD DE INGENIERIA AGRARIA, INDUSTRIAS ALIMENTARIAS Y AMBIENTAL</option>
								<option>FACULTAD DE BROMATOLOGIA Y NUTRICION</option>
							</select>
						</fieldset>
					</div>
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInputEmail1">Título</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese título">
						</fieldset>
					</div>
					<div class="col-lg-12">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInputPassword1">Descripción</label>
							<div class="summernote-theme-1">
                                <textarea id="ticket_descrip" class="summernote" name="name">Hello Summernote</textarea>
                            </div>
						</fieldset>
					</div>
                    <div class="col-lg-12">
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
						</div>
				</div><!--.row-->
            </div>
        </div>
	</div>
	<!-- Contenido -->

	<?php require_once("../mainJs/js.php");?>
	
	<script type="text/javascript" src="newTicket.js"></script>
</body>
</html>
<?php
	} else {
		header("Location: http://localhost/sis_incidencia/index.php?");
	}
?>