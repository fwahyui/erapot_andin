<?php
include("koneksi.php");
$act=$_GET['act'];
if($act==0)
{
	$sql = "INSERT INTO matapelajaran
	(MataPelajaran,KKM)
	VALUES ('$_POST[MataPelajaran]',$_POST[KKM])";
}
else
{
	$id = $_GET['id'];
	$sql = "UPDATE dberaport.matapelajaran
	SET MataPelajaran = '$_POST[MataPelajaran]',
	KKM = $_POST[KKM]
	WHERE Idmatapelajaran = $id";
}
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=matapelajaran'</script>";
}
?>