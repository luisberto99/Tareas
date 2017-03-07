<?php
include_once("class/class-producto.php");
include_once("class/class-pelicula.php");
include_once("class/class-libro.php");
include_once("class/class-aplicacion.php");
include_once("class/class-usuario.php");
include_once("class/class-desarrollador.php");
include_once("class/class-comentarios.php");
include_once("class/class-icono.php");


$usuarios[] = new usuario("Greece Gonzaleez", "greece_Gonzaleez@gmail.com");
$usuarios[] = new usuario("Alberto Medina", "luisitomedina95@gmail.com");
$usuarios[] = new usuario("Alejandra Nicol","nickimedina@gmial.com");
$usuarios[] = new usuario("Brayan Gonzales", "brayangonzales@gmial.com");
$usuarios[] = new usuario("Andres Belmont", "tutabacoesmio@gmail.com");
$usuarios[] = new usuario("Erick Reyes", "erickreyes@gmail.com");

$estatus[] = "activo";
$estatus[] = "desarrollo";
$estatus[] = "borrado";

$categorias[] = "Android Wear";
$categorias[] = "Arte y diseño";
$categorias[] = "Automatizacion";
$categorias[] = "Belleza";
$categorias[] = "Blibliotecas y demos";
$categorias[] = "Casa y hogar";
$categorias[] = "Citas";
$categorias[] = "Comer y beber";
$categorias[] = "Comics";
$categorias[] = "Compras";
$categorias[] = "Comunicacion";
$categorias[] = "Deportes";
$categorias[] = "Educacion";
$categorias[] = "Enmpresa";
$categorias[] = "Entradas a eventos";
$categorias[] = "Entretenimiento";
$categorias[] = "Estilo de vida";
$categorias[] = "Finanzas";
$categorias[] = "Fotografia";
$categorias[] = "Herramientas";
$categorias[] = "Libros y obras de consulta";
$categorias[] = "Mapas y navegacion";
$categorias[] = "Medicina";
$categorias[] = "Musica y audio";
$categorias[] = "Noticias y revistas";
$categorias[] = "Personalizacion";
$categorias[] = "Productividadd";
$categorias[] = "Reproduccion y editores de video";
$categorias[] = "Salud y bienestar";
$categorias[] = "Ser padres";
$categorias[] = "Social";
$categorias[] = "Tiempo";
$categorias[] = "Viajes y guias";


$desarrollador[] = new desarrollador("Luis Medina", "luisberto99@gmail.com","luismedidna.com");
$desarrollador[] = new desarrollador("Daniela Raudales", "danyraudales@gmail.com", "daniraudales.com");
$desarrollador[] = new desarrollador("Eduardo Medina","tatomedina@gmial.com", "tatomedina.com");
$desarrollador[] = new desarrollador("Kevin Gomez", "kevingomez@gmial.com", "kevingomez@gmail.com");
$desarrollador[] = new desarrollador("Abram Arita","aritabram@gmial.com", "aritabram.com");
$desarrollador[] = new desarrollador("Angel Martinez", "angelmartinez@gmial.com", "angelmartinez.com");
$desarrollador[] = new desarrollador("Roberto Luque", "robertoluque@gmail.com", "robertoluque.com");

$iconos[] = "http://localhost/playstore/img/icono1.png";
$iconos[] = "http://localhost/playstore/img/icono2.png";
$iconos[] = "http://localhost/playstore/img/icono3.png";
$iconos[] = "http://localhost/playstore/img/icono4.png";
$iconos[] = "http://localhost/playstore/img/icono5.png";

$comentariosfacebook[] = new comentarios("Muy Impresionante", "For basic styling—light padding and only horizontal dividers—add the base class .table to any It may seem super redundant, but given the widespread use of tables for other plugins", $usuarios[2], "15/4/2016");

$comentariosfacebook[] = new comentarios("Muy Pesimo", "For basic styling—light padding and only horizontal dividers—add the base class .table to any It may seem super redundant, but given the widespread use of tables for other plugins", $usuarios[0], "15/4/2016");

$comentariosfacebook[] = new comentarios("Muy Pesimo", "For basic styling—light padding and only horizontal dividers—add the base class .table to any It may seem super redundant, but given the widespread use of tables for other plugins", $usuarios[1], "15/4/2016");

$aplicaciones[] = new aplicacion("Facebook","Comunicate con tus amigos donde quiera que estes", "28/4/1016", 4,$comentariosfacebook, "httm://localhost/playstore/apks/facebook.apk",40,$estatus[2],$iconos[0],$categorias[30],$desarrollador[2],"2.0.3.4","25/1017");

$comentariosSnap[] = new comentarios("Muy bueno", "For basic styling—light padding and only horizontal dividers—add the base class .table to any  It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.", $usuarios[5], "2/4/2016");
$comentariosSnap[] = new comentarios("Muy Pesimo", "For basic styling—light padding and only horizontal dividers—add the base class .table to any It may seem super redundant, but given the widespread use of tables for other plugins", $usuarios[3], "15/7/2016");
$comentariosSnap[] = new comentarios("Me gusto", "horizontal dividers—add the base class .table to any It may seem super redundant, but given the widespread use of tables for other plugins", $usuarios[0], "6/3/2016");

$aplicaciones[] = new aplicacion("Snapchat","La vida es más divertida cuando vives el momento :)","15/4/1016",4,$comentariosSnap,"http://localhost/playstore/apks/snapchat.apk",65,$estatus[1],$iconos[1],$categorias[30],$desarrollador[3],"3.4.6","4/6/17");

$comentariosInsta[] = new comentarios("Muy bueno", "For basic styling—light padding and only horizontal dividers—add the base class .table to any  It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.", $usuarios[0], "2/4/2016");
$comentariosInsta[] = new comentarios("Muy Pesimo", "For basic styling—light padding and only horizontal dividers—add the base class .table to any It may seem super redundant, but given the widespread use of tables for other plugins", $usuarios[5], "15/7/2016");
$comentariosInsta[] = new comentarios("Me gusto", "horizontal dividers—add the base class .table to any It may seem super redundant, but given the widespread use of tables for other plugins", $usuarios[3], "6/3/2016");

$aplicaciones[] = new aplicacion("Instagram","Una forma excelente de compartir tu mundo. Rapida, gratuita y divertida.","16/8/2016",5,$comentariosInsta,"http://localhost/playstore/apks/instagram.apk",10,$estatus[0],$iconos[2],$categorias[15], $desarrollador[0],"4.3.0.5","21/5/2017");


$comentariosWats[] = new comentarios("Muy bueno", "For basic styling—light padding and only horizontal dividers—add the base class .table to any  It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.", $usuarios[5], "2/4/2016");
$comentariosWats[] = new comentarios("Muy Pesimo", "For basic styling—light padding and only horizontal dividers—add the base class .table to any It may seem super redundant, but given the widespread use of tables for other plugins", $usuarios[2], "15/7/2016");
$comentariosWats[] = new comentarios("Me gusto", "horizontal dividers—add the base class .table to any It may seem super redundant, but given the widespread use of tables for other plugins", $usuarios[4], "6/3/2016");

$aplicacion[] = new aplicacion("whatsApp", "Simple. Personal. Mensajeria en tiempo real.","15/3/15",4,$comentariosWats,"http://localhost/playstore
	/apks/whatsapp.apk",25,$estatus[1],$iconos[3],$categorias[3],$desarrollador[4],"2.0.3.5","4/3/17");


$comentariosMess[] = new comentarios("Muy bueno", "For basic styling—light padding and only horizontal dividers—add the base class .table to any  It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.", $usuarios[0], "2/4/2016");
$comentariosMess[] = new comentarios("Muy Pesimo", "For basic styling—light padding and only horizontal dividers—add the base class .table to any It may seem super redundant, but given the widespread use of tables for other plugins", $usuarios[3], "15/7/2016");
$comentariosMess[] = new comentarios("Me gusto", "horizontal dividers—add the base class .table to any It may seem super redundant, but given the widespread use of tables for other plugins", $usuarios[5], "6/3/2016");

$aplicacion[] = new aplicacion("Messenger", "Messenger, un modo mas rapido de enviar mensajes.","21/6/2015",4,$comentariosMess,"http://localhost/playstore/apks/messenger.apk", 32, $estatus[2], $iconos[4], $categorias[25], $desarrollador[1], "3.5.0.7","13/1/17");
?>
<!DOCTYPE html>
<html>
<head>
	<title>PlayStore</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div style="margin: 20px ">
	<div class="alert alert-success" rel="stylesheet" >
		<?php
			if(isset($_GET["btn-guardar"])){
				if (!$_GET["txt-nombre"]) 
					echo "Ingrese el nombre de la aplicacion. <br>";
				if (!$_GET["txt-descripcion"])
					echo "Ingrese la descripcion de la aplicacion. <br>";
				if (!$_GET["txt-fechaPuplicacion"])
					echo "Ingrese la fecha de publicacion <br>";
				if(!$_GET["txt-calificacion"])
					echo "Ingrese la calificacion promedio. <br>";
				if (!$_GET["txt-URL"])
					echo "Ingrese el URL. <br>";
				if (!$_GET["cmb-icono"])
					echo "Seleccione un icono. <br>";
				if(!$_GET["txt-versrion"])
					echo "Ingrese la version de la aplicacion. <br>";
				if(!$_GET["txt-actualizacion"])
					echo "Ingrese la fecha de actualizacion. <br>";
				if(!$_GET["cmb-desarollador"])
					echo "Seleccione un desarrollador. <br>";
			}
		?>
	</div>
		<form action="index.php" method="GET">
			<table class="table table-striped table-hover" style="width: 50%">
				<tr>
					<td>Nombre Aplicación:</td>
					<td>
						<input type="text" name="txt-nombre" id="txt-nombre", class="form-control" 
						<?php if (isset($_GET["txt-nombre"])) {
							echo "value='". $_GET["txt-nombre"] ."'";}
							?>
							>
						</td>
					</tr>
					<tr>
						<td>Descripcion:</td>
						<td>
							<input type="text" name="txt-descripcion" id="txt-descripcion", class="form-control"
							<?php
							if (isset($_GET["txt-descripcion"])) {
								echo "Value= '". $_GET["txt-descripcion"] ."'" ;
							}
							?>
							>
						</td>
					</tr>
					<tr>
						<td>Fecha de Publicacion</td>
						<td>
							<input type="text" name="txt-fechaPuplicacion" id="txt-fechaPuplicacion", class="form-control"
							<?php
							if (isset($_GET["txt-fechaPuplicacion"])) {
								echo "Value = '". $_GET["txt-fechaPuplicacion"] ."'" ;
							}
							?>
							>
						</td>
					</tr>
					<tr>
						<td>Calificaion Promedio</td>
						<td>
							<input type="txt" name="txt-calificacion" id="txt-calificacion" class="form-control"
							<?php
							if (isset($_GET["txt-calificacion"])) {
								echo "Value = '". $_GET["txt-calificacion"] ."'";
							}
							?>
							>
						</td>
					</tr>
					<tr>
						<td>URL:</td>
						<td>
							<input type="text" name="txt-URL" id="txt-URL" class="form-control"
							<?php
							if (isset($_GET["txt-URL"])) {
								echo "value = '". $_GET["txt-URL"] . "'";
							}
							?>

							>
						</td>
					</tr>
					<tr>
						<td>Icono:</td>
						<td>
							<select name="cmb-icono", id="cmb-icono" class="form-control">
								<?php
								for ($i=0; $i < count($iconos); $i++) { 
									echo "<option value = '" . $iconos[$i] . "'";
									if (isset($_GET["cmb-icono"])) {
										if ($_GET["cmb-icono"]==$iconos[$i]) {
											echo "selected='selected'";
										}
									}
									echo ">" . $iconos[$i]. "</option>" ;
								}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Categorias:</td>
						<td>
							<?php
							for ($i=0; $i < count($categorias); $i++) { 
								echo "<label>";
								echo "<input type='checkbox' id='cbox-categoria' value= '". $i ."'>";
								echo $categorias[$i] ."</label>";
							}
							?>
						</td>
					</tr>
					<tr>
						<td>Version:</td>
						<td>
							<input type="text" name="txt-versrion" id="txt-versrion" class="form-control"
							<?php
							if (isset($_GET["txt-versrion"])) {
								echo "value = '". $_GET["txt-versrion"] . "'";
							}
							?>
							>
						</td>
					</tr>
					<tr>
						<td>Fecha de actualizacion:</td>
						<td>
							<input type="text" name="txt-actualizacion" id="txt-actualizacion" class="form-control"
							<?php
							if (isset($_GET["txt-actualizacion"])) {
								echo "value = '" . $_GET["txt-actualizacion"] ."'";
							}
							?>
							>
						</td>
					</tr>
					<tr>
						<td>Desarrollador</td>
						<td>
							<select name="cmb-desarollador" id="cmb-desarollador" class="form-control">
								<?php
								for ($i=0; $i < count($desarrollador); $i++) { 
									echo "<option value = '". $desarrollador[$i]->getNombre() ."'";
									if (isset($_GET["cmb-desarollador"])) 
										if($_GET["cmb-desarollador"]==$desarrollador[$i]->getNombre())
											echo "selected='selected'";
										echo ">" . $desarrollador[$i]->getNombre() . "</option>";
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" name="btn-guardar" value="Guardar" class="btn btn-primary">
							<input type="reset" name="btn-limpiar" value="Limpiar" class="btn btn-warning">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
	</html>