<!DOCTYPE html>
<html lang="id">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>

	<header>
		<?php $this->load->view("admin/_partials/header.php") ?>
	</header>

	<?= var_dump( $masjid) ?>

	<div class="container" style="padding: 25px 20px;">
		<div class="alert alert-success" role="alert">Berhasil Menambahkan Dll. Pokoknya Alert :)</div>

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
								<th>Gambar</th>
								<th>Nama Masjid</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1;
							foreach ($masjid as $mjd) : ?>
								<tr>
									<td width="150">
										<?php echo $i;
										$i++; ?>
									</td>
									<td>
										<?php echo $mjd->mosque_name ?>
									</td>
									<td width="250">
										<a href="<?php echo site_url('admin/kategori/edit/' . $mjd->id_mosude) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
										<a onclick="deleteConfirm('<?php echo site_url('admin/kategori/delete/' . $mjd->id_mosude) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
						<form action="" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama_masjid">Nama Masjid*</label>
								<input type="text" class="form-control" name="nama_masjid" placeholder="Nama Masjid" require />
							</div>
							<div class="form-group">
								<label for="alamat_masjid">Alamat Masjid*</label>
								<input type="text" class="form-control" name="alamat_masjid" placeholder="Alamat Masjid" require />
							</div>
							<div class="form-row">
								<div class="col-lg-6 col-sm-6">
									<label for="periode_masjid1">Periode Awal*</label>
									<input type="date" class="form-control" name="periode_masjid1" require />
								</div>
								<div class="col-lg-6 col-sm-6">
									<label for="periode_masjid2">Periode Akhir*</label>
									<input type="date" class="form-control" name="periode_masjid2" require />
								</div>
							</div>
							<div class="form-group mt-3">
								<label for="exampleFormControlFile1">Masukkan Gambar</label>
								<input type="file" class="form-control-file" id="exampleFormControlFile1" require />
								<input type="file" class="form-control-file mt-2" id="exampleFormControlFile1" />
								<input type="file" class="form-control-file mt-2" id="exampleFormControlFile1" />
							</div>
							<div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control" rows="5"></textarea>
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

	<div id="modalEdit" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog1 modal-lg">

			<div class="modal-content modal-content1">
				<div class="modal-header">
					<a href="" style="background-color: #fff; padding: 10px; font-size:14px; position: relative; border-radius: 5px;" class="small shadow-sm text-muted" data-dismiss="modal"><i class="fa fa-angle-left"></i> Kembali</a>
				</div>
				<div class="modal-body">
					<div class="card-body">
						<form action="" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama_masjid">Nama Masjid*</label>
								<input type="text" class="form-control" name="nama_masjid" placeholder="Nama Masjid" value="Masjid Agung Demak" require />
							</div>
							<div class="form-group">
								<label for="alamat_masjid">Alamat Masjid*</label>
								<input type="text" class="form-control" name="alamat_masjid" placeholder="Alamat Masjid" value="Jalan Sukowati no 11 Km. 1" require />
							</div>
							<div class="form-row">
								<div class="col-lg-6 col-sm-6">
									<label for="periode_masjid1">Periode Awal*</label>
									<input type="date" class="form-control" name="periode_masjid1" require />
								</div>
								<div class="col-lg-6 col-sm-6">
									<label for="periode_masjid2">Periode Akhir*</label>
									<input type="date" class="form-control" name="periode_masjid2" require />
								</div>
							</div>
							<div class="form-group mt-3">
								<label for="exampleFormControlFile1">Masukkan Gambar</label>
								<input type="file" class="form-control-file" id="exampleFormControlFile1" require />
								<input type="file" class="form-control-file mt-2" id="exampleFormControlFile1" />
								<input type="file" class="form-control-file mt-2" id="exampleFormControlFile1" />
							</div>
							<div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control" rows="5">SEDEKAHKU adalah aplikasi yang dibuat untuk memudahkan seseorang untuk memberi bantuan. Ini adalah contoh Keterangan Singkat</textarea>
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

	<?php $this->load->view("admin/_partials/footer.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

</body>

</html>