<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bhushan Gavhale</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollzer.min.js') }}"></script>
	<script src="{{ asset('js/skel.min.js') }}"></script>
	<script src="{{ asset('js/skel-layers.min.js') }}"></script>
	<script src="{{ asset('js/init.js') }}"></script>

	<link rel="stylesheet" href="{{ asset('css/skel.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/style-wide.css') }}" />


	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div id="header" class="skel-layers-fixed">
		<div class="top">
		<!-- Logo -->
			<div id="logo">
				<span class="image avatar48"><img src="{{ asset('images/avatar.jpg') }}" alt="" /></span>
				<h1 id="title">Jane Doe</h1>
				<p>Hyperspace Engineer</p>
			</div>

			<!-- Nav -->
			<nav id="nav">
				<!--
				
					Prologue's nav expects links in one of two formats:
					
					1. Hash link (scrolls to a different section within the page)
					
					   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

					2. Standard link (sends the user to another page/site)

					   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>
				
				-->
				<ul>
					<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a></li>
					<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portfolio</span></a></li>
					<li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">About Me</span></a></li>
					<li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
				</ul>
			</nav>
						
		</div>

		<div class="bottom">
			<!-- Social Icons -->
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
				<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
			</ul>		
		</div>

	</div>

	<div id="main">
		<section id="top" class="one dark cover">
			<div class="container">

			</div>

			<footer>
				<a href="#portfolio" class="button scrolly">Magna Aliquam</a>
			</footer>
		</section>

		<!-- Portfolio -->
		<section id="portfolio" class="two">
			<div class="container">
		
				<header>
					<h2>Portfolio</h2>
				</header>
				
				<p>Vitae natoque dictum etiam semper magnis enim feugiat convallis convallis
				egestas rhoncus ridiculus in quis risus amet curabitur tempor orci penatibus.
				Tellus erat mauris ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis 
				fusce hendrerit lacus ridiculus.</p>
			
				<div class="row">
					<div class="4u">
						<article class="item">
							<a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
							<header>
								<h3>Ipsum Feugiat</h3>
							</header>
						</article>
						<article class="item">
							<a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
							<header>
								<h3>Rhoncus Semper</h3>
							</header>
						</article>
					</div>
					<div class="4u">
						<article class="item">
							<a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
							<header>
								<h3>Magna Nullam</h3>
							</header>
						</article>
						<article class="item">
							<a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
							<header>
								<h3>Natoque Vitae</h3>
							</header>
						</article>
					</div>
					<div class="4u">
						<article class="item">
							<a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
							<header>
								<h3>Dolor Penatibus</h3>
							</header>
						</article>
						<article class="item">
							<a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
							<header>
								<h3>Orci Convallis</h3>
							</header>
						</article>
					</div>
				</div>

			</div>
		</section>

		<!-- About Me -->
		<section id="about" class="three">
			<div class="container">

				<header>
					<h2>About Me</h2>
				</header>

				<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
				
				<p>Tincidunt eu elit diam magnis pretium accumsan etiam id urna. Ridiculus 
				ultricies curae quis et rhoncus velit. Lobortis elementum aliquet nec vitae 
				laoreet eget cubilia quam non etiam odio tincidunt montes. Elementum sem 
				parturient nulla quam placerat viverra mauris non cum elit tempus ullamcorper 
				dolor. Libero rutrum ut lacinia donec curae mus vel quisque sociis nec 
				ornare iaculis.</p>

			</div>
		</section>

	<!-- Contact -->
		<section id="contact" class="four">
			<div class="container">

				<header>
					<h2>Contact</h2>
				</header>

				<p>Elementum sem parturient nulla quam placerat viverra 
				mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia 
				donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc 
				orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>
				
				<form method="post" action="#">
					<div class="row 50%">
						<div class="6u"><input type="text" name="name" placeholder="Name" /></div>
						<div class="6u"><input type="text" name="email" placeholder="Email" /></div>
					</div>
					<div class="row 50%">
						<div class="12u">
							<textarea name="message" placeholder="Message"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="12u">
							<input type="submit" value="Send Message" />
						</div>
					</div>
				</form>

			</div>
		</section>
	</div>


			<!-- Footer -->
	<div id="footer">
		
		<!-- Copyright -->
			<ul class="copyright">
				<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>
		
	</div>
			
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
