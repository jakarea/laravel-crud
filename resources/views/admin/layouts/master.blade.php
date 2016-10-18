<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- start: Meta -->
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<meta name="description" content="Bootstrap Metro Dashboard">
		<meta name="author" content="Dennis Ji">
		<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		<!-- end: Meta -->
		<!-- start: Mobile Specific -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- end: Mobile Specific -->
		<!-- start: CSS -->
		{!! Html::style('assets/admin/css/bootstrap.min.css',array('id'=>'bootstrap-style')) !!}
		{!! Html::style('assets/admin/css/bootstrap-responsive.min.css') !!}
		{!! Html::style('assets/admin/css/style.css') !!}
		{!! Html::style('assets/admin/css/style-responsive.css') !!}
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
		<!-- end: CSS -->
		<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js') !!}
			{!! Html::style('assets/admin/css/ie.css',array('id'=>'ie-style')) !!}
		<![endif]-->
		<!--[if IE 9]>
			{!! Html::style('assets/admin/css/ie9.css',array('id'=>'ie9style')) !!}
			<![endif]-->
		<!-- start: Favicon -->
		<!-- end: Favicon -->
	</head>
	<body>
		<!-- start: Header -->
		@include('admin.partial.nav')
				<!-- start: Header -->
		<div class="container-fluid-full">
			<div class="row-fluid">
				<!-- start: Main Menu -->
				<div id="sidebar-left" class="span2">
					<div class="nav-collapse sidebar-nav">
						<ul class="nav nav-tabs nav-stacked main-menu">
							<li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Jakarea Parvez</span></a></li>
							<li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
							<li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
							<li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
							<li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span><span class="label label-important"> 3 </span></a>
								<ul>
									<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
									<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
									<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
								</ul>
							</li>
							<li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
							<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
							<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
							<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
							<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
							<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
							<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
							<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
							<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
						</ul>
					</div>
				</div>
				<!-- end: Main Menu -->
				<noscript>
					<div class="alert alert-block span10">
						<h4 class="alert-heading">Warning!</h4>
						<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
					</div>
				</noscript>
				<!-- start: Content -->
				@yield('content')
								<!--/.fluid-container-->
				<!-- end: Content -->
			</div>
			<!--/#content.span10-->
		</div>
		<!--/fluid-row-->
		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>
		<div class="clearfix"></div>
		<footer>
			<p>
				<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			</p>
		</footer>
		<!-- start: JavaScript-->
		{!! Html::script('assets/admin/js/jquery-1.9.1.min.js') !!}
		{!! Html::script('assets/admin/js/jquery-migrate-1.0.0.min.js') !!}
		{!! Html::script('assets/admin/js/jquery-ui-1.10.0.custom.min.js') !!}
		{!! Html::script('assets/admin/js/jquery.ui.touch-punch.js') !!}
		{!! Html::script('assets/admin/js/modernizr.js') !!}
		{!! Html::script('assets/admin/js/bootstrap.min.js') !!}
		{!! Html::script('assets/admin/js/jquery.cookie.js') !!}
		{!! Html::script('assets/admin/js/fullcalendar.min.js') !!}
		{!! Html::script('assets/admin/js/jquery.dataTables.min.js') !!}
		{!! Html::script('assets/admin/js/excanvas.js') !!}
		{!! Html::script('assets/admin/js/jquery.flot.js') !!}
		{!! Html::script('assets/admin/js/jquery.flot.pie.js') !!}
		{!! Html::script('assets/admin/js/jquery.flot.stack.js') !!}
		{!! Html::script('assets/admin/js/jquery.flot.resize.min.js') !!}
		{!! Html::script('assets/admin/js/jquery.chosen.min.js') !!}
		{!! Html::script('assets/admin/js/jquery.uniform.min.js') !!}
		{!! Html::script('assets/admin/js/jquery.cleditor.min.js') !!}
		{!! Html::script('assets/admin/js/jquery.noty.js') !!}
		{!! Html::script('assets/admin/js/jquery.elfinder.min.js') !!}
		{!! Html::script('assets/admin/js/jquery.raty.min.js') !!}
		{!! Html::script('assets/admin/js/jquery.iphone.toggle.js') !!}
		{!! Html::script('assets/admin/js/jquery.uploadify-3.1.min.js') !!}
		{!! Html::script('assets/admin/js/jquery.gritter.min.js') !!}
		{!! Html::script('assets/admin/js/jquery.imagesloaded.js') !!}
		{!! Html::script('assets/admin/js/jquery.masonry.min.js') !!}
		{!! Html::script('assets/admin/js/jquery.knob.modified.js') !!}
		{!! Html::script('assets/admin/js/jquery.sparkline.min.js') !!}
		{!! Html::script('assets/admin/js/counter.js') !!}
		{!! Html::script('assets/admin/js/retina.js') !!}
		{!! Html::script('assets/admin/js/custom.js') !!}
		<!-- end: JavaScript-->
	</body>
</html>