@extends('layouts.app')

@section('content')

	<div id="colorlib-main">

		<div class="colorlib-about">
			<div class="colorlib-narrow-content">
				<div class="row d-flex">
					<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box mx-auto p-2 bd-highlight" data-animate-effect="fadeInLeft">
						<a href="/acara"><button type="button" class="btn btn-primary btn-learn">Back</button></a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url({{ asset( 'admin_assets/images/Events/' . $detail_acara->acara_image) }});">
						</div>
					</div>
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<div class="about-desc">
							<span class="heading-meta">{{ $detail_acara->created_at->diffForHumans() }}</span>
							<h2 class="colorlib-heading">{{ $detail_acara->acara_title }}</h2>
							<p>{{ $detail_acara->acara_desc }}</p>
						</div>
					</div>
				</div>
		</div>
	</div>
	
@endsection


	