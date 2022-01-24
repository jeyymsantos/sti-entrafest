@extends('layouts.master')

@section('style')
    <link rel= "stylesheet" href="Egames.css">
@endsection

@section('content')
	<div class= "con">
	<H1>ENTRAFEST 2021</H1>
	<div class="container">
		<div class="row">
			<div class="col col-md-4">
				<H2>Competitors</H2>
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="ML2.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="VALORANT2.JPG" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="COD2.JPG" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="dota2.JPG" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="lol2.JPG" class="d-block w-100" alt="...">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

		<div class="col col-md-6">
			<div class="row">
			<div class="row align-self-center">
		<div class="col-md-2"></div>
	
		<div class="col-md-4">
			<a href = "ml"> <img src="ML.jpg" alt="ml"></a>
		</div>
		
		<div class="col-md-4">
			<a href = "cod"><img src="COD.jpg" alt="cod"></a>
		</div>
		
		<div class="col-md-1">
			<a href = "lol"><img src="LOL.png" alt="lol"></a>
		</div>
		
		<div class="col-md-2"></div>
		
		
		<div class="col-md-1"></div>
	</div>
	
	<div class="row align-self-center">
		<div class="col-md-4"></div>
		
		<div class="col-md-3">
		<a href = "dota"><img src="DOTA.png" alt="dota"></a>
		</div>
		
		<div class="col-md-2"></div>

		<div class="col-md-1"></div>


		<div class="col-md-1">
		<a href = "valo"><img src="Valorant.jpg" alt="val"></a>
		</div>
		
		<div class="col-md-1"></div>
		
	</div>
			</div>
			<div class="row">
				
			</div>
			<div class="row">
				
			</div>
		</div>

		</div>
	</div>
		
		<div class="leftImage">
			<div> <img src = "Fire.png"></div>
			<div> <img src = "Lightning.png"></div>
			<div> <img src = "Water.png"></div>
		</div>
		
		<div class="rightImage">
			<div> <img src = "Ice.png"></div>
			<div> <img src = "Earth.png"></div>
			<div> <img src = "Wind.png"></div>
		</div>
</div>		
	
	
@endsection