<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>SMK BINA INSAN SIAK HULU</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="/aplikasi_ppdb/assets/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" media="all" href="/aplikasi_ppdb/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" media="all" href="/aplikasi_ppdb/assets/vendor/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" media="all" href="/aplikasi_ppdb/assets/vendor/font-awesome/css/font-awesome.css.map">
	<link rel="stylesheet" media="all" href="/aplikasi_ppdb/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" media="all" href="/aplikasi_ppdb/assets/vendor/bootstrap-social/bootstrap-social.css">

	<link rel="stylesheet" media="all" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<!-- css baru  -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css" />
<link rel="stylesheet" href="css/flexslider.css" />
<link rel="stylesheet" href="css/custom-styles.css">

<!-- Icon -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- js -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.custom.js"></script>
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style><style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>
</head>
<body>

	<header id="header">
		<div class="container">
			<div class="menu-trigger"></div>
			<nav id="menu">
				<!-- untuk side kiri -->
				<ul>	
					<!-- <li><a href="/aplikasi_ppdb/ro-index/images/smklogo.jpg">Panduan</a></li> -->
					<li><a href="Beranda">Beranda</a></li>
					<li><a href="daftar">Daftar</a></li>
					<li><a href="informasi">Profil Sekolah</a></li>
					<li><a href="pengumuman-kelulusan">Pengumuman</a></li>
					<li><a href="bukti-pendaftaran">Bukti Pendaftaran</a></p></li>
					<li>
						<div class="dropdown">
					 		<span><a href="#">Cetak</a></span>
					  			<div class="dropdown-content">
									<p><a href="bukti-pendaftaran">Bukti Pendaftaran</a></p>
            						<p><a href="kartu-peserta">Kartu Peserta</a></p>
					  			</div>
						</div>

					</li>


					<!-- <li><a href="#">Cetak</a></li> -->
					<li><a href="../ro-admin/ro-login.php">Login</a></li>
   				</ul>
			</nav>
			<!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-print fa-fw"></i>Print<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="bukti-pendaftaran">Bukti Pendaftaran</a></li>
            <li><a href="kartu-peserta">Kartu Peserta</a></li>
          </ul>
        </li> -->
			<!-- / navigation -->
		</div>
		<!-- / container -->
	
	</header>
	<!-- / header -->
	
	<div class="slider">
		<ul class="bxslider">
			<li>
				<!-- / content -->
			</li>
		</ul>
		<div ></div>
	</div>
	
	<section class="posts">
		<div class="container">
			<!-- membuat pemanggilan halaman  -->
			<?php
			include '../ro-databases/koneksi.php';
//main page
$page=(isset($_GET['halaman']))?$_GET['halaman']:"main";
switch($page) {
case'tutup':include"ro-tutup-pendaftaran.php";break;
case'panduan':include"ro-panduan.php";break;
case'informasi':include"ro-informasi.php";break;
case'pengumuman':include"ro-tutup-pengumuman.php";break;
case 'daftar':include"ro-daftar.php";break;
case 'bukti-pendaftaran':include"ro-print-pendaftaran.php";break;
case 'kartu-peserta':include"ro-print-kartu.php";break;
case 'pengumuman-kelulusan':include"ro-print-pengumuman.php";break;
case'beranda':include"ro-depan.php";break;

case 'main':
default:include"ro-depan.php";
}
?>
			<!-- batas visi misi  -->
		</div>
		<!-- / container -->
	</section>

	<!-- <section class="news">
		<div class="container">
			<h2>Latest news</h2>
			<article> -->
				<!-- <div class="pic"><img src="images/1.png" alt=""></div> -->
				<!-- <div class="info">
					<h4>Omnis iste natus error sit voluptatem accusantium </h4>
					<p class="date">14 APR 2014, Jason Bang</p>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores (...)</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<article> -->
				<!-- <div class="pic"><img src="images/1_1.png" alt=""></div> -->
				<!-- <div class="info">
					<h4>Omnis iste natus error sit voluptatem accusantium </h4>
					<p class="date">14 APR 2014, Jason Bang</p>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores (...)</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<div class="btn-holder">
				<a class="btn" href="#">See archival news</a>
			</div>
		</div> -->
		<!-- / container -->
	<!-- </section> -->

	<!-- <section class="events">
		<div class="container">
			<h2>Upcoming events</h2>
			<article>
				<div class="current-date">
					<p>April</p>
					<p class="date">15</p>
				</div>
				<dinstagramiv class="info">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<article>
				<div class="current-date">
					<p>April</p>
					<p class="date">17</p>
				</div>
				<div class="info">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<article>
				<div class="current-date">
					<p>April</p>
					<p class="date">25</p>
				</div>
				<div class="info">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<article>
				<div class="current-date">
					<p>April</p>
					<p class="date">29</p>
				</div>
				<div class="info">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<div class="btn-holder">
				<a class="btn blue" href="#">See all upcoming events</a>
			</div>
		</div> 
	</section>-->
<!-- 	
	<div class="container">
		<a href="#fancy" class="info-request">
			<span class="holder">
				<span class="title">Request information</span>
				<span class="text">Do you have some questions? Fill the form and get an answer!</span>
			</span>
			<span class="arrow"></span>
		</a>
	</div> -->

	<footer id="footer">
		<div class="container">
			<section>
				<article class="col-3">
					<h3></h3>
					<ul>
						<!-- <li class="address"><a href="#">151 W Adams St<br>Detroit, MI 48226</a></li>
						<li class="mail"><a href="#">contact@harrisonuniversity.com</a></li>
						<li class="phone last"><a href="#">(971) 536 845 924</a></li> -->
					</ul>
				</article>

				<article class="col-1">
					<h3>Kontak</h3>
					<ul>
						<li class="address"><a href="https://goo.gl/maps/7C5tVvd9MqEZKqaK9">
														Jalan raya pasir putih, gang muslim / gang rezeki,
														desa baru, kecamatan siak hulu, kampar, riau</a></li>
					</ul>

				</article>
				<!-- <article class="col-2">
					<h3>Forum topics</h3>
					<ul>
						<li><a href="#">Omnis iste natus error sit</a></li>
						<li><a href="#">Nam libero tempore cum soluta</a></li>
						<li><a href="#">Totam rem aperiam eaque </a></li>
						<li><a href="#">Ipsa quae ab illo inventore veritatis </a></li>
						<li class="last"><a href="#">Architecto beatae vitae dicta sunt </a></li>
					</ul>
				</article> -->
				
				<article class="col-3">
					<h3>Sosial media</h3>
					<ul>
						<li class="WhatsApp.com"><a href="https://wa.me/6281363504958">
													  WhatsApp</a></li>
						<li class="facebook"><a href="https://www.facebook.com/Akuntansi-Dan-Keuangan-
													  Lembaga-Smk-Bina-Insan-Siak-Hulu-2026687517609073">
													  Facebook</a></li>
						<li class="instagram"><a href="https://www.instagram.com/smkbinainsan.sch.id/?hl=id">
													  Instagram</a></li>
						<li class="youtube.com"><a href="https://www.youtube.com/channel/UCdxdNFiC1nQXOWFGUusFZIw?app=desktop">
													  Youtube</a></li>							  									  
						<!-- <li class="twitter"><a href="#">Twitter</a></li> -->
						<!-- <li class="pinterest"><a href="#">Pinterest</a></li> -->
					</ul>
				</article>

				<article class="col-3">
					<h3></h3>
					<ul>
						<!-- <li class="address"><a href="#">151 W Adams St<br>Detroit, MI 48226</a></li>
						<li class="mail"><a href="#">contact@harrisonuniversity.com</a></li>
						<li class="phone last"><a href="#">(971) 536 845 924</a></li> -->
					</ul>
				</article>
				
			</section>
			<p class="copy">Copyright 2022 Akuntansi Dan Keuangan Lembaga SMK Bina Insan Siak Hulu</a>
			</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	<div id="fancy">
		<h2>Request information</h2>
		<form action="#">
			<div class="left">
				<fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
				<fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
				<fieldset class="subject"><select><option>Choose subject...</option><option>Choose subject...</option><option>Choose subject...</option></select></fieldset>
			</div>
			<div class="right">
				<fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
			</div>
			<div class="btn-holder">
				<button class="btn blue" type="submit">Send request</button>
			</div>
		</form>
	</div>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<!-- <link rel="stylesheet" media="all" href="/aplikasi_ppdb/assets/vendor/bootstrap/css/bootstrap.css"> -->
	<script src="/aplikasi_ppdb/assets/vendor/bootstrap/js/bootstrap.js"></script>
	<script src="/aplikasi_ppdb/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
