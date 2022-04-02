<!DOCTYPE HTML>
<html>
	<head>
		<title>FAMAL</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>¿Que es un malware?</h1>
						<p> Esto significa que el software está diseñado y creado para causar daño a un dispositivo o a su usuario. Es un término general usado para clasificar archivos o software que causan daños una vez que entran en su sistema.</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="{{route('index')}}" class="logo">FAMAL</a>
					</header>
<!-- Nav -->
<nav id="nav">
    <ul class="links">
        <li class="{{Route:: is('index') ?: 'active'}}"><a href="{{route('index')}}">TIPOS</a></li>
        <li class="{{Route:: is('generic') ?: 'active'}}"><a href="{{route('generic')}}">MAS INFORMACION</a></li>
        
    </ul>
    <ul class="icons">
 
        <li><a href="https://www.facebook.com/Estefanycg01/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
        <li><a href="https://www.instagram.com/_anny.xd/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
		<li><a href="https://github.com/fannycg06" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
      
    </ul>
</nav>
                    @yield('seccion1')
                    @yield('seccion2')
                    @yield('seccion3')

                    <!-- Footer -->
					<footer id="footer">
					
				
							<section>
								<h3>REDES SOCIALES</h3>
								<ul class="icons alt">

									<li><a href="https://www.facebook.com/Estefanycg01/" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/_anny.xd/" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="https://github.com/fannycg06" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>
            </div>
    </body>
</html>
