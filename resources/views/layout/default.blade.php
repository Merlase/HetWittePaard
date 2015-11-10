<!DOCTYPE html>

<html lang="nl">
	<head>
		<meta charset="UTF-8">

		<title>Science connect</title>

		<link href="{!! asset('/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
        <link href="{!! asset('/css/main.css') !!}" rel="stylesheet" type="text/css">
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
		      		<a class="navbar-brand" href="#"><img src="{!! asset('/img/sc-headerlogo-wit.png') !!}" alt="" class="img-responsive" height="50px" width="225px;"></a>
		    	</div>

		    	<!-- Collect the nav links, forms, and other content for toggling -->
		    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      		<ul class="nav navbar-nav">
		      		</ul>
		      	<form class="navbar-form navbar-left" role="search">
		        
		      	</form>
		      	<ul class="nav navbar-nav navbar-right">
		        	<li class="dropdown">
			          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Roeland Kok <span class="caret"></span></a>
			          	<ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li role="separator" class="divider"></li>
			            	<li><a href="#">Separated link</a></li>
			          	</ul>
		        	</li>
		        	<li class="dropdown">
			          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span></a>
			          	<ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li role="separator" class="divider"></li>
			            	<li><a href="#">Separated link</a></li>
			          	</ul>
		        	</li>
		      	</ul>
		        	
		    	</div><!-- /.navbar-collapse -->
		 	</div><!-- /.container-fluid -->
		</nav>
		<div class="container">
			@yield('header')
			
			@yield('content')

			@yield('footer')
		</div>
		<script src="{!! asset('/js/jquery-1.11.3.min.js') !!}"></script>
        <script src="{!! asset('/js/bootstrap.min.js') !!}"></script>
	</body>

</html>