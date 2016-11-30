<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Guru Ajar</h3>
	</div>
</header>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Guru Ajar</h5>
			</header>
			<div id="collapse4" class="body">
				<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
					<thead>
						<tr>
							<th>NIP</th>
							<th>Nama</th>
							<th>Matapelajaran</th>							
							<th>KKM</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					include "koneksi.php";
					$sql = "SELECT a.nip,a.nama,b.matapelajaran,b.kkm,b.Idmatapelajaran
					FROM guru a, matapelajaran b, guruajar c
					WHERE a.NIP=c.nip AND b.Idmatapelajaran=c.Idmatapelajaran ";
					$rw=mysql_query($sql);
					while($rs=mysql_fetch_array($rw))
					{
					?>
						<tr>
							<td><?php echo $rs[0]; ?></td>
							<td><?php echo $rs[1]; ?></td>
							<td><?php echo $rs[2]; ?></td>
							<td><?php echo $rs[3]; ?></td>
							<td>
								<a href="hapusguruajar.php?id=<?php echo $rs[0]; ?>&id2=<?php echo $rs[4]; ?>"><button class="btn btn-danger remove"><i class="icon-remove"></i></button></a>
							</td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
				<a href="?page=addguruajar&act=0">
					<input type="submit" value="Input Guru Mapel" class="btn btn-primary">
				</a>
			</div>
		</div>
	</div>
</div>
<!-- #editModal -->
        <div id="editModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
             aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="editModalLabel"><i class="icon-edit"></i> Edit Table</h3>
            </div>
            <div class="modal-body">
                <div class="control-group">
                    <label for="fName" class="control-label">First Name</label>
                    <div class="controls">
                        <input type="text" id="fName" name="fName">
                    </div>
                </div>
                <div class="control-group">
                    <label for="lName" class="control-label">Last Name</label>
                    <div class="controls">
                        <input type="text" id="lName" name="lName">
                    </div>
                </div>
                <div class="control-group">
                    <label for="uName" class="control-label">Username</label>
                    <div class="controls">
                        <input type="text" id="uName" name="uName">
                    </div>
                </div>
                <div class="form-actions">
                    <button id="sbmtBtn" type="submit" class="btn btn-primary" data-dismiss="modal" >Submit</button>
                </div>
            </div>
            <div class="modal-footer">

                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
        <!-- /#editModal -->