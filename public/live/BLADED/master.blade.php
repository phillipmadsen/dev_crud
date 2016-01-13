<!DOCTYPE html>
<html dir="ltr" lang="en-US" @yield('htmlschema', 'itemscope itemtype="http://schema.org/WebPage"')>
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>@yield('header-title', 'Grace Admin')</title>
		<meta content="@yield('seo-description', 'Grace management suite developed by phillip madsen')" name="description" />
		<meta content="@yield('seo-author', 'The Grace Company')" name="author" />
 
@yield('jsonschema')

 
	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{!! asset('/live/css/bootstrap.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('/live/style.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('/live/css/dark.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('/live/css/font-icons.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('/live/css/animate.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('/live/css/magnific-popup.css') !!}" type="text/css" />

	<link rel="stylesheet" href="{!! asset('/live/css/responsive.css') !!}" type="text/css" />

	@yield('per-page-styles')

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="{!! asset('/live/js/jquery.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('/live/js/plugins.js') !!}"></script>

	<!-- Document Title
	============================================= -->
	<title>Blank Page | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

	<!-- Header
	============================================= -->
@includes('live.partials.header')
@yield('slider')
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

@yeild('page-content')

			</div>

		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
@includes('live.partials.footer')

	<script type="text/javascript" src="{!! asset('/live/js/functions.js') !!}"></script>
	@yield('per-page-javascript')

	<script type="text/javascript">
	@yield('pagescript')
	</script>
</body>
</html>