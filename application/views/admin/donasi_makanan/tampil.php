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
    
		<div class="alert alert-success" role="alert">Berhasil Menambahkan Dll. Pokoknya Alert :)</div>

		<div class="card mb-3">
			<div class="card-header" style="border-radius: 0!important">
				<h4 class="subtitle">Hasil Donasi Makanan<a href="<?= base_url("admin") ?>" style="background-color: #fff; padding: 10px; font-size:14px; position: relative; border-radius: 5px;" class="float-right small shadow-sm text-muted text-left"><i class="fa fa-angle-left"></i> Kembali</a> </h4>
			</div>
			<div class="card-body">

				<div class="table-responsive">
					<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>No.</th>
								<th>Username</th>
								<th>Nama Masjid</th>
								<th>Donasi</th>
								<th>Total</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<td>
									1
								</td>

								<td>
									<p class="text-secondary">listiantoid<p>
								</td>

								<td>
									Masjid Podomoro Dago
								</td>

								<td>
									<p class="text-secondary small mb-0">
										2 X Nasi Box Besar
									</p>
									<p class="text-secondary small mb-0">
										1 X Nasi Box Sedang
									</p>
									<p class="text-secondary small mb-0">
										1 X Nasi Box Kecil
									</p>
								</td>

								<td>
									Rp. 120.000
								</td>

								<td>
									<div class="badge badge-warning">Pendding</div>
									<!-- <div class="badge badge-danger">Expired</div> -->
									<!-- <div class="badge badge-success">Approve</div> -->
								</td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view("admin/_partials/footer.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

</body>

</html>