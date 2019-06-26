<html>
<body>
	  <link rel="stylesheet" href="<?php echo  base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo  base_url();?>assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo  base_url();?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo  base_url();?>assets/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo  base_url();?>assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="<?php echo  base_url();?>assets/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo  base_url();?>assets/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?php echo  base_url();?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">


  <link href="<?php echo base_url();?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<div class="content-wrapper">
	<section class="content-header">
	<h1>Data Mahasiswa</h1>
	<br/>
	<button type="button" data-toggle="modal" data-target="#myModal" title="Tambah Data"><i class="fa fa-plus"></i> Tambah</button>

	<!-- Modal Insert -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal Content -->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Tambah Data Baru</h4>
				</div>
				<div class="modal-body">
					<div class="box-body">
						<?php echo form_open_multipart("Mahasiswa/input");?>
						<div class="form-group">
							<label for="password">Nama Mahasiswa</label>
							<input type="text" id="password" placeholder="Nama Mahasiswa" name="mahasiswa_nama" required="required">
						</div>
						<div class="form-group">
							<label for="password">NIM</label>
							<input type="text" id="password" placeholder="NIM" name="mahasiswa_nim" required="required">
						</div>
						<div class="form-group">
							<label for="password">Jurusan</label>
							<input type="text" id="password" placeholder="Jurusan" name="mahasiswa_jurusan" required="required">
						</div>
						<div class="form-group">
							<label for="password">Alamat</label>
							<input type="text" id="password" placeholder="Alamat" name="mahasiswa_alamat" required="required">
						</div>
						<div class="form-group">
							<label for="password">Nomor Hp</label>
							<input type="number" id="password" placeholder="Nomor HP" name="mahasiswa_no_hp" required="required">
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-primary" title="Tambah Data">Tambah</button>
					</div>
					<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Data Mahasiswa</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered table-striped" id="example1">
							<thead>
								<tr>
									<th style="width: 10px">No</th>
									<th>Nama Mahasiswa</th>
									<th>NIM</th>
									<th>Jurusan</th>
									<th>Alamat</th>
									<th>Nomor HP</th>
									<th style="width: 120px">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$no=1;
									foreach ($mahasiswa as $key) {
										$id=$key->mahasiswa_id;
								?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $key->mahasiswa_nama; ?></td>
										<td><?php echo $key->mahasiswa_nim; ?></td>
										<td><?php echo $key->mahasiswa_jurusan; ?></td>
										<td><?php echo $key->mahasiswa_alamat; ?></td>
										<td><?php echo $key->mahasiswa_no_hp; ?></td>
										<td>
											<button type="button" class="btn btn-xs btn-success" title="Hapus Data" data-toggle="modal" data-target="#delete<?php echo $id;?>"><i class="fa fa-trash"></i></button>
										</td>
									</tr>
							<div class="modal fade" id="delete<?php echo $id;?>" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<?php echo form_open("Mahasiswa/delete");?>
										<div class="modal-header">
											<h4 class="modal-title">Hapus Data</h4>
										</div>
										<div class="modal-body">
											<div class="alert alert-danger">Apakah anda yakin ingin menghapus "<b><?php echo $key->mahasiswa_nama?></b>" ?</div>
										</div>
										<div class="modal-footer">
											<input type="hidden" class="form-control" value="<?php echo $key->mahasiswa_id?>" name="mahasiswa_id" required="required">
											<button type="submit" class="btn btn-danger">Ya</button>
											<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Batal</button>
										</div>
										<?php echo form_close(); ?>
									</div>
								</div>
							</div>
							<?php
							$no++;
								}
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>
<script src="<?php echo base_url();?>assets/js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/js/demo.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.min.js"></script>

<!-- jvectormap -->
<script src="<?php echo base_url();?>assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo  base_url();?>assets/js/jvectormap/jquery-jvectormap-usa-en.js"></script>
<script src="<?php echo  base_url();?>assets/mask/dist/jquery.mask.min.js"></script>

<script src="<?php echo  base_url();?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script src="<?php echo  base_url();?>assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
</body>
</html>