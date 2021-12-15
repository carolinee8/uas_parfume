<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo"><a href="brand">Parfume</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-{{ ($active === "brand") ? 'active' : '' }}"><a href="brand">Brand</a></li>
					<li class="colorlib-{{ ($active === "product") ? 'active' : '' }}"><a href="product">Product</a></li>
					<li class="colorlib-{{ ($active === "acara") ? 'active' : '' }}"><a href="acara">Event</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<p><small>&copy; Kelompok 2
			</div>

		</aside>

		@yield('content')
	</div>