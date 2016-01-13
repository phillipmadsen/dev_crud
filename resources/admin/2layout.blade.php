<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>{{ config('blog.title') }} Admin</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
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
		@yield('styles')
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		<!-- start: HEADER -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!-- start: TOP NAVIGATION CONTAINER -->
			<div class="container">
				<div class="navbar-header">
					<!-- start: RESPONSIVE MENU TOGGLER -->
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="clip-list-2"></span>
					</button>
					<!-- end: RESPONSIVE MENU TOGGLER -->
					<!-- start: LOGO -->
					<a class="navbar-brand" href="index.html">
						GRACE<i class="clip-clip"></i>ADMIN
					</a>
					<!-- end: LOGO -->
				</div>
				<div class="navbar-tools">
					<!-- start: TOP NAVIGATION MENU -->
					@include('admin.partials.navbar')
			 
					<!-- end: TOP NAVIGATION MENU -->
				</div>
			</div>
			<!-- end: TOP NAVIGATION CONTAINER -->
		</div>
		<!-- end: HEADER -->
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
			<div class="navbar-content">
				<!-- start: SIDEBAR -->
				<div class="main-navigation navbar-collapse collapse">
					<!-- start: MAIN MENU TOGGLER BUTTON -->
					<div class="navigation-toggler">
						<i class="clip-chevron-left"></i>
						<i class="clip-chevron-right"></i>
					</div>
					<!-- end: MAIN MENU TOGGLER BUTTON -->
					<!-- start: MAIN NAVIGATION MENU -->
				{{-- 	<ul class="main-navigation-menu">
						<li>
							<a href="index.html"><i class="clip-home-3"></i>
								<span class="title"> Dashboard </span><span class="selected"></span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)"><i class="clip-screen"></i>
								<span class="title"> Layouts </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="layouts_horizontal_menu1.html">
										<span class="title"> Horizontal Menu </span>
										<span class="badge badge-new">new</span>
									</a>
								</li>
								<li>
									<a href="layouts_sidebar_closed.html">
										<span class="title"> Sidebar Closed </span>
									</a>
								</li>
								<li>
									<a href="layouts_boxed_layout.html">
										<span class="title"> Boxed Layout </span>
									</a>
								</li>
								<li>
									<a href="layouts_footer_fixed.html">
										<span class="title"> Footer Fixed </span>
									</a>
								</li>
								<li>
									<a href="../clip-one-rtl/index.html">
										<span class="title"> RTL Version </span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="../../frontend/clip-one/index.html" target="_blank"><i class="clip-cursor"></i>
								<span class="title"> Frontend Theme </span><span class="selected"></span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)"><i class="clip-cog-2"></i>
								<span class="title"> UI Lab </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="ui_elements.html">
										<span class="title"> Elements </span>
									</a>
								</li>
								<li>
									<a href="ui_buttons.html">
										<span class="title"> Buttons &amp; icons </span>
									</a>
								</li>
								<li>
									<a href="ui_animations.html">
										<span class="title"> CSS3 Animation </span>
									</a>
								</li>
								<li>
									<a href="ui_modals.html">
										<span class="title"> Extended Modals </span>
									</a>
								</li>
								<li>
									<a href="ui_tabs_accordions.html">
										<span class="title"> Tabs &amp; Accordions </span>
									</a>
								</li>
								<li>
									<a href="ui_sliders.html">
										<span class="title"> Sliders </span>
									</a>
								</li>
								<li>
									<a href="ui_treeview.html">
										<span class="title"> Treeview </span>
									</a>
								</li>
								<li>
									<a href="ui_nestable.html">
										<span class="title"> Nestable List </span>
									</a>
								</li>
								<li>
									<a href="ui_typography.html">
										<span class="title"> Typography </span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:void(0)"><i class="clip-grid-6"></i>
								<span class="title"> Tables </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="table_static.html">
										<span class="title">Static Tables</span>
									</a>
								</li>
								<li>
									<a href="table_responsive.html">
										<span class="title">Responsive Tables</span>
									</a>
								</li>
								<li>
									<a href="table_data.html">
										<span class="title">Data Tables</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:void(0)"><i class="clip-pencil"></i>
								<span class="title"> Forms </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="form_elements.html">
										<span class="title">Form Elements</span>
									</a>
								</li>
								<li>
									<a href="form_wizard.html">
										<span class="title">Form Wizard</span>
									</a>
								</li>
								<li>
									<a href="form_validation.html">
										<span class="title">Form Validation</span>
									</a>
								</li>
								<li>
									<a href="form_inline.html">
										<span class="title">Inline Editor</span>
									</a>
								</li>
								<li>
									<a href="form_x_editable.html">
										<span class="title">Form X-editable</span>
									</a>
								</li>
								<li>
									<a href="form_image_cropping.html">
										<span class="title">Image Cropping</span>
									</a>
								</li>
								<li>
									<a href="form_multiple_upload.html">
										<span class="title">Multiple File Upload</span>
									</a>
								</li>
								<li>
									<a href="form_dropzone.html">
										<span class="title">Dropzone File Upload</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:void(0)"><i class="clip-user-2"></i>
								<span class="title">Login</span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="login_example1.html">
										<span class="title">Login Form Example 1</span>
									</a>
								</li>
								<li>
									<a href="login_example2.html">
										<span class="title">Login Form Example 2</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="active open">
							<a href="javascript:void(0)"><i class="clip-file"></i>
								<span class="title">Pages</span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="pages_user_profile.html">
										<span class="title">User Profile</span>
									</a>
								</li>
								<li>
									<a href="pages_invoice.html">
										<span class="title">Invoice</span>
										<span class="badge badge-new">new</span>
									</a>
								</li>								
								<li>
									<a href="pages_gallery.html">
										<span class="title">Gallery</span>
									</a>
								</li>
								<li>
									<a href="pages_timeline.html">
										<span class="title">Timeline</span>
									</a>
								</li>
								<li>
									<a href="pages_calendar.html">
										<span class="title">Calendar</span>
									</a>
								</li>
								<li>
									<a href="pages_messages.html">
										<span class="title">Messages</span>
									</a>
								</li>
								<li class="active">
									<a href="pages_blank_page.html">
										<span class="title">Blank Page</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:void(0)"><i class="clip-attachment-2"></i>
								<span class="title">Utility</span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="utility_faq.html">
										<span class="title">Faq</span>
									</a>
								</li>
								<li>
									<a href="utility_search_result.html">
										<span class="title">Search Results </span>
										<span class="badge badge-new">new</span>
									</a>
								</li>								
								<li>
									<a href="utility_lock_screen.html">
										<span class="title">Lock Screen</span>
									</a>
								</li>
								<li>
									<a href="utility_404_example1.html">
										<span class="title">Error 404 Example 1</span>
									</a>
								</li>
								<li>
									<a href="utility_404_example2.html">
										<span class="title">Error 404 Example 2</span>
									</a>
								</li>
								<li>
									<a href="utility_404_example3.html">
										<span class="title">Error 404 Example 3</span>
									</a>
								</li>
								<li>
									<a href="utility_500_example1.html">
										<span class="title">Error 500 Example 1</span>
									</a>
								</li>
								<li>
									<a href="utility_500_example2.html">
										<span class="title">Error 500 Example 2</span>
									</a>
								</li>
								<li>
									<a href="utility_pricing_table.html">
										<span class="title">Pricing Table</span>
									</a>
								</li>
								<li>
									<a href="utility_coming_soon.html">
										<span class="title">Cooming Soon</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;" class="active">
								<i class="clip-folder"></i>
								<span class="title"> 3 Level Menu </span>
								<i class="icon-arrow"></i>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
										Item 1 <i class="icon-arrow"></i>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="#">
												Sample Link 1
											</a>
										</li>
										<li>
											<a href="#">
												Sample Link 2
											</a>
										</li>
										<li>
											<a href="#">
												Sample Link 3
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">
										Item 1 <i class="icon-arrow"></i>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="#">
												Sample Link 1
											</a>
										</li>
										<li>
											<a href="#">
												Sample Link 1
											</a>
										</li>
										<li>
											<a href="#">
												Sample Link 1
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">
										Item 3
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
								<i class="clip-folder-open"></i>
								<span class="title"> 4 Level Menu </span><i class="icon-arrow"></i>
								<span class="arrow "></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
										Item 1 <i class="icon-arrow"></i>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="javascript:;">
												Sample Link 1 <i class="icon-arrow"></i>
											</a>
											<ul class="sub-menu">
												<li>
													<a href="#"><i class="fa fa-times"></i>
														Sample Link 1</a>
												</li>
												<li>
													<a href="#"><i class="fa fa-pencil"></i>
														Sample Link 1</a>
												</li>
												<li>
													<a href="#"><i class="fa fa-edit"></i>
														Sample Link 1</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">
												Sample Link 1
											</a>
										</li>
										<li>
											<a href="#">
												Sample Link 2
											</a>
										</li>
										<li>
											<a href="#">
												Sample Link 3
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">
										Item 2 <i class="icon-arrow"></i>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="#">
												Sample Link 1
											</a>
										</li>
										<li>
											<a href="#">
												Sample Link 1
											</a>
										</li>
										<li>
											<a href="#">
												Sample Link 1
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">
										Item 3
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="maps.html"><i class="clip-location"></i>
								<span class="title">Maps</span>
								<span class="selected"></span>
							</a>
						</li>
						<li>
							<a href="charts.html"><i class="clip-bars"></i>
								<span class="title">Charts</span>
								<span class="selected"></span>
							</a>
						</li>
					</ul> --}}
					<!-- end: MAIN NAVIGATION MENU -->
				</div>
				<!-- end: SIDEBAR -->
			</div>
			<!-- start: PAGE -->
			<div class="main-content">
				<!-- start: PANEL CONFIGURATION MODAL FORM -->
				<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title">Panel Configuration</h4>
							</div>
							<div class="modal-body">
								Here will be a configuration form
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
								<button type="button" class="btn btn-primary">
									Save changes
								</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- end: SPANEL CONFIGURATION MODAL FORM -->
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: STYLE SELECTOR BOX -->
					{{-- 		<div id="style_selector" class="hidden-xs">
								<div id="style_selector_container">
									<div class="style-main-title">
										Style Selector
									</div>
									<div class="box-title">
										Choose Your Layout Style
									</div>
									<div class="input-box">
										<div class="input">
											<select name="layout">
												<option value="default">Wide</option><option value="boxed">Boxed</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Choose Your Header Style
									</div>
									<div class="input-box">
										<div class="input">
											<select name="header">
												<option value="fixed">Fixed</option><option value="default">Default</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Choose Your Footer Style
									</div>
									<div class="input-box">
										<div class="input">
											<select name="footer">
												<option value="default">Default</option><option value="fixed">Fixed</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Backgrounds for Boxed Version
									</div>
									<div class="images boxed-patterns">
										<a id="bg_style_1" href="#"><img alt="" src="{!! asset('/admin/assets/images/bg.png') !!}"></a>
										<a id="bg_style_2" href="#"><img alt="" src="{!! asset('/admin/assets/images/bg_2.png') !!}"></a>
										<a id="bg_style_3" href="#"><img alt="" src="{!! asset('/admin/assets/images/bg_3.png') !!}"></a>
										<a id="bg_style_4" href="#"><img alt="" src="{!! asset('/admin/assets/images/bg_4.png') !!}"></a>
										<a id="bg_style_5" href="#"><img alt="" src="{!! asset('/admin/assets/images/bg_5.png') !!}"></a>
									</div>
									<div class="box-title">
										5 Predefined Color Schemes
									</div>
									<div class="images icons-color">
										<a id="light" href="#"><img class="active" alt="" src="assets/images/lightgrey.png"></a>
										<a id="dark" href="#"><img alt="" src="{!! asset('/admin/assets/images/darkgrey.png') !!}"></a>
										<a id="black_and_white" href="#"><img alt="" src="{!! asset('/admin/assets/images/blackandwhite.png') !!}"></a>
										<a id="navy" href="#"><img alt="" src="{!! asset('/admin/assets/images/navy.png') !!}"></a>
										<a id="green" href="#"><img alt="" src="{!! asset('/admin/assets/images/green.png') !!}"></a>
									</div>
									<div class="box-title">
										Style it with LESS
									</div>
									<div class="images">
										<div class="form-group">
											<label>
												Basic
											</label>
											<input type="text" value="#ffffff" class="color-base">
											<div class="dropdown">
												<a class="add-on dropdown-toggle" data-toggle="dropdown"><i style="background-color: #ffffff"></i></a>
												<ul class="dropdown-menu pull-right">
													<li>
														<div class="colorpalette"></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="form-group">
											<label>
												Text
											</label>
											<input type="text" value="#555555" class="color-text">
											<div class="dropdown">
												<a class="add-on dropdown-toggle" data-toggle="dropdown"><i style="background-color: #555555"></i></a>
												<ul class="dropdown-menu pull-right">
													<li>
														<div class="colorpalette"></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="form-group">
											<label>
												Elements
											</label>
											<input type="text" value="#007AFF" class="color-badge">
											<div class="dropdown">
												<a class="add-on dropdown-toggle" data-toggle="dropdown"><i style="background-color: #007AFF"></i></a>
												<ul class="dropdown-menu pull-right">
													<li>
														<div class="colorpalette"></div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div style="height:25px;line-height:25px; text-align: center">
										<a class="clear_style" href="#">
											Clear Styles
										</a>
										<a class="save_style" href="#">
											Save Styles
										</a>
									</div>
								</div>
								<div class="style-toggle close"></div>
							</div> --}}
							<!-- end: STYLE SELECTOR BOX -->
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-file"></i>
									<a href="#">
										Pages
									</a>
								</li>
								<li class="active">
									Blank Page
								</li>
								<li class="search-box">
									<form class="sidebar-search">
										<div class="form-group">
											<input type="text" placeholder="Start Searching...">
											<button class="submit">
												<i class="clip-search-3"></i>
											</button>
										</div>
									</form>
								</li>
							</ol>
							<div class="page-header">
								<h1>Blank Page <small>blank page</small></h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					@yield('content')
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		<div class="footer clearfix">
			<div class="footer-inner">
				2014 &copy; Grace Admin by Phillip MAdsen.
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div>
		<!-- end: FOOTER -->
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="{!! asset('/admin/assets/plugins/respond.min.js') !!}"></script>
		<script src="{!! asset('/admin/assets/plugins/excanvas.min.js') !!}"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="{!! asset('https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js') !!}"></script>
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
		@yield('scripts')
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>