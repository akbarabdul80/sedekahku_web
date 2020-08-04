<!DOCTYPE html>
<html lang="id">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>

	<header>
		<?php $this->load->view("admin/_partials/header.php") ?>
	</header>

	<div class="container" style="padding: 25px 20px;">

		<?php if ($this->session->flashdata('success')) : ?>
			<div class="alert alert-success" role="alert">
				<?php echo $this->session->flashdata('success'); ?>
			</div>
		<?php endif; ?>

		<?php if ($this->session->flashdata('error')) : ?>
			<div class="alert alert-warning" role="alert">
				<?php echo $this->session->flashdata('error'); ?>
			</div>
		<?php endif; ?>

		<!-- DataTables -->
		<div class="card mb-3">
			<div class="card-header">
				<a href="" data-toggle="modal" data-target="#modalAdd" style="background-color: #fff; padding: 10px; font-size:14px; position: relative; border-radius: 5px;" class="small shadow-sm text-muted"><i class="fas fa-plus"></i> Tambahkan Baru</a>
			</div>
			<div class="card-body">

				<div class="table-responsive">
					<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Masjid</th>
								<th>Gambar</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1;
							foreach ($masjid as $mjd) : ?>
								<tr>
									<td width="150">
										<p><?php echo $i;
											$i++; ?></p>
									</td>
									<td>
										<p><?php echo $mjd->mosque_name ?></p>
									</td>
									<td>
										<img src="<?php echo base_url() . "upload/masjid/" . $mjd->mosque_img1 ?>" class="img-fluid" style="border-radius:3px; width: 100px;">
									</td>
									<td width="250">
										<a href="" data-toggle="modal" data-target="#modalEdit_<?= $mjd->id_mosque ?>" class="small shadow-sm text-muted" title="Edit" style="background-color: #fff; padding: 10px; font-size:14px; position: relative; border-radius: 5px;"><i class="fas fa-edit text-info"></i> Edit</a>
										<a onclick="deleteConfirm('<?php echo site_url('admin/masjid/delete/' . $mjd->id_mosque, $mjd->id_mosque) ?>')" href="#" class="small shadow-sm text-muted" title="Hapus" style="background-color: #fff; padding: 10px; font-size:14px; position: relative; border-radius: 5px;"><i class="fas fa-trash text-danger"></i> Hapus</a>
									</td>
								</tr>
							<?php endforeach; ?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>




	<div id="modalAdd" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog1 modal-lg">

			<div class="modal-content modal-content1">
				<div class="modal-header">
					<a href="" style="background-color: #fff; padding: 10px; font-size:14px; position: relative; border-radius: 5px;" class="small shadow-sm text-muted" data-dismiss="modal"><i class="fa fa-angle-left"></i> Kembali</a>
				</div>
				<div class="modal-body">
					<div class="card-body">
						<form action="<?= base_url('admin/masjid/add') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama_masjid">Nama Masjid*</label>
								<input type="text" class="form-control" name="mosque_name" placeholder="Nama Masjid" required />
							</div>
							<div class="form-group">
								<label for="alamat_masjid">Alamat Masjid*</label>
								<input type="text" class="form-control" name="mosque_address" placeholder="Alamat Masjid" required />
							</div>
							<div class="form-group mt-3">
								<label for="exampleFormControlFile1">Masukkan Gambar</label>
								<input type="file" name="img_1" class="form-control-file" id="exampleFormControlFile1" required />
								<input type="file" name="img_2" class="form-control-file mt-2" id="exampleFormControlFile1" />
								<input type="file" name="img_3" class="form-control-file mt-2" id="exampleFormControlFile1" />
							</div>
							<div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control" name="mosque_dec" rows="5" required></textarea>
							</div>

							<input class="btn btn-primary" style="background: #007bff" type="submit" name="btn" value="Posting" />
						</form>
					</div>

					<div class="card-footer small text-muted">
						* Wajib Diisi
					</div>
				</div>
			</div>

		</div>
	</div>


	<?php $i = 1;
	foreach ($masjid as $mjd) : ?>
		<div id="modalEdit_<?= $mjd->id_mosque ?>" class="modal fade" role="dialog">
			<div class="modal-dialog modal-dialog1 modal-lg">

				<div class="modal-content modal-content1">
					<div class="modal-header">
						<a href="" style="background-color: #fff; padding: 10px; font-size:14px; position: relative; border-radius: 5px;" class="small shadow-sm text-muted" data-dismiss="modal"><i class="fa fa-angle-left"></i> Kembali</a>
					</div>
					<div class="modal-body">
						<div class="card-body">
							<form action="<?= base_url("admin/masjid/update") ?>" method="post" enctype="multipart/form-data">

								<input type="hidden" name="id_mosque" value="<?php echo $mjd->id_mosque ?>" />
								<div class="form-group">
									<label for="nama_masjid">Nama Masjid*</label>
									<input type="text" class="form-control" name="mosque_name" placeholder="Nama Masjid" value="<?= $mjd->mosque_name ?>" require />
								</div>
								<div class="form-group">
									<label for="alamat_masjid">Alamat Masjid*</label>
									<input type="text" class="form-control" name="mosque_address" placeholder="Alamat Masjid" value="<?= $mjd->mosque_address ?>" require />
								</div>
								<div class="form-group mt-3">
									<label for="exampleFormControlFile1">Masukkan Gambar</label>
									<input type="file" name="img_1" class="form-control-file" id="exampleFormControlFile1" require />
									<input type="file" name="img_2" class="form-control-file mt-2" id="exampleFormControlFile1" />
									<input type="file" name="img_3" class="form-control-file mt-2" id="exampleFormControlFile1" />
								</div>
								<div class="form-group">
									<label>Keterangan</label>
									<textarea class="form-control" name="mosque_dec" rows="5"><?= $mjd->mosque_dec ?></textarea>
								</div>

								<input class="btn btn-success" style="background: #28a745" type="submit" name="btn" value="Simpan" />
							</form>
						</div>
						<div class="card-footer small text-muted">
							* Wajib Diisi
						</div>
					</div>
				</div>
			</div>
		</div>



		<!-- Delete Confirmation-->
		<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<p>Data yang dihapus tidak akan bisa dikembalikan.</p>
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<a id="btn-delete_<?= $mjd->id_mosque ?>" class="btn btn-danger" href="<?= base_url('admin/masjid/delete/' . $mjd->id_mosque) ?>">Delete</a>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>




	<?php $this->load->view("admin/_partials/footer.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

</body>

</html>