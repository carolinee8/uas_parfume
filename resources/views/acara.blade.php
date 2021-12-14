@extends('layouts.app')

@section('content')
		<div id="colorlib-main">
			<div class="colorlib-blog">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Event</span>
							<h2 class="colorlib-heading">Find Our Events</h2>
						</div>
						<div class="input-group mb-3 animate-box">
							<form action="/acara">
								<input type="text" class="form-control" placeholder="Search Acara" name="search_acara">
								<button class="btn btn-primary btn-learn" type="submit">Search</button>
							</form>
						</div>	
					</div>
					@if($acara->count())
					<div class="row">
						@foreach ($acara as $detail_acara)
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a href="/acara/{{ $detail_acara->acara_id }}" class="blog-img"><img src="https://source.unsplash.com/1200x600/?beauty" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
								<div class="desc">
									<span><small>{{ $detail_acara->created_at->diffForHumans() }} </small></span>
									<h3><a href="/acara/{{ $detail_acara->acara_id }}">{{ $detail_acara->acara_title }}</a></h3>
									<p>{{ $detail_acara->acara_excerpt }}</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					@else
					<p class="text-center" fs-4>Tidak ada acara yang ditemukan.</p>
					@endif

					<div class="row">
						<div class="col-md-12 animate-box pagination" data-animate-effect="fadeInLeft">
							{{ $acara->links() }}
						</div>
					</div>
				</div>
			</div>

		</div>

@endsection

