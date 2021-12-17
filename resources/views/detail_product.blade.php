@extends('layouts.app')

@section('content')
	<div id="colorlib-main">
		<div class="colorlib-about">
			<div class="colorlib-narrow-content">
				<div class="row d-flex">
					<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box mx-auto p-2 bd-highlight" data-animate-effect="fadeInLeft">
						<a href="/product"><button type="button" class="btn btn-primary btn-learn">Back</button></a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url({{ asset( 'admin_assets/images/Products/' . $detail_product->product_image) }});">
						</div>
					</div>
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<div class="about-desc">
							<span class="heading-meta">{{ $detail_product->tag->tag_name }}</span>
							<h2 class="colorlib-heading">{{ $detail_product->product_name }}</h2>
							<h6  class="heading-meta">{{ $detail_product->product_price }}</h6>
							<p>{{ $detail_product->product_desc }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection