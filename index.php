<?PHP
session_start();

?>

<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<LINK HREF="estilos.CSS" REL="STYLESHEET" TYPE="TEXT/CSS">
<SCRIPT LANGUAGE="JavaScript">
</SCRIPT>
</HEAD>

<BODY bgcolor= "lightblue"> 

<br>




<table>
<tr><a href="http://192.168.1.51/pagina/copiar.php"><button style ="width: 13%; height: 5%; float: left;background-color: #11F3FF; margin-left: 1%">Insertar</button></a></tr>

<form action="index.php" method="POST">
<tr><INPUT TYPE="submit" NAME="listar" VALUE="Listar" style ="width: 13%; height: 5%; float: left; background-color: #11FFCD; margin-left: 1%"></tr>
</form>
<form action="index.php" method="POST">
<tr><INPUT TYPE="submit" NAME="buscar" VALUE="Buscar" style ="width: 13%; height: 5%; float: left; background-color: #11FFA7; margin-left: 1%"></tr>
</form>
<form action="index.php" method="POST">
<tr><INPUT TYPE="submit" NAME="borrar" VALUE="Borrar" style ="width: 13%; height: 5%; float: left; background-color: #11FF48; margin-left: 1%"></tr>
</form>
<form action="index.php" method="POST">
<tr><INPUT TYPE="submit" NAME="actualizar" VALUE="Actualizar" style ="width: 13%; height: 5%; float: left; background-color: #9FFF11; margin-left: 1%"></tr></form>
<tr><INPUT TYPE="submit" NAME="pagina" VALUE="Translate" style ="width: 13%; height: 5%; float: left; background-color: #E3FF11; margin-left: 1%;">
</tr></form>
<form action="index.php" method="POST">
<tr><INPUT TYPE="submit" NAME="salir" VALUE="Cerrar Sesion" style ="width: 13%; height: 5%; float: left; background-color: #FF2D11; margin-left: 1%;"></tr></form><br><br>
</table>

	
<?PHP
//----------------------------------------------------------------
if (isset ($_REQUEST["insertar"])) {
	require_once "insertar.php";
}
else if (isset ($_REQUEST["insertar2"])) {
	require_once "insertar2.php";
}
else if (isset ($_REQUEST["insertar3"])) {
	require_once "insertar3.php";
}
//----------------------------------------------------------------
else if (isset ($_REQUEST["listar"])) {
	require_once "listar.php";
}
//----------------------------------------------------------------
else if (isset ($_REQUEST["buscar"])) {
	require_once "buscar.php";
}
else if (isset ($_REQUEST["buscar2"])) {
	require_once "buscar2.php";
}
//----------------------------------------------------------------
else if (isset ($_REQUEST["borrar"])) {
	require_once "borrar.php";
}
else if (isset ($_REQUEST["borrar2"])) {
	require_once "borrar2.php";
}
//----------------------------------------------------------------
else if (isset ($_REQUEST["actualizar"])) {
	require_once "actualizar.php";
}
else if (isset ($_REQUEST["actualizar2"])) {
	require_once "actualizar2.php";
}
//----------------------------------------------------------------
else if (isset ($_REQUEST["index"])) {
	require_once "index.php";
}
//----------------------------------------------------------------
else if (isset ($_REQUEST["pagina"])) {
	require_once "dos_enlaces.php";
}
?>	

<?PHP
if(isset($_SESSION['salir'])){

	session_destroy();
	header('Location: ,/registro_entrar.html');

}

else {
	
?>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

</HEAD>

<BODY bgcolor= "lightblue"> 
<form action="registro_entrar.html" method="post">
 
<br><br><div align="center"><INPUT TYPE="submit" name="caducado" VALUE="SESION CADUCADA" style="background-color: #FF0027; color: white; font-weight: bold;"></div>

</form>
</BODY>

<?PHP

}


?>

</BODY>
</HTML>
