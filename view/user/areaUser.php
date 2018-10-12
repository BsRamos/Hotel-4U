<!DOCTYPE html>
<html lang="en">
<head>
<title>4u</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../public/styles/bootstrap4/bootstrap.min.css">
<link href="../../public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../public/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../../public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../../public/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../../public/styles/elements_styles.css">
<link rel="stylesheet" type="text/css" href="../../public/styles/elements_responsive.css">
<link rel="stylesheet" type="text/css" href="../../public/styles/about_styles.css">
<link rel="stylesheet" type="text/css" href="../../public/styles/about_responsive.css">

</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">0800 555 6792</div>
						<div class="social">
							<ul class="social_list">
								<li class="social_list_item"><a href="https://br.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://twitter.com/?lang=pt-br"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://dribbble.com/"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://www.behance.net/"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://br.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="user_box ml-auto">
							<div class="user_box_logout user_box_link"><a href="../../index.php">logout</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="../../public/images/logo.png" alt="">4u</a></div>
						</div>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>

						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="../../public/images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="../../index.php">home</a></li>
				<li class="menu_item"><a href="#">Sobre Nós</a></li>
				<li class="menu_item"><a href="./contact.php">contato</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="../../public/images/blog_1.jpg"></div>
		<div class="home_content">
			<div class="home_title" style="color: #2F0B3A"  >Bem Vindo(a) </div>

			<?php foreach( $lista2 as $linha ): ?>
			 <h1 style="color: #2F0B3A"><center><span style="font-weight:bold"> <?= $linha['nome'] ?> </span> </h1>
			<?php endforeach ?>
		</div>
	</div>
<br>
<br>

		<section class="banner-area align-items-center">
			<div class="banner-content col-lg-10">
				<div class="row">

					<div class="col-sm-3 text-center">
						<div class="button button_color_1 trans_200"><a href="#">Fazer reserva<span></span><span></span><span></span></a></div>
					</div>

					<div class="col-sm-4 text-center">
						<div class="button button_color_1 trans_200"><a href="#">Alterar/Cancelar reserva<span></span><span></span><span></span></a></div>
					</div>

					<div class="col-sm-3 text-center">
						<div class="button button_color_1 trans_200"><a href="#">Histórico<span></span><span></span><span></span></a></div>
					</div>

					<div class="col-sm-2 text-center">
						<div class="button button_color_1 trans_200"><a href="#">Alterar dados cadastrais<span></span><span></span><span></span></a></div>
					</div>


			</div>
			</div>
		</section>


	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-4 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="/public/images/logo.png" alt="">4u</a></div>
							</div>
							<p class="footer_about_text">Junte-se a nós</p>
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="https://br.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="https://twitter.com/?lang=pt-br"><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href="https://www.behance.net/"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-4 footer_column">
					<div class="footer_col">
						<div class="footer_title">tags</div>
						<div class="footer_content footer_tags">
							<ul class="tags_list clearfix">
								<li class="tag_item"><a href="#">design</a></li>
								<li class="tag_item"><a href="#">lazer</a></li>
								<li class="tag_item"><a href="#">luxo</a></li>
								<li class="tag_item"><a href="#">viajar</a></li>
								<li class="tag_item"><a href="#">experiências</a></li>
								<li class="tag_item"><a href="#">aventura</a></li>
								<li class="tag_item"><a href="#">fotografia</a></li>
								<li class="tag_item"><a href="#">paisagem</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-4 footer_column">
					<div class="footer_col">
						<div class="footer_title">Informações para contato</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="../../public/images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibralta</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="../../public/images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">0800 555 6792</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="../../public/images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contato4u@gmail.com?Subject=Hello" target="_top">contato4u@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="../../public/images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="#">www.4u.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="../../index.php">home</a></li>
								<li class="footer_nav_item"><a href="#">Sobre nós</a></li>
								<li class="footer_nav_item"><a href="./contact.html">contato</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="../../public/js/jquery-3.2.1.min.js"></script>
<script src="../../public/styles/bootstrap4/popper.js"></script>
<script src="../../public/styles/bootstrap4/bootstrap.min.js"></script>
<script src="../../public/plugins/greensock/TweenMax.min.js"></script>
<script src="../../public/plugins/greensock/TimelineMax.min.js"></script>
<script src="../../public/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../../public/plugins/greensock/animation.gsap.min.js"></script>
<script src="../../public/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../../public/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../../public/plugins/easing/easing.js"></script>
<script src="../../public/plugins/parallax-js-master/parallax.min.js"></script>
<script src="../../public/js/about_custom.js"></script>

</body>

</html>