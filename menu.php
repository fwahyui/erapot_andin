<!-- BEGIN MAIN NAVIGATION -->
	<ul id="menu" class="unstyled accordion collapse in">
		
		<?php 
		if($LogHak=="admin")
		{ 
		?>
		<li><a href="index.php"><i class="icon-table icon-large"></i> Dasboard</a></li>
		<li class="accordion-group ">
			<a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
				<i class="icon-tasks icon-large"></i> Master
			</a>
			<ul class="collapse " id="component-nav">
				<li><a href="?page=tahun"><i class="icon-angle-right"></i> Tahun Pelajaran</a></li>
				<li><a href="?page=kelas"><i class="icon-angle-right"></i> Kelas</a></li>
				<li><a href="?page=matapelajaran"><i class="icon-angle-right"></i> Matapelajaran</a></li>
				<li><a href="?page=guru"><i class="icon-angle-right"></i> Guru</a></li>
				<li><a href="?page=siswa"><i class="icon-angle-right"></i> Siswa</a></li>
				<li><a href="?page=kelasdetil"><i class="icon-angle-right"></i> Kelas Detil</a></li>
				<li><a href="?page=guruajar"><i class="icon-angle-right"></i> Guru Matapelajaran</a></li>
			</ul>
		</li>
		<li class="accordion-group ">
			<a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#inputnilai">
				<i class="icon-tasks icon-large"></i> Input Nilai
			</a>
			<ul class="collapse " id="inputnilai">
				<li><a href="?page=inputnilai"><i class="icon-angle-right"></i> Input Nilai</a></li>
				<li><a href="?page=nilai"><i class="icon-angle-right"></i> Daftar Nilai</a></li>
				<li><a href="?page=extra"><i class="icon-angle-right"></i> Pengembangan Diri</a></li>
				<li><a href="?page=akhlak"><i class="icon-angle-right"></i> Akhlak dan Kepribadian</a></li>
				<li><a href="?page=raportprint"><i class="icon-angle-right"></i> Cetak Raport</a></li>
			</ul>
		</li>
		<?php
		}
		else if($LogHak=="Wali Kelas")
		{ 
		?>
		<li><a href="index.php"><i class="icon-table icon-large"></i> Dasboard</a></li>
		<li class="accordion-group ">
			<a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#inputnilai">
				<i class="icon-tasks icon-large"></i> Input Nilai
			</a>
			<ul class="collapse " id="inputnilai">
				<li><a href="?page=inputnilai"><i class="icon-angle-right"></i> Input Nilai</a></li>
				<li><a href="?page=nilai"><i class="icon-angle-right"></i> Daftar Nilai</a></li>
				<li><a href="?page=nilai"><i class="icon-angle-right"></i> Pengembangan Diri</a></li>
				<li><a href="?page=nilai"><i class="icon-angle-right"></i> Akhlak dan Kepribadian</a></li>
				<li><a href="?page=raportprint"><i class="icon-angle-right"></i> Cetak Raport</a></li>
			</ul>
		</li>
		<?php
		}
		else if($LogHak=="Guru")
		{ 
		?>
		<li><a href="index.php"><i class="icon-table icon-large"></i> Dasboard</a></li>
		<li class="accordion-group ">
			<a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#inputnilai">
				<i class="icon-tasks icon-large"></i> Input Nilai
			</a>
			<ul class="collapse " id="inputnilai">
				<li><a href="?page=inputnilai"><i class="icon-angle-right"></i> Input Nilai</a></li>
				<li><a href="?page=nilai"><i class="icon-angle-right"></i> Daftar Nilai</a></li>
			</ul>
		</li>
		<?php
		}
		else
		{ 
		?>
		<li><a href="?page=nilaisiswa&nis=<?php echo $Lognipnis;?>"><i class="icon-table icon-large"></i> Lihat Nilai</a></li>
		<?php
		}
		?>
	</ul>
	<!-- END MAIN NAVIGATION -->