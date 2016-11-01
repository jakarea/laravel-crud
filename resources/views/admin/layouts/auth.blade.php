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
		<style type="text/css">
			body { background: url({!! url('assets/admin/img/bg-login.jpg') !!}) !important; }
		</style>
	</head>
	<body>
		<!-- start: Header -->
				<!-- start: Header -->
		<div class="container-fluid-full">
			<div class="row-fluid">
				
				<!-- start: Content -->
				@yield('content')
					
				<!-- end: Content -->
			</div>
			<!--/#content.span10-->
		</div>
		<!--/fluid-row-->
	</body>
</html>