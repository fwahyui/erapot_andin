<?php
include("koneksi.php");
$sql = "delete from pembobotan";
$rs=mysql_query($sql) or die(mysql_error());
$sql = "INSERT INTO pembobotan
            (NUH,
             UTS,
             UAS,
             bNUH,
             bUTS,
             bUAS)
VALUES ($_POST[NUH],
        $_POST[UTS],
        $_POST[UAS],
        '$_POST[bNUH]',
        '$_POST[bUTS]',
        '$_POST[bUAS]')";
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php'</script>";
}
?>