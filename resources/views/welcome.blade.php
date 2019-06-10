<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="GERABAH (Gerakan Ramadhan Berkah) - Mari Sedekah di Bulan Berkah">
	<meta name="keywords" content="Charity Website, Donasi, Ramadhan, Pahala">
	<meta name="author" content="Dimas Hermawan">
	<meta name="copyright" content="iamhermawan.Com [dimas9c3@gmail.com]">
	<meta name="robots" content="index, archive, follow, noodp">
	<meta name="googlebot" content="index,archive,follow,noodp">
	<meta name="msnbot" content="all,index,follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta property="og:title" content="GERABAH (Gerakan Ramadhan Berkah)">
	<meta property="og:type" content="website">
	<meta property="og:description" content="GERABAH (Gerakan Ramadhan Berkah) - Mari Sedekah di Bulan Berkah">
	<meta property="og:site_name" content="gerabah.iamhermawan.com">
	<meta property="og:url" content="http://gerabah.iamhermawan.com/">
	<meta property="og:image" content="{{ asset('frontend/img/header-bg.jpg') }}"/>
	<link rel="canonical" href="http://gerabah.iamhermawan.com/">
	<meta name="theme-color" content="#1abb9c" />
	<meta name="geo.country" content="id"/>
	<meta name="geo.placename" content="Indonesia"/>

	<title>GERABAH (Gerakan Ramadhan Berkah) | Mari Sedekah di Bulan Berkah</title>
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

	<!-- Bootstrap core CSS -->
	<link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="{{ asset('frontend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<!-- Custom styles for this template -->
	<link href="{{ asset('frontend/css/agency.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/css/custom.css') }}?version={{ mt_rand(1, 100) }}" rel="stylesheet">

	<!-- Plugins -->
	<link rel="stylesheet" href="{{ asset('plugins/wow/animate.css') }}">
	<!-- Datatables -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<!-- OWl Carousel -->
	<link rel="stylesheet" href="{{ asset('plugins/owl/assets/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/owl/assets/owl.theme.default.min.css') }}">

	<script>
		var base_url 	= '{{ url('/') }}';
		var token		= '{{ csrf_token() }}';
	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140092921-1"></script>

	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-140092921-1');
	</script>

</head>

<body id="page-top">

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">GERABAH</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#definisi">Gerabah</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#donasi">Donasi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#rundown">Rundown Acara</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#realisasi-donasi">Laporan Realisasi Donasi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#cara-donasi">Cara Donasi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#gallery">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#contact">Kontak</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->
	<header class="masthead">
		<div class="container">
			<div class="intro-text">
				<div class="intro-lead-in">Mari Sedekah di Bulan Berkah!</div>
				<div class="intro-heading text-uppercase">Gerabah</div>
				<div class="intro-lead-in">(Gerakan Ramadhan Berkah)</div>
				<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#definisi">Tell Me More</a>
			</div>
		</div>
	</header>

	<!-- Gerabah -->
	<section id="definisi" class="wow fadeInDown">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">GERABAH</h2>
					<h3 class="section-subheading text-muted">Gerakan Ramadan Berkah atau lebih kita kenal dengan istilah Gerabah merupakan program rutin yang diselenggarakan setiap bulan ramadan dengan tujuan berbagi kebahagiaan dan memberikan manfaat untuk lingkungan sekitar.</h3>
					<p class="mt-1 mb-1">هَلْ جَزَاءُ الْإِحْسَانِ إِلَّا الْإِحْسَانُ</p>
					<h3 class="section-subheading text-muted">“Tidak ada balasan kebaikan kecuali kebaikan (pula).” (QS. Ar-Rahman: 60) dan Dari Zaid bin Khalid Al-Juhani radhiyallahu ‘anhu, ia berkata bahwa Rasulullah shallallahu ‘alaihi wa sallam bersabda,</h3>		
					<p class="mt-1 mb-1">مَنْ فَطَّرَ صَائِمًا كَانَ لَهُ مِثْلُ أَجْرِهِ غَيْرَ أَنَّهُ لاَ يَنْقُصُ مِنْ أَجْرِ الصَّائِمِ شَيْئًا</p>
					<h3 class="section-subheading text-muted">“Siapa memberi makan orang yang berpuasa, maka baginya pahala seperti orang yang berpuasa tersebut, tanpa mengurangi pahala orang yang berpuasa itu sedikit pun juga.” (HR. Tirmidzi no. 807, Ibnu Majah no. 1746, dan Ahmad 5: 192. Al-Hafizh Abu Thahir mengatakan bahwa hadits ini shahih) Tidak pernah salah membagikan kebaikan dan kebahagiaan kepada orang lain sekecil apapun itu. Maka dari itu, Gerabah mengajak teman-teman semua, mari kita berbagi :)</h3>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-4">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-green-custom"></i>
						<i class="fas fa-history fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Latar Belakang</h4>
					<p class="text-muted">Program berbagi ini sudah terselenggara sejak tahun 2014, terhitung 6 tahun sampai saat ini. Sedikit bercerita tentang awal mula adanya program Gerabah ini yaitu adanya program Jumat Berbagi.. <a href="#" data-toggle='modal' data-target='#modal-latar-belakang'>Read More</a></p>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-green-custom"></i>
						<i class="fas fa-hand-holding-usd fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Pengumpulan Donasi</h4>
					<p class="text-muted">Pengumpulan donasi dikelola secara sukarela oleh teman kami, Anda dapat memantau perkembangan pengumpulan donasi melalui website ini. Adapun cara memberi donasi bisa Anda lihat dengan mengklik <a class="js-scroll-trigger" href='#cara-donasi'>link</a> ini.</p>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-4x">
						<i class="fas fa-circle fa-stack-2x text-green-custom"></i>
						<i class="fas fa-people-carry fa-stack-1x fa-inverse"></i>
					</span>
					<h4 class="service-heading">Pelaksanaan Kegiatan</h4>
					<p class="text-muted">Gerabah yang awalnya hanya berbagi nasi bungkus yang dananya diperoleh dari iuran sebagian uang saku anak  SMA, sekarang Gerabah sudah mulai bisa membantu untuk kegiatan lain. Beberapa program.. <a href="#" data-toggle='modal' data-target='#modal-pelaksanaan-kegiatan'>Read More</a></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Donasi Grid -->
	<section class="bg-light mt-0 wow fadeInDown" id="donasi">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Donasi</h2>
					<h3 class="section-subheading text-muted mb-3">Berikut adalah update donasi yang telah masuk pada kami.</h3>
					<div class="alert alert-warning mt-0" role="alert">
						<h4>Info</h4>
						<p>Kami membuka donasi sampai hari Jumat tanggal 31 Mei 2019.</p>
						<p>Untuk hari pelaksanaan kegiatan InsyaAllah akan dilaksanakan pada hari Minggu tanggal 2 Juni 2019.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="table-responsive">
						<table class="table table-striped table-bordered" id="table-donasi">
							<thead>
								<th>No</th>
								<th>Tanggal</th>
								<th>Donatur</th>
								<th>Jumlah Donasi</th>
							</thead>
							<tbody>
								
							</tbody>
							<tfoot>
								<tr>
									<td colspan="3">Total Donasi</td>
									<td id="table-foot"></td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Rundown -->
	<section class="bg-light mt-0 wow fadeInDown" id="rundown">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Rundown Acara</h2>
					<h3 class="section-subheading text-muted mb-3">Adapun rundown acara pelaksanaan kegiatan yang Insyaallah akan dilaksanakan Minggu, 2 Juni 2019, adalah sebagai berikut.</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="table-responsive">
						<table class="table table-striped table-bordered" id="table-donasi">
							<thead>
								<th>No</th>
								<th>Pukul</th>
								<th>Acara</th>
								<th>Keterangan</th>
								<th>Koordinator</th>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>15.00</td>
									<td>Panitia, perwakilan donatur berkumpul di rumah Sdri. Winda</td>
									<td><a href="https://goo.gl/maps/9ycJ83eCGxVqP2YJA" target="_blank">Klik disini untuk membuka koordinat via Google Maps</a></td>
									<td>Winda</td>
								</tr>
								<tr>
									<td>2</td>
									<td>15.00 - 15.15</td>
									<td>Sholat Ashar</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>3</td>
									<td>15.15 - 15.30</td>
									<td>Pembukaan acara dilanjutkan dengan brieffing panitia</td>
									<td></td>
									<td>Tristian</td>
								</tr>
								<tr>
									<td>4</td>
									<td>15.30 - 15.45</td>
									<td>Persiapan keberangkatan dan pembagian rute acara</td>
									<td></td>
									<td>Muchlas</td>
								</tr>
								<tr>
									<td>5</td>
									<td>15.45 - 17.00</td>
									<td>Pembagian makan dan takjil area Kartasura-Solo, dilanjutkan dengan buka bersama</td>
									<td></td>
									<td>Anggi</td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2351.7632053280736!2d110.74375053877125!3d-7.555507046773487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a14ec498b55d3%3A0xb7f6d48240c3d05d!2sJl.+Slamet+Riyadi+No.2%2C+Dusun+III%2C+Kartasura%2C+Kec.+Kartasura%2C+Kabupaten+Sukoharjo%2C+Jawa+Tengah+57169!5e0!3m2!1sen!2sid!4v1559320962714!5m2!1sen!2sid" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
					<p class="text-center mt-3">Alamat Winda</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Laporan Penggunaan Donasi -->
	<section class="bg-light mt-0 wow fadeInDown" id="realisasi-donasi">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Laporan Realisasi Anggaran</h2>
					<h3 class="section-subheading text-muted mb-3">Berikut adalah update laporan realisasi anggaran Gerabah 2019. Anda juga bisa mengundah laporan ini dalam bentuk File Excel dengan mengklik <a href="{{ route('front.download') }}">Link </a> ini.</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="table-responsive">
						<table class="table table-striped table-bordered" id="table-realisasi-anggaran">
							<thead>
								<th>No</th>
								<th>Tanggal</th>
								<th>Debet</th>
								<th>Kredit</th>
								<th>Saldo</th>
								<th>Keterangan</th>
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<h3 class="text-center mt-5">Rincian Belanja Sembako Yayasan Lentera</h3>
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<th>No</th>
								<th>Tanggal</th>
								<th>Kredit</th>
								<th>Jumlah</th>
								<th>Keterangan</th>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>31 May, 2019</td>
									<td>Rp. 33,000</td>
									<td>2</td>
									<td>Sirup Fresh</td>
								</tr>
								<tr>
									<td>2</td>
									<td>31 May, 2019</td>
									<td>Rp. 22,000</td>
									<td>2</td>
									<td>Sirup ABC</td>
								</tr>
								<tr>
									<td>3</td>
									<td>31 May, 2019</td>
									<td>Rp. 33,000</td>
									<td>2</td>
									<td>Sirup Marjan</td>
								</tr>
								<tr>
									<td>4</td>
									<td>31 May, 2019</td>
									<td>Rp. 87,000</td>
									<td>5</td>
									<td>Sarden Besar</td>
								</tr>
								<tr>
									<td>5</td>
									<td>31 May, 2019</td>
									<td>Rp. 75,000</td>
									<td>10</td>
									<td>Sarden Kecil</td>
								</tr>
								<tr>
									<td>6</td>
									<td>31 May, 2019</td>
									<td>Rp. 160,000</td>
									<td></td>
									<td>Susu Frisian Flag</td>
								</tr>
								<tr>
									<td>7</td>
									<td>31 May, 2019</td>
									<td>Rp. 83,000</td>
									<td></td>
									<td>Mie Instan (Supermie)</td>
								</tr>
								<tr>
									<td>8</td>
									<td>31 May, 2019</td>
									<td>Rp. 89,000</td>
									<td></td>
									<td>Mie Instan (Indomie)</td>
								</tr>
								<tr>
									<td>9</td>
									<td>31 May, 2019</td>
									<td>Rp. 75,000</td>
									<td>6 KG</td>
									<td>Gula Pasir</td>
								</tr>
								<tr>
									<td>10</td>
									<td>31 May, 2019</td>
									<td>Rp. 72,000</td>
									<td>6 Liter</td>
									<td>Minyak Goreng</td>
								</tr>
								<tr>
									<td>11</td>
									<td>31 May, 2019</td>
									<td>Rp. 26,000</td>
									<td></td>
									<td>Teh Gardoe</td>
								</tr>
								<tr>
									<td>12</td>
									<td>31 May, 2019</td>
									<td>Rp. 88,000</td>
									<td>4 KG</td>
									<td>Telur</td>
								</tr>
								<tr>
									<td>13</td>
									<td>31 May, 2019</td>
									<td>Rp. 565,000</td>
									<td></td>
									<td>Beras</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="2">Total</td>
									<td colspan="3">Rp. 1,408,000</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<h3 class="text-center mt-5">Rincian Belanja Alat Solat untuk Masjid</h3>
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<th>No</th>
								<th>Tanggal</th>
								<th>Kredit</th>
								<th>Jumlah</th>
								<th>Keterangan</th>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>31 May, 2019</td>
									<td>Rp. 650,000</td>
									<td>10</td>
									<td>Mukena</td>
								</tr>
								<tr>
									<td>2</td>
									<td>31 May, 2019</td>
									<td>Rp. 550,000</td>
									<td>10</td>
									<td>Sarung</td>
								</tr>
								<tr>
									<td>3</td>
									<td>31 May, 2019</td>
									<td>Rp. 600,000</td>
									<td>10</td>
									<td>Al Quran</td>
								</tr>
								
							</tbody>
							<tfoot>
								<tr>
									<td colspan="2">Total</td>
									<td colspan="3">Rp. 1,800,000</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<h3 class="text-center mt-5">Rincian Donasi untuk Pembangunan Masjid</h3>
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<th>No</th>
								<th>Tanggal</th>
								<th>Nama Masjid</th>
								<th>Jumlah Donasi</th>
								<th>Keterangan</th>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>4 June, 2019</td>
									<td>Langgar Ar Rohmah</td>
									<td>Rp. 1,000,000</td>
									<td>Ngemplak Suren, Karangduren, Sawit, Boyolali. Donasi untuk pembangunan diserahkan kepada takmir masjid</td>
								</tr>
								<tr>
									<td>2</td>
									<td>4 June, 2019</td>
									<td>Masjid Baitul Rohman</td>
									<td>Rp. 705,000</td>
									<td>Dukuh Purbayan Rt 2 / Rw 3, Desa Purbayan, Baki, Sukoharjo. Donasi untuk pembangunan diserahkan kepada takmir masjid</td>
								</tr>
								
							</tbody>
							<tfoot>
								<tr>
									<td colspan="3">Total</td>
									<td colspan="2">Rp. 1,705,000</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Cara Donasi -->
	<section id="cara-donasi" class="wow fadeInDown">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Cara Donasi</h2>
					<h3 class="section-subheading text-muted">Jika anda ingin mendonasikan uang anda kepada kami, anda bisa mengikuti langkah-langkah dibawah ini.</h3>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
					<ul class="timeline">
						<li>
							<div class="timeline-image">
								<h4>Step<br> Satu</h4>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="text-left">1. Transfer Ke Rekening Kami</h4>
								</div>
								<div class="timeline-body">
									<p class="text-muted text-left">Silahkan Transfer sejumlah nominal yang ingin anda donasikan ke rekening berikut :</p>
									<p class="text-left text-muted">
										Atas Nama 	   : <strong>Ela Kusumawati</strong><br>
										Nama Bank      : <strong>BRI</strong><br>
										Nomor Rekening : <strong>690001007713531</strong>
									</p>
									<p class="text-left text-muted mt-3">
										Atas Nama 	   : <strong>Alifa Zahra Adhyana</strong><br>
										Nama Bank      : <strong>BNI</strong><br>
										Nomor Rekening : <strong>0249659618</strong>
									</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-image">
								<h4>Step<br> Dua</h4>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="text-left">2. Konfirmasi Bukti Transfer</h4>
								</div>
								<div class="timeline-body">
									<p class="text-muted text-left">Silahkan mengkonfirmasi bukti transfer donasi yang anda lakukan sesuai nama tujuan rekening anda transfer tadi, dengan mengklik <a href="#contact" class="js-scroll-trigger">link</a> ini. (anda akan dialihkan ke aplikasi chatting Whatsaap)</p>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-image">
								<h4>Step<br> Tiga</h4>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="text-left">3. Pantau Perkembangan Donasi</h4>
								</div>
								<div class="timeline-body">
									<p class="text-muted text-left">Anda dapat memantau perkembangan pengumpulan donasi maupun laporan penggunaan dana melalui website ini maupun via <a href="https://t.me/gerabah" target="_blank">Telegram</a>. Laporan penggunaan dana akan diupdate setelah acara selesai </p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-image">
								<h4>Ayo
									<br>Mulai
									<br>Donasi!</h4>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<!-- Gallery -->
		<section id="gallery" class="wow fadeInDown">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading text-uppercase">Gallery</h2>
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="owl-carousel owl-theme">
							@foreach($Qgallery as $gallery)
								<div class="item">
									<img id="myImgGallery{{ $gallery->id }}" src="{{ asset('storage/images/gallery/gerabah2019/thumbnail/'.$gallery->file) }}" alt="{{ $gallery->caption }}" onclick="javascript:showModalGallery({{ $gallery->id}})">
									<h5 class="mt-3 text-center">{{ $gallery->caption }}</h5>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Contact -->
		<section id="contact" class="wow fadeInDown">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center mb-0">
						<h2 class="section-heading text-uppercase">Kontak & Rekening Kami</h2>
						<h3 class="section-subheading text-muted text-primary">Untuk Informasi Lebih Lanjut Silahkan Chat Kami Dengan Mengklik Tombol dibawah Ini.</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<form id="contactForm" name="sentMessage" novalidate="novalidate">
							<div class="row">
								<div class="clearfix"></div>
								<div class="col-lg-6 text-center">
									<div id="success"></div>
									<p class="text-primary">
										Atas Nama 	   : <strong>Ela Kusumawati</strong><br>
										Nama Bank      : <strong>BRI</strong><br>
										Nomor Rekening : <strong>690001007713531</strong>

									</p>
									<a class="btn btn-primary btn-sm text-uppercase" href="https://api.whatsapp.com/send?phone=6285803650505&text=&source=&data=#" target="_blank">Chat Ela</a>

								</div>
								<div class="col-lg-6 text-center kontak-footer-2">
									<div id="success"></div>
									<p class="text-primary">
										Atas Nama 	   : <strong>Alifa Zahra Adhyana</strong><br>
										Nama Bank      : <strong>BNI</strong><br>
										Nomor Rekening : <strong>0249659618</strong>
									</p>
									<a id="sendMessageButton" class="btn btn-primary btn-sm text-uppercase" href="https://api.whatsapp.com/send?phone=62895320982395&text=&source=&data=#" target="_blank">Chat Alifa</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<span class="copyright">GERABAH - BETA VERSION. Create With <i class="fa fa-heart"></i> By <a href="https://iamhermawan.com" target="_blank">iamhermawan.com</a></span>
					</div>
					<div class="col-md-12 share-sossial-buttons">
						<ul class="list-inline social-buttons">
							<li class="list-inline-item">
								<a href="https://twitter.com/share?url=https://gerabah.iamhermawan.com&text=Mari%20Sedekah%20Di%20Bulan%20Berkah&hashtags=charity" target="_blank">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.gerabah.iamhermawan.com" target="_blank" id="fb-button">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="whatsapp://send?text=https://gerabah.iamhermawan.com">
									<i class="fab fa-whatsapp"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<!-- Portfolio Modals -->

		<!-- Modal 1 -->
		<div class="portfolio-modal modal fade" id="modal-latar-belakang" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 mx-auto">
								<div class="modal-body">
									<h4 class="text-uppercase">Latar Belakang GERABAH</h4>
									<p class="text-left">Program berbagi ini sudah terselenggara sejak tahun 2014, terhitung 6 tahun sampai saat ini. Sedikit bercerita tentang awal mula adanya program Gerabah ini yaitu adanya program Jumat Berbagi. Jumat Berbagi memiliki bentuk kegiatan berbagi nasi bungkus pada setiap hari Jumat sepulang jam sekolah selepas sholat Jumat. Kegiatan ini awalnya tercetus dari salah satu teman kelas kami, Nadia. Kegiatan yang diselenggarakan setiap hari Jumat ini awalnya hanya bisa dilaksanakan untuk lokasi di sekitar sekolah kami, SMA N 1 Kartasura saja dikarenakan keterbatasan dana yang kami kumpulkan hanya dari teman-teman satu kelas. </p>
									<p class="text-left">Kemudian, saat bulan Ramadan di tahun 2015 muncul pemikiran dari teman-teman IPA 1 "kenapa kita nggak bikin acara rutin tiap bulan puasa aja". Nah mulailah dari pemikiran ini, kami mencoba membuat program Gerabah ini dengan membuka donasi kepada pihak eksternal IPA 1. Pada tahun pertama program Gerabah (2015), Alhamdulillah bisa membagikan takjil dan nasi kotak untuk berbuka saudara-saudara pekerja jalanan di sekitar Solo dan Sukoharjo. Pada tahun kedua Gerabah (2016) hingga sekarang, Alhamdulillah donasi yang terkumpul semakin meningkat. Dengan semakin banyaknya donasi yang terkumpul, maka dari itu Gerabah juga dapat menyelenggarakan kegiatan berbagi lainnya.</p>
									<button class="btn btn-primary" data-dismiss="modal" type="button">
										<i class="fas fa-times"></i>
									Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal 2 -->
		<div class="portfolio-modal modal fade" id="modal-pelaksanaan-kegiatan" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 mx-auto">
								<div class="modal-body">
									<h4 class="text-uppercase">Pelaksanaan Kegiatan GERABAH</h4>
									<p class="text-left">Gerabah yang awalnya hanya berbagi nasi bungkus yang dananya diperoleh dari iuran sebagian uang saku anak  SMA, sekarang Gerabah sudah mulai bisa membantu untuk kegiatan lain. Beberapa program kegiatan Gerabah:</p>
									<p class="text-left">1. Membagikan takjil dan nasi kotak di jalan sekitar Solo dan Sukoharjo</p>
									<p class="text-left">2. Donasi pembangunan masjid</p>
									<p class="text-left">3. Donasi Panti Asuhan</p>
									<p class="text-left">
									Sistem dari pembagian donasi Gerabah yaitu biasanya Gerabah membagikan ±200-300 kotak nasi untuk para pekerja jalanan kemudian kelebihan dari donasi yang terkumpul akan kami salurkan diantara 2 kegiatan opsional di atas, untuk pembangunan masjid atau panti asuhan. </p>
									<button class="btn btn-primary" data-dismiss="modal" type="button">
										<i class="fas fa-times"></i>
									Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- The Modal Gallery -->
		<div id="myModalGallery" class="modalGallery">
			<span class="close">&times;</span>
			<img class="modal-contentGallery" id="modal-contentGallery">
			<div id="captionGallery"></div>
		</div>

		<!-- Bootstrap core JavaScript -->
		<script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

		<!-- Plugin JavaScript -->
		<script src="{{ asset('frontend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

		<!-- Contact form JavaScript -->
		<script src="{{ asset('frontend/js/jqBootstrapValidation.js') }}"></script>
		<script src="{{ asset('frontend/js/contact_me.js') }}"></script>

		<!-- Custom scripts for this template -->
		<script src="{{ asset('frontend/js/agency.min.js') }}"></script>
		<script src="{{ asset('js/frontend/home.js') }}?version={{ mt_rand(1, 100) }}"></script>

		<!-- Plugins -->
		<script src="{{ asset('plugins/wow/wow.min.js') }}"></script>
		<!-- Datatables -->
		<script src="{{ asset('plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
		<!-- OWL Carousel -->
		<script src="{{ asset('plugins/owl/owl.carousel.min.js') }}"></script>
		
		<!-- Init Component -->
		<script>
			init();
		</script>

	</body>

	</html>
