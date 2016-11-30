<?php
include("koneksi.php");
$ids=$_GET['id'];
$ids2=$_GET['id2'];
$sql = "Delete from guruajar Where nip='$ids' and Idmatapelajaran =$ids2";
$ff=mysql_query($sql,$conn);
if($ff)
{
	header("location:index.php?page=guruajar");
}
?>