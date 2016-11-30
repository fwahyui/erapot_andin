<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Nilai Siswa</h3>
	</div>
</header>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Data Nilai Siswa</h5>
			</header>
			<div id="collapse4" class="body">
				<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
					<thead>
						<tr>
							<th>NIP</th>
							<th>TahunAkademik</th>
							<th>Semester</th>							
							<th>Jenis Nilai</th>
							<th>NIS</th>
							<th>Nama</th>
							<th>MataPelajaran</th>
							<th>KKM</th>							
							<th>Nilai</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					include "koneksi.php";
					$sql = "SELECT a.idnilai,a.NIP,a.TahunAkademik,a.Semester,a.JenisNilai,
					a.NIS,b.Nama,c.MataPelajaran,c.KKM,a.Nilai
					FROM nilai a, siswa b, matapelajaran c
					WHERE a.nis=b.nis AND a.Idmatapelajaran=c.Idmatapelajaran";
					$rw=mysql_query($sql);
					while($rs=mysql_fetch_array($rw))
					{
					?>
						<tr>
							<td><?php echo $rs[1]; ?></td>
							<td><?php echo $rs[2]; ?></td>
							<td><?php echo $rs[3]; ?></td>
							<td><?php echo $rs[4]; ?></td>
							<td><?php echo $rs[5]; ?></td>
							<td><?php echo $rs[6]; ?></td>
							<td><?php echo $rs[7]; ?></td>
							<td><?php echo $rs[8]; ?></td>
							<td><?php echo $rs[9]; ?></td>
							<td>
								<div class="btn-group">
									<a href="hapusnilai.php?id=<?php echo $rs[0]; ?>"><button class="btn btn-danger remove"><i class="icon-remove"></i></button></a>
								</div>
							</td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>