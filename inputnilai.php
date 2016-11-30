<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Input Nilai Siswa</h3>
	</div>
</header>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Input Nilai Siswa</h5>
			</header>
			<form class="form-horizontal" 
			action="simpannilai.php?tahun=<?php echo $TahunAktif;?>&nip=<?php echo $Lognipnis;?>"
			method="post">
				<br>
				<div class="control-group">
					<label class="control-label">Semester</label>
					<div class="controls">
						<select data-placeholder="Pilih Kelas" class="chzn-select span6" tabindex="2" 
						name="Semester">
							<option value="Ganjil">Ganjil</option>
							<option value="Genap">Genap</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Jenis Nilai</label>
					<div class="controls">
						<select data-placeholder="Pilih Kelas" class="chzn-select span6" tabindex="2" name="JenisNilai">
							<option value="UH">Ulangan Harian</option>
							<option value="UTS">Ujian Tengah Semester</option>
							<option value="UAS">Ujian Akhir Semester</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label for="text1" class="control-label">NIS</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="NIS"
						data-original-title="Masukan Nama Kelas - Contoh: VII A" data-placement="bottom"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Matapelajaran</label>
					<div class="controls">
						<select data-placeholder="Pilih Siswa" class="chzn-select span6" tabindex="2" name="Idmatapelajaran">
							<option value=""></option>
							<?php
							include("koneksi.php");
							$sql ="select * from matapelajaran";
							$rw=mysql_query($sql,$conn);
							while($s=mysql_fetch_array($rw))
							{
							?>
							<option value="<?php echo $s[0];?>"><?php echo $s[1];?></option>
							<?php
							}
							?>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label for="text1" class="control-label">Nilai</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="Nilai"
						data-original-title="Masukan Nama Kelas - Contoh: VII A" data-placement="bottom"/>
					</div>
				</div>
				<div class="control-group">
					<div class="form-actions no-margin-bottom">
						<input type="submit" value="Simpan" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>