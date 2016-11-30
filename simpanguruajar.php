<?php
include("koneksi.php");
$act=$_GET['act'];
if($act==0)
{
	$sql = "INSERT INTO guruajar
(NIP,
idmatapelajaran)
VALUES ($_POST[idkelas],
'$_POST[nis]')";
}
else
{

}
$rs=mysql_query($sql);
echo "<script>window.location='index.php?page=guruajar'</script>";
?>