<!DOCTYPE html>

<html lang="nl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Science connect</title>

		<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/manifest.json">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#2d89ef">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<link href="{!! asset('/css/normalize.css') !!}" rel="stylesheet" type="text/css">
		<link href="{!! asset('/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
        <link href="{!! asset('/css/main.css') !!}" rel="stylesheet" type="text/css">
		<link href="/css/admin.font.awesome.css" rel="stylesheet" type="text/css">

		<!--[if lt IE 9]>
		<script src="/js/html5shiv.min.js"></script>
		<script src="/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<nav class="navbar navbar-default">
		  	<div class="container">
		    	<!-- Brand and toggle get grouped for better mobile display -->
		   		<div class="navbar-header">
		      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        	<span class="sr-only">Toggle navigation</span>
			       		<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
		      		</button>
		      		<a href="#"><img src="{!! asset('/img/sc-headerlogo-wit.png') !!}" alt="" class="img-responsive" height="50px" width="225px;"></a>
		    	</div>

		    	<!-- Collect the nav links, forms, and other content for toggling -->
		    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      		<ul class="nav navbar-nav">
		      		</ul>
		      	<form class="navbar-form navbar-left" role="search">
		        	<div class="input-group">
		            	<input type="text" class="form-control" placeholder="Search" name="q">
		            	<div class="input-group-btn">
		                	<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
		            	</div>
		        	</div>
		        </form>
		      	<ul class="nav navbar-nav navbar-right">
		        	<li class="dropdown">
			          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
			          	<ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li role="separator" class="divider"></li>
			            	<li><a href="#">Separated link</a></li>
			          	</ul>
		        	</li>
		        	<li>
			          	<a href="#">Registeren</a>
		        	</li>
		      	</ul>

		    	</div><!-- /.navbar-collapse -->
		 	</div><!-- /.container-fluid -->
		</nav>

			@yield('header')

			@yield('content')

			@yield('footer')

		<script src="{!! asset('/js/jquery-1.11.3.min.js') !!}"></script>
        <script src="{!! asset('/js/bootstrap.min.js') !!}"></script>
        <script src="{!! asset('/js/jquery.mixitup.min.js') !!}"></script>
		<script src="{!! asset('/js/main.js') !!}"></script>
	</body>

</html>
