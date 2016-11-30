<?php
include("koneksi.php");
$tahun=$_GET['tahun'];
$NIP=$_GET['nip'];
$TahunAkademik=$_GET['tahun'];
$Semester=$_POST['Semester'];
$JenisNilai=$_POST['JenisNilai'];
$NIS=$_POST['NIS'];
$Idmatapelajaran=$_POST['Idmatapelajaran'];
$Nilai=$_POST['Nilai'];
$sql = "INSERT INTO nilai (NIP,
             TahunAkademik,
             Semester,
             JenisNilai,
             NIS,
             Idmatapelajaran,
             Nilai)
VALUES ('$NIP',
        '$TahunAkademik',
        '$Semester',
        '$JenisNilai',
        '$NIS',
        $Idmatapelajaran,
        $Nilai)";
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=nilai'</script>";
}
?>