<meta charset="utf-8">
<title>Sedekahku</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="<?= base_url() ?>assets/img/favicon.png" type="image/png" rel="icon">

<link href="<?= base_url() ?>assets/css/lib/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="<?= base_url() ?>assets/css/dummy.css" type="text/css" rel="stylesheet">
<link href="<?= base_url() ?>assets/css/style.css" type="text/css" rel="stylesheet">
<link href="<?= base_url() ?>assets/css/new/style.css" type="text/css" rel="stylesheet">
<link href="<?= base_url() ?>assets/css/custom.css" type="text/css" rel="stylesheet">

<link href="<?= base_url() ?>assets/vendor/swiper/css/swiper.min.css" rel="stylesheet">
<link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.css" rel="stylesheet">
<link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="<?= base_url() ?>assets/js/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/vendor/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/vendor/feather.min.js"></script>
<script src="<?= base_url() ?>assets/js/vendor/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/dummy.min.js"></script>
<script src="<?= base_url() ?>assets/js/main.js"></script>

<script src="<?= base_url() ?>assets/vendor/swiper/js/swiper.min.js"></script>

<script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

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
        $('#dataTable').DataTable();
	});
</script>