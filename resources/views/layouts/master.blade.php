<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Konser</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
		type="text/css">
	<link href="{{ asset('global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('global_assets/js/main/jquery.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/pickers/daterangepicker.js') }}"></script>

	<script src="{{ asset('assets/js/app.js') }}"></script>
	<script src="{{ asset('global_assets/js/demo_pages/dashboard.js') }}"></script>
	<!-- /theme JS files -->

    <script src="{{ asset('global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/demo_pages/form_inputs.js') }}"></script>

    <script src="{{ asset('global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/demo_pages/datatables_basic.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/tables/datatables/extensions/buttons.min.js') }}"></script>
	<script src="{{ asset('global_assets/js/plugins/tables/datatables/extensions/select.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/demo_pages/datatables_extension_buttons_print.js') }}"></script>

    <!-- swall -->
	<script src="{{ asset('global_assets/js/plugins/notifications/sweet_alert.min.js') }}"></script>

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="{{ route('home') }}" class="d-inline-block">
				<img src="../../../../global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle"
						data-toggle="dropdown">
						<span>{{ auth()->user()->name }}</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="icon-switch2"></i>{{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<img src="../../../../global_assets/images/placeholders/placeholder.jpg"
										width="38" height="38" class="rounded-circle" alt="">
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">{{ auth()->user()->name }}</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-mention font-size-sm"></i> &nbsp;{{ auth()->user()->email }}
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header">
							<div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu"
								title="Main"></i>
						</li>
						<li class="nav-item">
							<a href="{{ route('home') }}" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
                        @if (auth()->user()->role == 'admin')
                        <li class="nav-item-header">
							<div class="text-uppercase font-size-xs line-height-xs">Admin</div> <i class="icon-menu"
								title="Main"></i>
						</li>
                        <li class="nav-item">
							<a href="{{ route('daftar') }}" class="nav-link">
								<i class="icon-users4"></i>
								<span>
									Daftar Pemesanan
								</span>
							</a>
						</li>
                        <li class="nav-item">
							<a href="{{ route('laporan') }}" class="nav-link">
								<i class="icon-file-text2"></i>
								<span>
									Laporan Pemesanan
								</span>
							</a>
						</li>
                        <li class="nav-item">
							<a href="{{ route('checkin') }}" class="nav-link">
								<i class="icon-user-check"></i>
								<span>
									Check In
								</span>
							</a>
						</li>
                            <li class="nav-item-header">
							<div class="text-uppercase font-size-xs line-height-xs">User</div> <i class="icon-menu"
								title="Main"></i>
						</li>
                        <li class="nav-item">
							<a href="{{ route('pemesanan') }}" class="nav-link">
								<i class="icon-ticket"></i>
								<span>
									Pemesana Tiket
								</span>
							</a>
						</li> 
                        <li class="nav-item">
							<a href="{{ route('lihattiket') }}" class="nav-link">
								<i class="icon-barcode2"></i>
								<span>
									Lihat Tiket
								</span>
							</a>
						</li> 
                        @endif
                        @if (auth()->user()->role == 'member')
                            <li class="nav-item-header">
							<div class="text-uppercase font-size-xs line-height-xs">User</div> <i class="icon-menu"
								title="Main"></i>
						</li>
                        <li class="nav-item">
							<a href="{{ route('pemesanan') }}" class="nav-link">
								<i class="icon-ticket"></i>
								<span>
									Pemesana Tiket
								</span>
							</a>
						</li> 
                        <li class="nav-item">
							<a href="{{ route('lihattiket') }}" class="nav-link">
								<i class="icon-barcode2"></i>
								<span>
									Lihat Tiket
								</span>
							</a>
						</li> 
                        @endif
					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->

		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">
                @yield('content')
			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
						data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
                        &copy; {{ date('Y') }}. <a href="#">Konser</a> by <a href="https://www.instagram.com/teukuululazmi/" target="_blank">Teuku Ulul Azmi</a>
                    </span>

					
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

    <script src="{{ asset('global_assets/swall-custom.js') }}"></script>

</body>

</html>