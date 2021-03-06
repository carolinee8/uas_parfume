<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Welcome!</h2>
				</div>
			</div>
			@if(session()->has('loginError'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					{{ session('loginError') }}
				</div>
			@endif
			
			@if(session()->has('success'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				{{ session('success') }}
			</div>
			@endif

			@if(session()->has('delete'))
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				{{ session('delete') }}
			</div>
			@endif
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url({{ asset('admin_assets/images/bg-1.jpg') }});"></div>
						<div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3>Admin,</h3>
                                    <h6 class="mb-4">Please Log In</h6>
                                </div>
                            </div>
							<form action="/login" method="post" class="signin-form">
								@csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" required value="{{ old('username') }}">
									@error('username')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login In</button>
                                </div>
		                    </form>
		                    <p class="text-center">Not a member? <a data-toggle="tab" href="/register">Register Here!</a></p>
		                </div>
		            </div>
			    </div>
		    </div>
        </div>
    </section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>