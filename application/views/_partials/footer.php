<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<h4>Fitur</h4>
				<ul>
					<li><a href="#Fitur">Donasi</a></li>
					<li><a href="#Fitur">Sedekah</a></li>
					<li><a href="#Fitur">Zakat</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-sm-6">
				<h4>Kerja Sama</h4>
				<ul>
					<li><a href="#">Bank BRI</a></li>
					<li><a href="#">Bank BCA</a></li>
					<li><a href="#">POS Indonesia</a></li>
					<li><a href="#">JNE</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-sm-6">
				<h4>Tentang Kami</h4>
				<ul>
					<li><a href="tentang.php">About</a></li>
					<li><a href="team.php">Team</a></li>
					<li><a href="kontak.php">Contacts</a></li>
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
	$(window).scroll(function() {
		if ($(this).scrollTop() > 200){  
			$('header').addClass("sticky-top");
			$('nav').addClass("slide-down");
		}
		else if ($(this).scrollTop() < 200){  
			$('header').removeClass("sticky-top");
			$('nav').removeClass("slide-down");
		}
	});

	$(".vertical-center").slick({
		dots: true,
		vertical: false,
		autoplay : true
	});

	$(".regular").slick({

			  // normal options...
			  infinite: false,

			  // the magic
			  responsive: [{

			  	breakpoint: 2000,
			  	settings: {
			  		slidesToShow: 3,
			  		slidesToScroll: 1,
			  		infinite: true,
			  		centerMode : true,
			  		dots:true
			  	}

			  }, {

			  	breakpoint: 720,
			  	settings: {
			  		slidesToShow: 1,
			  		dots: true
			  	}

			  }, {

			  	breakpoint: 300,
			      settings: "unslick" // destroys slick

			  }]
			});

		</script>

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