<!-- Wrapper -->
<div class="wrapper">

	<!-- Sidebar -->
	<nav class="sidebar">
		
		<!-- close sidebar menu -->
		<div class="dismiss">
			<i class="fas fa-arrow-left"></i>
		</div>
		
		<div class="logo">
			<h3><a href="brand">Parfume</a></h3>
		</div>
		<ul class="list-unstyled menu-elements">
			<li class="active">
				<a class="scroll-link-{{ ($active === "brand") ? 'active' : '' }}" href="/brand">Brand</a>
			</li>
			<li>
				<a class="scroll-link-{{ ($active === "product") ? 'active' : '' }}" href="/product">Product</a>
			</li>
			<li>
				<a class="scroll-link-{{ ($active === "acara") ? 'active' : '' }}" href="/acara">Event</a>
			</li>
		</ul>
		
		<div class="to-top">
			<a class="btn btn-primary btn-customized-3" href="#" role="button">
				<i class="fas fa-arrow-up"></i> Top
			</a>
		</div>
		
		<div class="dark-light-buttons">
			<a class="btn btn-primary btn-customized-4 btn-customized-dark" href="#" role="button">Dark</a>
			<a class="btn btn-primary btn-customized-4 btn-customized-light" href="#" role="button">Light</a>
		</div>
	
	</nav>
	<!-- End sidebar -->
	
	<!-- Dark overlay -->
	<div class="overlay"></div>

	<!-- Content -->
	<div class="content">
	
		<!-- open sidebar menu -->
		<a class="btn btn-primary btn-customized open-menu" href="#" role="button">
			<i class="fas fa-align-left"></i> <span>Menu</span>
		</a>

		@yield('content')
	</div>
</div>