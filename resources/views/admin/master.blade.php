<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/sidebar-menu.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/css/_all-skins.min.css">




  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel="stylesheet" href="/css/datagrid/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="/css/datagrid/responsive.bootstrap.min.css">
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
	<div class="wrapper">

		@yield('sidemenu')
			
		<div class="col-sm-12" style="padding:0px;">

		    <!-- Content Wrapper. Contains page content -->
		    <div class="content-wrapper">
		      <!-- Content Header (Page header) -->
		     	@yield('content')
		      <!-- /.content -->
		    </div>
		    <!-- /.content-wrapper -->

		    <footer class="main-footer">
		      @yield('footer')
		    </footer>

		</div>
	</div>
	<script type="text/javascript" src="/js/datagrid/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="/js/datagrid/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/datagrid/dataTables.responsive.min.js"></script>
	<script type="text/javascript" src="/js/datagrid/responsive.bootstrap.min.js"></script>
</body>
</html>