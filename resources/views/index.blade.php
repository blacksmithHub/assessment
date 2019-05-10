<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Weather Checker</title>

        <!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
        <!--end::Web font -->
        
        <!--begin::Base Styles -->
		<link href="{{ asset('metronic/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="{{ asset('images/icon.png') }}" />
    </head>
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url({{ asset('images/wallpaper.jpg') }});">
				<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
                    <div class="m-login__head">
						<center>
							<h1 class="display-1" style = "color:white">
								Weather Checker
							</h1>
						</center>
					</div>
					<div class="m-login__container">
						<div class="m-login__signin">
							<br>
							<div class="form-group m-form__group">
								<div class = "m-input-icon m-input-icon--left">
									<input type = "text" id = "search" class = "form-control form-control-lg m-input" placeholder = "Search a city...">
									<span class = "m-input-icon__icon m-input-icon--left">
										<span>
											<i class = "la la-map-marker"></i>
										</span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div id = "load" class="form-group m-form__group">
						@include('data')
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
    	<!--begin::Base Scripts -->
		<script src="{{ asset('metronic/assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('metronic/assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
		<!--end::Base Scripts -->
		<script>

			$(document).ready(function(){

				$('#search').keyup(function(){

					var input = $(this).val();

					$.ajax({

						url: '/search',
						type: 'get',
						data: { city: input },
						success: function(response){

							$('#load').html(response);

						}

					});

				});

			});

		</script>
	</body>
	<!-- end::Body -->
</html>
