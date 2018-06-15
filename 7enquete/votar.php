<?php 
session_start();
if (isset($_POST["opc"])) {
	$opc=$_POST["opc"];
}

$conexao=mysqli_connect("localhost","root","");
mysqli_select_db($conexao,"test");
$sql="SELECT * FROM enquete";
$resultado=mysqli_query($conexao,$sql);

$pegar=mysqli_fetch_assoc($resultado);
$otimo=$pegar["otimo"]+1;
$bom=$pegar["bom"]+1;
$mais_ou_menos=$pegar["mais_ou_menos"]+1;
$ruim=$pegar["ruim"]+1;

if(isset($_POST["opc"]) && ($opc=="otimo"))
{
$sql="UPDATE enquete set otimo=$otimo,idenquete=1";
}
if(isset($_POST["opc"]) && ($opc=="bom"))
{
$sql="UPDATE enquete set bom=$bom,idenquete=1";
}
if(isset($_POST["opc"]) && ($opc=="mais_ou_menos"))
{
$sql="UPDATE enquete set mais_ou_menos=$mais_ou_menos,idenquete=1 ";
}
if(isset($_POST["opc"]) && ($opc=="ruim"))
{
$sql="UPDATE enquete set ruim=$ruim,idenquete=1";
}
$resultado=mysqli_query($conexao,$sql);

$usuario = $_SESSION['usuario'] = 'Luana';
$ip = $_SERVER["REMOTE_ADDR"];
//echo 'ip'.$ip;
//echo 'usuario'.$usuario;

mysqli_query($conexao,"INSERT INTO votacao (nome,ip) VALUES ($usuario, $ip)");


?>
<script language="JavaScript">

window.location.href="index.php";
</script>