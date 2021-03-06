@extends('layout.default')

@section('content')
<section id="hero">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>Where projects are located</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate consequatur deserunt ad eaque, harum quia, nesciunt commodi amet quod odio animi porro provident! Voluptate doloribus porro numquam, magni, expedita reprehenderit!</p>
			</div>
			<div class="col-md-4">
				<form method="post">
					<div class="form-group">
						<input id="phone" name="phone" type="tel" class="form-control" placeholder="Uw gebruikersnaam" required>
						<label for="phone">Gebruikersnaam</label>
					</div>
					<div class="form-group">
						<input id="phone" name="phone" type="tel" class="form-control" placeholder="Uw wachtwoord" required>
						<label for="phone">Wachtwoord</label>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Login">
					</div>
		        	<p class="text-muted">By clicking "Sign up for ScienceConnect", you agree to our
				        <a href="#" target="_blank">Over ons</a> and
				        <a href="#" target="_blank">test</a>.
				        <span class="js-email-notice">We will send you account related emails occasionally.</span>
			        </p>
				</form>
			</div>
		</div>
	</div>
</section>
<section id="projects">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Here are some projects</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="controls">
				  	<label>Filter:</label>

				  	<button class="filter btn btn-default" data-filter="all">Alles</button>
				  	<button class="filter btn btn-default" data-filter=".html">HTML</button>
				  	<button class="filter btn btn-default" data-filter=".php">PHP</button>

				  	<!-- <label>Sort:</label>

				  	<button class="sort" data-sort="myorder:asc">Asc</button>
				  	<button class="sort" data-sort="myorder:desc">Desc</button> -->
				</div>
			</div>
		</div>
		<div class="row">
			<div id="Container">
			  	<div class="mix html col-md-4" data-myorder="1">
			  		<a href="#">
                        <img src="http://lorempixel.com/400/300/" alt="">
                        <div class="overlay" style="background: rgba(143, 221, 115, 0.8);">
                        <div class="thumb-info">
                            <h3>HTML 5</h3>
                            <p>Development &amp; Print</p>
                        </div>
                        </div>
                    </a>
			  	</div>

			  	<div class="mix html col-md-4" data-myorder="1">
			  		<a href="#">
                        <img src="http://lorempixel.com/400/300/" alt="">
                        <div class="overlay" style="background: rgba(143, 221, 115, 0.8);">
                        <div class="thumb-info">
                            <h3>HTML 5</h3>
                            <p>Development &amp; Print</p>
                        </div>
                        </div>
                    </a>
			  	</div>

			  	<div class="mix html col-md-4" data-myorder="1">
			  		<a href="#">
                        <img src="http://lorempixel.com/400/300/" alt="">
                        <div class="overlay" style="background: rgba(143, 221, 115, 0.8);">
                        <div class="thumb-info">
                            <h3>HTML 5</h3>
                            <p>Development &amp; Print</p>
                        </div>
                        </div>
                    </a>
			  	</div>
			  	<div class="mix html col-md-4" data-myorder="1">
			  		<a href="#">
                        <img src="http://lorempixel.com/400/300/" alt="">
                        <div class="overlay" style="background: rgba(143, 221, 115, 0.8);">
                        <div class="thumb-info">
                            <h3>HTML 5</h3>
                            <p>Development &amp; Print</p>
                        </div>
                        </div>
                    </a>
			  	</div>
			  	<div class="mix php col-md-4" data-myorder="1">
			  		<a href="#">
                        <img src="http://lorempixel.com/400/300/abstract" alt="">
                        <div class="overlay" style="background: rgba(143, 221, 115, 0.8);">
                        <div class="thumb-info">
                            <h3>PHP</h3>
                            <p>PHP development &amp; Print</p>
                        </div>
                        </div>
                    </a>
			  	</div>

			  	<div class="mix html col-md-4" data-myorder="1">
			  		<a href="#">
                        <img src="http://lorempixel.com/400/300/" alt="">
                        <div class="overlay" style="background: rgba(143, 221, 115, 0.8);">
                        <div class="thumb-info">
                            <h3>HTML 5</h3>
                            <p>Development &amp; Print</p>
                        </div>
                        </div>
                    </a>
			  	</div>
			  	<div class="mix html col-md-4" data-myorder="1">
			  		<a href="#">
                        <img src="http://lorempixel.com/400/300/" alt="">
                        <div class="overlay" style="background: rgba(143, 221, 115, 0.8);">
                        <div class="thumb-info">
                            <h3>HTML 5</h3>
                            <p>Development &amp; Print</p>
                        </div>
                        </div>
                    </a>
			  	</div>
			  	<div class="mix php col-md-4" data-myorder="1">
			  		<a href="#">
                        <img src="http://lorempixel.com/400/300/abstract" alt="">
                        <div class="overlay" style="background: rgba(143, 221, 115, 0.8);">
                        <div class="thumb-info">
                            <h3>PHP</h3>
                            <p>PHP development &amp; Print</p>
                        </div>
                        </div>
                    </a>
			  	</div>
			  	<div class="mix php col-md-4" data-myorder="1">
			  		<a href="#">
                        <img src="http://lorempixel.com/400/300/abstract" alt="">
                        <div class="overlay" style="background: rgba(143, 221, 115, 0.8);">
                        <div class="thumb-info">
                            <h3>PHP</h3>
                            <p>PHP development &amp; Print</p>
                        </div>
                        </div>
                    </a>
			  	</div>

			  <div class="gap"></div>
			  <div class="gap"></div>
			</div>
		</div>
	</div>
</section>
<section id='usp'>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3>Waarom kies je voor Science connect</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 items">

				<div class="col-md-6">
					<div class="media">
	  					<div class="media-left media-middle">
		    				<a href="#">
		      					<i class="fa fa-code"></i>
		    				</a>
	  					</div>
	  					<div class="media-body">
	    					<h4 class="media-heading">Show off your code</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	  					</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="media">
	  					<div class="media-left media-middle">
		    				<a href="#">
		      					<i class="fa fa-coffee"></i>
		    				</a>
	  					</div>
	  					<div class="media-body">
	    					<h4 class="media-heading">Show off your code</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	  					</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="media">
	  					<div class="media-left media-middle">
		    				<a href="#">
		      					<i class="fa fa-coffee"></i>
		    				</a>
	  					</div>
	  					<div class="media-body">
	    					<h4 class="media-heading">Show off your code</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	  					</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="media">
	  					<div class="media-left media-middle">
		    				<a href="#">
		      					<i class="fa fa-users"></i>
		    				</a>
	  					</div>
	  					<div class="media-body">
	    					<h4 class="media-heading">Show off your code</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	  					</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="media">
	  					<div class="media-left media-middle">
		    				<a href="#">
		      					<i class="fa fa-code"></i>
		    				</a>
	  					</div>
	  					<div class="media-body">
	    					<h4 class="media-heading">Show off your code</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	  					</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="media">
	  					<div class="media-left media-middle">
		    				<a href="#">
		      					<i class="fa fa-code"></i>
		    				</a>
	  					</div>
	  					<div class="media-body">
	    					<h4 class="media-heading">Show off your code</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	  					</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
@stop


@section('footer')
<footer>
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>dit is deze ding test</h3>
                </div>
                <div class="col-md-3">
                    <h3>dit is deze ding test</h3>
                </div>
                <div class="col-md-3">
                    <h3>dit is deze ding test</h3>
                </div>
                <div class="col-md-3">
                    <h3>dit is deze ding test</h3>
                </div>
            </div>
        </div>
    </section>
</footer>
@stop