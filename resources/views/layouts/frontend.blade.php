<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@200;400;600;700;900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/28b5b7d92f.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{ asset('css/application.css') }}">
        <link rel="shortcut icon" href="{{ asset('images/logo-icon.png') }}" type="image/x-icon">
        <title>@yield('page_title')</title>
    </head>
    <body>
        <div class="d-main-content">
            <div class="d-secondary-above-fold">
                <div class="header">
					<div class="d-inner-header">
						<div class="d-header-logo">
							<a href="/">
								<img src="/images/logo.png" alt="">
							</a>
						</div>
						<div class="d-header-menu">
							&nbsp;
						</div>
					</div>
				</div>
            </div>
            <div class="d-services-page">
                @yield('content')

                <div class="d-footer">
                    <div class="d-footer-main">
						<div class="footer-inner">
							{{-- <div class="d-feat-footer">
								<div class="fear-based">Want to know more about how it works? <span>Ask a question or Book a discovery call.</span></div>
								<div class="d-prom-button"><a href="https://calendly.com/avocadohive/discovery-call-30minutes">Book a Call</a></div>
							</div> --}}
							<div class="d-footer-menu">
								<ul>
									<li>Privacy Policy</li>
									<li>Terms & Conditions</li>
									<li>Contact Us</li>
								</ul>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </body>
</html>