<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Akhlak dan Kepribadian Diri Siswa</h3>
	</div>
</header>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Data Akhlak dan Kepribadian Diri Siswa</h5>
			</header>
			<div id="collapse4" class="body">
				<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
					<thead>
						<tr>
							<th>TahunAkademik</th>
							<th>Semester</th>							
							<th>NIS</th>
							<th>Nama</th>
							<th>Akhlak</th>
							<th>Kepribadian</th>
							<th>SaranWaliKelas</th>	
							<th>Sakit</th>
							<th>Ijin</th>
							<th>TanpaKeterangan</th>							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					include "koneksi.php";
					$sql = "SELECT a.idakhlak,a.Tahunakademik,a.Semester,
					a.NIS,b.Nama,a.Akhlak,
					a.Kepribadian,a.SaranWaliKelas,
					a.Sakit,a.Ijin,a.TanpaKeterangan
					FROM akhlak a, siswa b
					WHERE a.nis=b.nis ";
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
							<td><?php echo $rs[10]; ?></td>
							<td>
								<div class="btn-group">
									<a href="hapusakhlak.php?id=<?php echo $rs[0]; ?>"><button class="btn btn-danger remove"><i class="icon-remove"></i></button></a>
								</div>
							</td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
				<a href="?page=addakhlak">
					<input type="submit" value="Input Akhlak dan Kepribadian" class="btn btn-primary">
				</a>
			</div>
		</div>
	</div>
</div>