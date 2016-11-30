<?php
include("koneksi.php");
$tahun=$_GET['tahun'];
$sql = "INSERT INTO akhlak
            (Tahunakademik,
             Semester,
             NIS,
             Akhlak,
             Kepribadian,
             SaranWaliKelas,
             Sakit,
             Ijin,
             TanpaKeterangan)
VALUES ('$tahun',
        '$_POST[Semester]',
        '$_POST[NIS]',
        '$_POST[Akhlak]',
        '$_POST[Kepribadian]',
        '$_POST[SaranWaliKelas]',
        $_POST[Sakit],
        $_POST[Ijin],
        $_POST[TanpaKeterangan])";
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=akhlak'</script>";
}
?>