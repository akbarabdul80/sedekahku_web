<!DOCTYPE html>
<html lang="id">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body>

	<header>
		<?php $this->load->view("admin/_partials/header.php") ?>

	</header>

	<?php $this->load->view("admin/_partials/topbar.php") ?>


	<div id="modalDonasi" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog1 modal-lg">

			<div class="modal-content modal-content1">
				<div class="modal-header">
					<h4 class="modal-title" style="float:left">Detail Hasil Donasi</h4>
					<button type="button" class="close" data-dismiss="modal" style="z-index: 999">&times;</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<span class="text-muted">Donatur</span>
							<h5>100</h5>
						</div>
						<div class="col-md-4 col-sm-6">
							<span class="text-muted">Jumlah Masjid</span>
							<h5>11</h5>
						</div>
						<div class="col-md-4 col-sm-6">
							<span class="text-muted">Jumlah Dana</span>
							<h5>Rp. 125.000.000</h5>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Download</button>
				</div>
			</div>

		</div>
	</div>

	<div id="modalSedekah" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog1 modal-lg">
			<div class="modal-content modal-content1">
				<div class="modal-header">
					<h4 class="modal-title" style="float:left">Detail Hasil Donasi</h4>
					<button type="button" class="close" data-dismiss="modal" style="z-index: 999">&times;</button>
				</div>
				<div class="modal-body">
					<h4 class="text-center">MAKANAN</h4>
					<div class="row text-center">
						<div class="col-md-4 col-sm-6">
							<span class="text-muted">Nasi Box Besar</span>
							<h5>100</h5>
						</div>
						<div class="col-md-4 col-sm-6">
							<span class="text-muted">Nasi Box Sedang</span>
							<h5>150</h5>
						</div>
						<div class="col-md-4 col-sm-6">
							<span class="text-muted">Nasi Box Kecil</span>
							<h5>2000</h5>
						</div>
					</div>
					<h4 class="text-center mt-3">INFAQ</h4>
					<div class="row text-center">
						<div class="col-md-6 col-sm-6">
							<span class="text-muted">Pengguna</span>
							<h5>10</h5>
						</div>
						<div class="col-md-5 col-sm-6">
							<span class="text-muted">Jumlah Dana</span>
							<h5>Rp. 100.000.00</h5>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" style="background: #1d5df9">Download</button>
				</div>
			</div>

		</div>
	</div>

	<div id="modalZakat" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog1 modal-lg">

			<div class="modal-content modal-content1">
				<div class="modal-header">
					<h4 class="modal-title" style="float:left">Detail Hasil Zakat</h4>
					<button type="button" class="close" data-dismiss="modal" style="z-index: 999">&times;</button>
				</div>
				<div class="modal-body">
					<div class="row text-center">
						<div class="col-md-4 col-sm-6">
							<span class="text-muted">Zakat Maal</span>
							<h5>Rp. 10.000</h5>
						</div>
						<div class="col-md-4 col-sm-6">
							<span class="text-muted">Zakat Fitrah</span>
							<h5>Rp. 20.000</h5>
						</div>
						<div class="col-md-4 col-sm-6">
							<span class="text-muted">Total</span>
							<h5>Rp. 30.000</h5>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" style="background: #1d5df9">Download</button>
				</div>
			</div>

		</div>
	</div>

	<div id="modalAcak" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog1 modal-lg">

			<div class="modal-content modal-content1">
				<div class="modal-header">
					<h4 class="modal-title" style="float:left">Detail Hasil Zakat</h4>
					<button type="button" class="close" data-dismiss="modal" style="z-index: 999">&times;</button>
				</div>
				<div class="modal-body">
					<div class="row text-center">
						<div class="col-md-6 col-sm-6">
							<span class="text-muted">Pengguna</span>
							<h5>10</h5>
						</div>
						<div class="col-md-5 col-sm-6">
							<span class="text-muted">Jumlah Dana</span>
							<h5>Rp. 10.000</h5>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" style="background: #1d5df9">Download</button>
				</div>
			</div>

		</div>
	</div>

	<?php $this->load->view("admin/_partials/footer.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

</body>

</html>
