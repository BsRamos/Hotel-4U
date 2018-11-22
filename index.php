<!DOCTYPE html>
<html lang="en">
<head>
<title>4u</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="public/styles/bootstrap4/bootstrap.min.css">
<link href="public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="public/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="public/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="public/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="public/styles/responsive.css">
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
								<li class="social_list_item"><a href="#https://twitter.com/?lang=pt-br"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://dribbble.com/"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://www.behance.net/"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="view/user/login.php">login</a></div>
							<div class="user_box_register user_box_link"><a href="view/user/registrar.php">registrar</a></div>
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
							<div class="logo"><a href="#"><img src="public/images/logo.png" alt="">4U</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="#">home</a></li>
								<li class="main_nav_item"><a href="/view/ini/about.php">Sobre Nós</a></li>
								<li class="main_nav_item"><a href="/view/ini/contact.php">contato</a></li>
							</ul>
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
			<div class="logo menu_logo"><a href="#"><img src="public/images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="/view/ini/about.php">sobre nós</a></li>
				<li class="menu_item"><a href="/view/ini/contact.php">contato</a></li>
			</ul>
		</div>
	</div>


	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->

		<div class="home_slider_container">

			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(public/images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>O Hotel</h1>
							<h1>4U</h1>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(public/images/acomodacoes.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>Melhores </h1>
							<h1>Acomodações 4U</h1>
						</div>
					</div>
				</div>


			</div>

			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
					11.042,18.219 "/>
				</svg>
			</div>

			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
				17.046,15.554 "/>
				</svg>
			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01</li>
					<li class="home_slider_custom_dot"><div></div>02</li>
				</ul>
			</div>

		</div>

	</div>

	<!-- Search -->

	<div class="search">


		<!-- Search Contents -->

		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Panel -->

					<div class="search_panel active">
						<form name="pesquisa" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Tipo do quarto</div>
								<select name="tQuarto" required="required" id="adults_1" class="dropdown_item_select search_input">
								<option value="0">Selecione a sua Acomodação:</option>
								<option value="1">Standart</option>
								<option value="2">Luxo</option>
								<option value="3">Ultra Luxo</option>
								</select>
							</div>
							<div class="search_item">
								<div>adultos</div>
								<select id="adults_1" name="nAdultos" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>crianças</div>
								<select id="children_1" name="numCriancas" class="dropdown_item_select search_input">
									<option>00</option>
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button" type="button" onclick="ValorEsperado()" >Orçar<span></span><span></span><span></span></button>
							<div class="search_item">
								<div>Valor</div>
								<input type="text" readonly="true" disabled class="check_in search_input" name="Valor">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
		function ValorEsperado(){
			var tipo = parseInt(document.pesquisa.tQuarto.value);
			if (document.pesquisa.tQuarto.value == 0) {
				window.alert("Informe o tipo de quarto!");
				document.pesquisa.tQuarto.value.focus();
			}
			var nadu = parseInt(document.pesquisa.nAdultos.value);
			var ncri = parseInt(document.pesquisa.numCriancas.value);
			if (tipo == 1) {
				var valor = 600 + (nadu * 50) + (ncri * 20);
				document.pesquisa.Valor.value = valor;
			}
			if (tipo == 2) {
				var valor = 1500 + (nadu * 100) + (ncri * 50);
				document.pesquisa.Valor.value = valor;
			}
			if (tipo == 3) {
				var valor = 4800 + (nadu * 200) + (ncri * 100);
				document.pesquisa.Valor.value = valor;
			}
		}
</script>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="intro_title text-center">Tenha a melhor estadia de sua vida</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
						<p>Temos três tipos distintos de acomodações, com valores que cabem no seu bolso e conforto inigualável </p>
					</div>
				</div>
			</div>
			<div class="row intro_items">

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@dnevozhai -->
						<div class="intro_item_background" style="background-image:url(public/images/op1.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">Opção 1</div>
							<div class="intro_center text-center">
								<h1>Standart</h1>
								<div class="intro_price">Por R$600,00 a diaria*</div>
								<div class="rating rating_3">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@hellolightbulb -->
						<div class="intro_item_background" style="background-image:url(public/images/op2.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">Opção 2</div>
							<div class="intro_center text-center">
								<h1>Luxo</h1>
								<div class="intro_price">Por R$1500,00 a diaria*</div>
								<div class="rating rating_5">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@willianjusten -->
						<div class="intro_item_background" style="background-image:url(public/images/op3.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">Opção 3</div>
							<div class="intro_center text-center">
								<h1>Ultra Luxo</h1>
								<div class="intro_price">Por R$4800,00 a diaria*</div>
								<div class="rating rating_5">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-4 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="public/images/logo.png" alt="">4u</a></div>
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
									<div><div class="contact_info_icon"><img src="public/images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibralta</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="public/images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">0800 555 6792</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="public/images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contato4u@gmail.com?Subject=Hello" target="_top">contato4u@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="public/images/planet-earth.svg" alt=""></div></div>
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
								<li class="footer_nav_item"><a href="#">home</a></li>
								<li class="footer_nav_item"><a href="/view/ini/about.php">Sobre nós</a></li>
								<li class="footer_nav_item"><a href="/view/ini/contact.php">contato</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="public/js/jquery-3.2.1.min.js"></script>
<script src="public/styles/bootstrap4/popper.js"></script>
<script src="public/styles/bootstrap4/bootstrap.min.js"></script>
<script src="public/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="public/plugins/easing/easing.js"></script>
<script src="public/js/custom.js"></script>

</body>

</html>
