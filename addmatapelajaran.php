<?php
$act = $_GET['act'];
?>
<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Tambah Matapelajaran</h3>
	</div>
</header>
<?php 
if ($act==0)
{
?>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Tambah Matapelajaran</h5>
			</header>
			<form class="form-horizontal" action="simpanmatapelajaran.php?act=0" method="post">
				<br>
				<div class="control-group">
					<label for="text1" class="control-label">Matapelajaran</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="MataPelajaran"
						data-original-title="Masukan Nama Matapelajaran" data-placement="bottom"/>
					</div>
					</div>
				<div class="control-group">
					<label for="text1" class="control-label">KKM</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="KKM"
						data-original-title="Masukan KKM" data-placement="bottom"/>
					</div>
					<div class="form-actions no-margin-bottom">
						<input type="submit" value="Simpan" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
}
else
{
	include "koneksi.php";
	$id = $_GET['id'];
	$sql = "select * from matapelajaran where Idmatapelajaran=$id";
	$rw=mysql_query($sql);
	$rs=mysql_fetch_array($rw)
?>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Tambah Matapelajaran</h5>
			</header>
			<form class="form-horizontal" action="simpanmatapelajaran.php?act=1&id=<?php echo $id;?>" method="post">
				<br>
				<div class="control-group">
					<label for="text1" class="control-label">Matapelajaran</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="MataPelajaran"
						data-original-title="Masukan Nama Matapelajaran" data-placement="bottom"
						value="<?php echo $rs[1];?>"/>
					</div>
					</div>
				<div class="control-group">
					<label for="text1" class="control-label">KKM</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="KKM"
						data-original-title="Masukan KKM" data-placement="bottom"
						value="<?php echo $rs[2];?>"/>
					</div>
					<div class="form-actions no-margin-bottom">
						<input type="submit" value="Simpan" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php	
}
?>