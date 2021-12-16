@extends('layouts.app')

@section('content')
        <div id="colorlib-main">
			<div class="colorlib-work">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Product</span>
							<h2 class="colorlib-heading">Our Products</h2>
						</div>
						<div class="input-group mb-3 animate-box">
							<div class="form-inline">
							<form action="/product">
								<input type="text" class="form-control mb-2 mr-sm-2" size="40px" placeholder="Search Product" name="search_product">
								<button class="btn btn-primary btn-learn" type="submit">Search</button>
							</form>
							</div>
						</div>	
					</div>
					@if($product->count())
					<div class="row row-bottom-padded-md">
						@foreach ($product as $detail_product)
						<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url({{ $detail_product->product_image }});">
								<div class="desc">
									<div class="con">
										<h3><a href="/product/{{ $detail_product->product_id }}">{{ $detail_product->product_name }}</a></h3>
										<span>{{ $detail_product->tag->tag_name }}</span>
										<p class="icon">
											<span><i class="icon-share3"></i></a></span>
											<span><i class="icon-heart"></i></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					@else
					<p class="text-center" fs-4>Tidak ada product yang ditemukan.</p>
					@endif

					<div class="row">
						<div class="col-md-12 animate-box pagination" data-animate-effect="fadeInLeft">
							{{ $product->links() }}
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection
