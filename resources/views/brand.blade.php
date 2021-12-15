@extends('layouts.app')

@section('content')

        <div id="colorlib-main">
			<aside id="colorlib-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
						@foreach ($brand as $brand)
						<li style="background-image: url({{asset('user_assets/images/img_bg_1.jpg')}});">
							<div class="overlay"></div>
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
										<div class="slider-text-inner">
											<div class="desc">
												<h1>{{ $brand->brand_judul }}</h1>
												<h2>{{ $brand->brand_desc }}</h2>
										 </div>
										</div>
									</div>
								</div>
							</div>
						</li>
						@endforeach
				   	
				   	{{-- <li style="background-image: url({{asset('user_assets/images/img_bg_2.jpg')}});">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>{{ $brand[1]->brand_judul }}</h1>
												<h2>{{ $brand[1]->brand_desc }}</h2>
												<p><a class="btn btn-primary btn-learn">View Project <i class="icon-arrow-right3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url({{asset('user_assets/images/img_bg_3.jpg')}});">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>The National Gallery</h1>
												<h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2>
												<p><a class="btn btn-primary btn-learn">View Project <i class="icon-arrow-right3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li> --}}
				  	</ul>
			  	</div>
			</aside>

			<div class="colorlib-about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url({{asset('user_assets/images/img_bg_2.jpg')}});">
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">Welcome</span>
								<h2 class="colorlib-heading">{{ $brand->brand_judul }}</h2>
								<p>{{ $brand->brand_desc }}</p>
							</div>
							<div class="row padding">
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps active">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>We are <br>pasionate</h3>
									</a>
								</div>
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Honest <br>Dependable</h3>
									</a>
								</div>
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Always <br>Improving</h3>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
{{-- 			
			<div id="colorlib-counter" class="colorlib-counters" style="background-image: url({{asset('user_assets/images/cover_bg_1.jpg')}});" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-skyline"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="150" data-speed="7000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Products</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-engineer"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="30" data-speed="7000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Employees</span>
						</div>
					</div>
				</div>
			</div> --}}

			<div id="get-in-touch" class="colorlib-bg-color">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<h2>Get to know more about our collection!</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<p class="colorlib-lead">We got a wide variety of collection. Dive right in to find the one suits you the most!</p>
							<p><a href="/product" class="btn btn-primary btn-learn">Dive here</a></p>
						</div>
						
					</div>
				</div>
			</div>
		</div>

@endsection