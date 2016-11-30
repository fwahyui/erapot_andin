<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Dasboard</h3>
	</div>
</header>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
		<header>
			<div class="toolbar">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#button-container">
					Selamat Datang <span class="label label-warning"><?php echo $LogNamaUser;?></span></a></li>
				<?php 
				if($LogHak=="admin")
				{ 
				?>
					<li><a data-toggle="tab" href="#bobot">Pembobotan Nilai</a></li>
				<?php
				}
				?>	
				</ul>
			</div>
		</header>
		<div class="body tab-content">
			<div id="bobot" class="tab-pane fade"><?php include "bobot.php";?></div>
			<div id="button-container" class="tab-pane active">ssss
			</div>
		</div>
		</div>
	</div>
</div>