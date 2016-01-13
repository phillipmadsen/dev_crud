<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]>
<html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
	<title>@yield('title', 'Grace Admin Panel')</title>
	<!-- start: META -->
	<meta charset="utf-8"/>
	<!--[if IE]>
	<meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1"/><![endif]-->
	<meta name="viewport"
	      content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<!-- end: META -->
	<!-- start: MAIN CSS -->
	<link rel="stylesheet" href="{!! asset('/admin/assets/plugins/bootstrap/css/bootstrap.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('/admin/assets/plugins/font-awesome/css/font-awesome.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('/admin/assets/fonts/style.css') !!}">
	<link rel="stylesheet" href="{!! asset('/admin/assets/css/main.css') !!}">
	<link rel="stylesheet" href="{!! asset('/admin/assets/css/main-responsive.css') !!}">
	<link rel="stylesheet" href="{!! asset('/admin/assets/plugins/iCheck/skins/all.css') !!}">
	<link rel="stylesheet" href="{!! asset('/admin/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css') !!}">
	<link rel="stylesheet" href="{!! asset('/admin/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css') !!}">

	<link rel="stylesheet" href="{!! asset('/admin/assets/css/theme_light.css') !!}" type="text/css" id="skin_color">
	<link rel="stylesheet" href="{!! asset('/admin/assets/css/print.css') !!}" type="text/css" media="print"/>
	<!--[if IE 7]>
	<link rel="stylesheet" href="{!! asset('/admin/assets/plugins/font-awesome/css/font-awesome-ie7.min.css') !!}">
	<![endif]-->
	<!-- end: MAIN CSS -->
	<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
	@yield('per-page-styles')
	<script type="text/javascript">

	</script>

			<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- end: HEAD -->
<!-- start: BODY -->
<body>
<!-- start: HEADER -->
<div class="navbar navbar-inverse navbar-fixed-top">
	@include('admin.partials.admin-header')
</div>
<!-- end: HEADER -->
<!-- start: MAIN CONTAINER -->
<div class="main-container">
	<div class="navbar-content">
		<!-- start: SIDEBAR -->
		<div class="main-navigation navbar-collapse collapse">
			{{-- {!! $menu_admin->asUl() !!} --}}
			@include('admin.partials.menu.sidebar')
		</div>
		<!-- end: SIDEBAR -->
	</div>
	<!-- start: PAGE -->
	<div class="main-content">
		@yield('admin-modal-config')
		@include('admin.partials.admin-modal-config')
		<div class="container">
			<!-- start: PAGE HEADER -->
			<div class="row">
				<div class="col-sm-12">
					{{-- @include('admin.partials.admin-style-selector') --}}
							<!-- start: PAGE TITLE & BREADCRUMB -->
					<ol class="breadcrumb">
						<li><a href="{{ url("admin/") }}">@yield('parent-breadcrumb', 'Dashboard')</a></li>
						<li class="active">@yield('active-breadcrumb','replace me')</li>
					</ol>
					<div class="page-header">
						<h1>@yield('header-title','Dashboard')
							<small>@yield('header-title-small', 'overview &amp;  stats') </small>
						</h1>
					</div>
					<!-- end: PAGE TITLE & BREADCRUMB -->
				</div>
			</div>
			<!-- end: PAGE HEADER -->
			<!-- start: PAGE CONTENT -->
			@yield('content')
			@yield('page-section')

					<!-- end: PAGE CONTENT-->
		</div>
	</div>
	<!-- end: PAGE -->
</div>
<!-- end: MAIN CONTAINER -->
<!-- start: FOOTER -->
<div class="footer clearfix">
	@include('admin.partials.admin-footer')
</div>
<!-- end: FOOTER -->
@include('admin.partials.admin-footer-event-management')

		<!-- start: MAIN JAVASCRIPTS -->
<!--[if lt IE 9]>
<script src="{!! asset('/admin/assets/plugins/respond.min.js') !!}"></script>
<script src="{!! asset('/admin/assets/plugins/excanvas.min.js') !!}"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!--<![endif]-->
<script src="{!! asset('/admin/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') !!}"></script>
<script src="{!! asset('/admin/assets/plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('/admin/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') !!}"></script>
<script src="{!! asset('/admin/assets/plugins/blockUI/jquery.blockUI.js') !!}"></script>
<script src="{!! asset('/admin/assets/plugins/iCheck/jquery.icheck.min.js') !!}"></script>
<script src="{!! asset('/admin/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js') !!}"></script>
<script src="{!! asset('/admin/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js') !!}"></script>
<script src="{!! asset('/admin/assets/plugins/less/less-1.5.0.min.js') !!}"></script>
<script src="{!! asset('/admin/assets/plugins/jquery-cookie/jquery.cookie.js') !!}"></script>
<script src="{!! asset('/admin/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js') !!}"></script>
<script src="{!! asset('/admin/assets/js/main.js') !!}"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@yield('per-page-javascripts')
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
	@yield('footer-page-script')
		jQuery(document).ready(function () {
		@yield('custom-in-script', ' Main.init(); Index.init();')

	});
</script>
</body>
<!-- end: BODY -->
</html>