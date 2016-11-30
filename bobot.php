<?php
$sql = "select * from pembobotan";
$rw=mysql_query($sql);
$rs=mysql_fetch_array($rw);
?>
<form class="form-horizontal" action="simpanbobot.php" method="post">
	<div class="control-group"><br>
		<label for="text1" class="control-label">Jumlah Ulangan Harian</label>
		<div class="controls with-tooltip">
			<input type="text" id="text1" class="span6 input-tooltip" name="NUH"
			 data-placement="bottom" value="<?php echo $rs[0];?>"/>
		</div>
	</div>
	<div class="control-group">
		<label for="text1" class="control-label">Jumlah Ulangan Tengah Semester</label>
		<div class="controls with-tooltip">
			<input type="text" id="text1" class="span6 input-tooltip" name="UTS"
			 data-placement="bottom" value="<?php echo $rs[1];?>"/>
		</div>
	</div>
	<div class="control-group">
		<label for="text1" class="control-label">Jumlah Ulangan Akhir Semester</label>
		<div class="controls with-tooltip">
			<input type="text" id="text1" class="span6 input-tooltip" name="UAS"
			 data-placement="bottom" value="<?php echo $rs[2];?>"/>
		</div>
	</div>
	<div class="control-group">
		<label for="text1" class="control-label">Bobot Ulangan Harian</label>
		<div class="controls with-tooltip">
			<input type="text" id="text1" class="span6 input-tooltip" name="bNUH"
			 data-placement="bottom" value="<?php echo $rs[3];?>"/>
		</div>
	</div>
	<div class="control-group">
		<label for="text1" class="control-label">Bobot Ulangan Tengah Semester</label>
		<div class="controls with-tooltip">
			<input type="text" id="text1" class="span6 input-tooltip" name="bUTS"
			 data-placement="bottom" value="<?php echo $rs[4];?>"/>
		</div>
	</div>
	<div class="control-group">
		<label for="text1" class="control-label">Bobot Ulangan Akhir Semester</label>
		<div class="controls with-tooltip">
			<input type="text" id="text1" class="span6 input-tooltip" name="bUAS"
			 data-placement="bottom" value="<?php echo $rs[5];?>"/>
		</div>
	</div>
	<div class="control-group">
		<div class="form-actions no-margin-bottom">
			<input type="submit" value="Simpan" class="btn btn-primary">
		</div>
	</div>
</form>