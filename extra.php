<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Nilai Pengembangan Diri Siswa</h3>
	</div>
</header>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Data Nilai Pengembangan Diri Siswa</h5>
			</header>
			<div id="collapse4" class="body">
				<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
					<thead>
						<tr>
							<th>TahunAkademik</th>
							<th>Semester</th>							
							<th>Kegiatan</th>
							<th>NIS</th>
							<th>Nama</th>
							<th>Nilai</th>
							<th>Keterangan</th>							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					include "koneksi.php";
					$sql = "SELECT a.IDExtra,a.TahunAkademik,a.Semester,a.Kegiatan,a.Nis, 
					b.Nama,a.Nilai,a.Keterangan
					FROM extrak a, siswa b
					WHERE a.nis = b.NIS";
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
							<td>
								<div class="btn-group">
									<a href="hapusextra.php?id=<?php echo $rs[0]; ?>"><button class="btn btn-danger remove"><i class="icon-remove"></i></button></a>
								</div>
							</td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
				<a href="?page=addextra">
					<input type="submit" value="Input Nilai Pengembangan" class="btn btn-primary">
				</a>
			</div>
		</div>
	</div>
</div>