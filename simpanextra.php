<?php
include("koneksi.php");
$tahun=$_GET['tahun'];
$sql = "INSERT INTO extrak
(TahunAkademik,
Semester,
NIS,
Kegiatan,
Nilai,
Keterangan)
VALUES ('$tahun',
'$_POST[Semester]]',
'$_POST[NIS]',
'$_POST[Kegiatan]',
'$_POST[Nilai]',
'$_POST[Keterangan]');";
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=extra'</script>";
}
?>