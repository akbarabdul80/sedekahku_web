<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<h4>Posts</h4>
				<ul>
					<li><a href="post_masjid.php">Masjid</a></li>
					<li><a href="post_artikel.php">Artikel</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-sm-6">
				<h4>Edit</h4>
				<ul>
					<li><a href="edit_tentang.php">About</a></li>
					<li><a href="edit_sosmed.php">Sosmed</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-sm-6">
				<h4>Pengaturan</h4>
				<ul>
					<li><a href="set_slide.php">Slider</a></li>
					<li><a href="set_akun.php">Akun</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-sm-6">
				<p><b>SEDEKAHKU</b> adalah aplikasi yang dibuat untuk memudahkan seseorang untuk memberi bantuan.</p>
				<a href="#" class="round"><i data-feather="twitter"></i></a>
				<a href="#" class="round"><i data-feather="linkedin"></i></a>
				<a href="#" class="round"><i data-feather="facebook"></i></a>
			</div>
		</div>
		<div class="copyright">
			<p>© Copyright 2020 Sedekahku, All Rights Reserved</p>
			<ul>
				<li><a href="tos.php">Terms of Service</a></li>
				<li><a href="privacy.php">Privacy Policy</a></li>
			</ul>
		</div>
	</div>
</footer>

<script src="<?= base_url() ?>assets/js/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/vendor/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/vendor/feather.min.js"></script>
<script src="<?= base_url() ?>assets/js/vendor/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/dummy.min.js"></script>
<script src="<?= base_url() ?>assets/js/main.js"></script>

<script src="<?= base_url() ?>assets/vendor/swiper/js/swiper.min.js"></script>

<script>
	var swiperH = new Swiper('.swiper-container-h', {
		spaceBetween: 50,
		pagination: {
			el: '.swiper-pagination-h',
			clickable: true,
		},

		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>

<!-- Page level plugins -->
<script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script>
	$(document).ready(function() {
		$('#dataTable').DataTable();
	});
</script>


<script>
	function deleteConfirm(url, id) {
		$('#btn-delete_'+id).attr('href', url);
		console.log(url);
		$('#deleteModal').modal();
	}
</script>