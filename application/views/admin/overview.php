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
		<div class="modal-dialog modal-dialog1">

			<div class="modal-content modal-content1">
				<div class="modal-header">
					<h4 class="modal-title" style="float:left">Hasil Donasi</h4>
					<button type="button" class="close" data-dismiss="modal" style="z-index: 999">&times;</button>
				</div>
				<div class="modal-body" style="background: #f1f1f1">
					<div class="team" style="margin: -65px 0;">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<a href="<?= base_url("admin/donasi_makanan") ?>">
										<div class="item">
											<img src="assets/img/icon/food.png" alt="avatar">
											<h5>Makanan</h5>
										</div>
									</a>
								</div>
								<div class="col-lg-6 col-sm-6">
									<a href="<?= base_url("admin/donasi_infaq") ?>">
										<div class="item">
											<img src="assets/img/icon/infaq.png" alt="avatar">
											<h5>Infaq</h5>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="modalAcak" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog1">

			<div class="modal-content modal-content1">
				<div class="modal-header">
					<h4 class="modal-title" style="float:left">Hasil Acak</h4>
					<button type="button" class="close" data-dismiss="modal" style="z-index: 999">&times;</button>
				</div>
				<div class="modal-body" style="background: #f1f1f1">
					<div class="team" style="margin: -65px 0;">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<a href="<?= base_url("admin/acak_makanan") ?>">
										<div class="item">
											<img src="<?= base_url() ?>assets/img/icon/food.png" alt="avatar">
											<h5>Makanan</h5>
										</div>
									</a>
								</div>
								<div class="col-lg-6 col-sm-6">
									<a href="<?= base_url("admin/acak_infaq") ?>">
										<div class="item">
											<img src="<?= base_url() ?>assets/img/icon/infaq.png" alt="avatar">
											<h5>Infaq</h5>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="modalZakat" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog1">

			<div class="modal-content modal-content1">
				<div class="modal-header">
					<h4 class="modal-title" style="float:left">Hasil Zakat</h4>
					<button type="button" class="close" data-dismiss="modal" style="z-index: 999">&times;</button>
				</div>
				<div class="modal-body" style="background: #f1f1f1">
					<div class="team" style="margin: -65px 0;">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<a href="<?= base_url("admin/zakat_maal") ?>">
										<div class="item">
											<img src="<?= base_url() ?>assets/img/icon/maal.png" alt="avatar">
											<h5>Maal</h5>
										</div>
									</a>
								</div>
								<div class="col-lg-6 col-sm-6">
									<a href="<?= base_url("admin/zakat_fitrah") ?>">
										<div class="item">
											<img src="<?= base_url() ?>assets/img/icon/fitrah.png" alt="avatar">
											<h5>Fitrah</h5>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<?php $this->load->view("admin/_partials/footer.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

</body>

</html>